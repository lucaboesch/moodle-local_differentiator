<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Class handlers.
 *
 * @package     local_differentiator
 * @copyright   2019 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_differentiator\external;

use external_function_parameters;
use external_multiple_structure;
use external_settings;
use external_single_structure;
use external_value;

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir . '/externallib.php');

/**
 * Class handlers
 *
 * @package     local_differentiator
 * @copyright   2019 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class handlers extends \external_api {
    // Taken from mod/choicegroup/classes/external.php.
    /**
     * Definition of parameters for {@see get_handlers()}.
     * Returns description of method parameters.
     *
     * @return external_function_parameters
     */
    public static function get_handlers_parameters() {
        return new external_function_parameters(
            [
                'userid' => new external_value(PARAM_INT, 'userid'),
                'learninggoalid' => new external_value(PARAM_INT, 'learninggoalid'),
            ]
        );
    }

    /**
     * Definition of return type for {@see get_handlers()}.
     * Returns description of method result value.
     *
     * @return external_multiple_structure
     */
    public static function get_handlers_returns() {
        return new external_multiple_structure(
            new external_single_structure(
                [
                    'tabs' => new external_multiple_structure(
                        new external_single_structure(
                            [
                                'id' => new external_value(PARAM_INT, 'Tabulator id', VALUE_OPTIONAL),
                                'tabtitle' => new external_value(PARAM_TEXT, 'Tabulator title', VALUE_OPTIONAL),
                                'tabcolor' => new external_value(PARAM_TEXT, 'Tabulator color', VALUE_OPTIONAL),
                                'targetinput' => new external_value(PARAM_TEXT, 'Target input field', VALUE_OPTIONAL),
                                'categories' => new external_multiple_structure(
                                    new external_single_structure(
                                        [
                                            'parenttabid' => new external_value(PARAM_TEXT, 'Parent tabulator id', VALUE_OPTIONAL),
                                            'cattitle' => new external_value(PARAM_TEXT, 'Category title', VALUE_OPTIONAL),
                                            'cattext' => new external_value(PARAM_TEXT, 'Category text', VALUE_OPTIONAL),
                                            'words' => new external_multiple_structure(
                                                new external_single_structure(
                                                    [
                                                        'title' => new external_value(PARAM_TEXT, 'Word title', VALUE_OPTIONAL),
                                                        'text' => new external_value(PARAM_TEXT, 'Word text', VALUE_OPTIONAL),
                                                        'targetinput' => new external_value(
                                                            PARAM_TEXT,
                                                            'Learning goal text field to be filled'
                                                        ),
                                                    ]
                                                ),
                                                'Category words',
                                                VALUE_OPTIONAL
                                            ),
                                        ]
                                    ),
                                    'Tabulator categories',
                                    VALUE_OPTIONAL
                                ),
                            ]
                        ),
                        'Tabulators',
                        VALUE_OPTIONAL
                    ),
                ]
            ),
            'Handler tabs',
            VALUE_OPTIONAL
        );
    }

    /**
     * Get the differentiator handlers.
     *
     * @param int $userid
     * @param int $learninggoalid
     * @return array
     * @throws \invalid_parameter_exception
     */
    public static function get_handlers($userid, $learninggoalid) {
        self::validate_parameters(
            self::get_handlers_parameters(),
            [
                'userid' => $userid,
                'learninggoalid' => $learninggoalid,
            ]
        );

        self::validate_context(\context_system::instance());

        global $PAGE, $DB, $SESSION, $USER;
        $renderer = $PAGE->get_renderer('core');

        // Do additional setup stuff.
        $settings = external_settings::get_instance();
        $displaylang = $settings->get_lang() ? $settings->get_lang() : (isset($SESSION->lang) ? $SESSION->lang : $USER->lang);

        $ctx = \context_system::instance();

        // Static tab definitions. These values are fixed in code (never user input). The tabprefix values
        // are interpolated into table and column names in the queries below, so they are drawn exclusively
        // from this definition and validated against $allowedprefixes before use.
        $tabdefinitions = [
            (object) [
                'id' => 0,
                'tabtitle' => get_string('thinkingskill', 'local_differentiator'),
                'tabcolor' => '#009',
                'tabprefix' => 'ts',
                'targetinput' => 'thinking_skill',
            ],
            (object) [
                'id' => 1,
                'tabtitle' => get_string('content', 'local_differentiator'),
                'tabcolor' => '#600',
                'tabprefix' => 'c',
                'targetinput' => 'content',
            ],
            (object) [
                'id' => 2,
                'tabtitle' => get_string('resources', 'local_differentiator'),
                'tabcolor' => '#090',
                'tabprefix' => 'r',
                'targetinput' => 'resource',
            ],
            (object) [
                'id' => 3,
                'tabtitle' => get_string('products', 'local_differentiator'),
                'tabcolor' => '#909',
                'tabprefix' => 'p',
                'targetinput' => 'product',
            ],
            (object) [
                'id' => 4,
                'tabtitle' => get_string('groups', 'local_differentiator'),
                'tabcolor' => '#990',
                'tabprefix' => 'g',
                'targetinput' => 'group',
            ],
        ];

        // Allowlist of valid tab prefixes. Only these may be interpolated into table/column names below.
        $allowedprefixes = ['ts', 'c', 'r', 'p', 'g'];

        $handlers = new \stdClass();
        $handlers->tabs = [];
        // Now tabs id, tabtitle, tabcolor are set.
        foreach ($tabdefinitions as $tabdefinition) {
            $handlers->tabs[$tabdefinition->id] = $tabdefinition;
        }

        // Now iterate through the tabs to add their categories.
        foreach ($handlers->tabs as $tab) {
            // The prefix is interpolated into table/column names, so guard it against the allowlist.
            if (!in_array($tab->tabprefix, $allowedprefixes, true)) {
                throw new \coding_exception('Invalid differentiator tab prefix: ' . $tab->tabprefix);
            }
            $prefix = $tab->tabprefix;

            // Create the query through the categories.
            $categorysql = 'SELECT wc.id AS id,
                            wce.' . $prefix . 'wcetitle as cattitle,
                            wce.' . $prefix . 'wcetext as cattext
                            FROM {local_differentiator_' . $prefix . 'wce} wce
                            JOIN {local_differentiator_' . $prefix . 'wc} wc
                            ON wc.id = wce.' . $prefix . 'wcid AND wce.lang = :lang
                            ORDER BY wc.sort ASC';

            // Perform that query.
            $categories = $DB->get_records_sql($categorysql, ['lang' => $displaylang]);

            // Add the categories to the $handlers object.
            foreach ($categories as $category) {
                $handlers->tabs[$tab->id]->categories[$category->id] = new \stdClass();
                $handlers->tabs[$tab->id]->categories[$category->id]->cattitle = $category->cattitle;
                $handlers->tabs[$tab->id]->categories[$category->id]->cattext = $category->cattext;
                $handlers->tabs[$tab->id]->categories[$category->id]->parenttabid = $tab->id;

                // Create the query through the words.
                $wordsql = 'SELECT w.id AS id,
                we.' . $prefix . 'wetitle as wordtitle,
                we.' . $prefix . 'wetext as wordtext
                FROM {local_differentiator_' . $prefix . 'we} we
                JOIN {local_differentiator_' . $prefix . 'w} w
                ON w.id = we.' . $prefix . 'wid
                JOIN {local_differentiator_' . $prefix . 'wc} wc
                ON wc.id = w.' . $prefix . 'wcid AND we.lang = :lang
                WHERE wc.id = :categoryid
                ORDER BY w.sort ASC';
                // Perform that query.
                $words = $DB->get_records_sql($wordsql, ['lang' => $displaylang, 'categoryid' => $category->id]);

                // Add the words to the $handlers object.
                foreach ($words as $word) {
                    $handlers->tabs[$tab->id]->categories[$category->id]->words[$word->id] = new \stdClass();
                    $handlers->tabs[$tab->id]->categories[$category->id]->words[$word->id]->title = $word->wordtitle;
                    $handlers->tabs[$tab->id]->categories[$category->id]->words[$word->id]->text = $word->wordtext;
                    $handlers->tabs[$tab->id]->categories[$category->id]->words[$word->id]->targetinput = $tab->targetinput;
                }
            }
        }
        $exporter = new exporter\handlers($handlers, $ctx);
        $list[] = $exporter->export($renderer);
        return $list;
    }
}
