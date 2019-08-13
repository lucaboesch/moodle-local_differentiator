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
 * TODO.
 *
 * @package     local_differentiator
 * @copyright   2019 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_differentiator\external;

use external_function_parameters;
use external_multiple_structure;
use external_single_structure;
use external_value;

defined('MOODLE_INTERNAL') || die();

/**
 * Class handlers
 *
 * @package     local_differentiator
 * @copyright   2019 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class handlers extends \external_api {
// Take from mod/choicegroup/classes/external.php
    /**
     * Returns description of method parameters.
     *
     * @return external_function_parameters
     */
    public static function get_handlers_parameters() {
        return new external_function_parameters(
            array (
                'userid' => new external_value(PARAM_INT, 'userid'),
                'learninggoalid' => new external_value(PARAM_INT, 'learninggoalid'),
            )
        );
    }

    /**
     * Returns description of method result value.
     * Describes the get_handlers_returns return values.
     *
     * @return external_multiple_structure
     */
    public static function get_handlers_returns() {
        return new external_multiple_structure(
            new external_single_structure(
                array(
                    'tabs' => new external_multiple_structure(
                        new external_single_structure(
                            array(
                                'id' => new external_value(PARAM_INT, 'Tabulator id', VALUE_OPTIONAL),
                                'tabtitle' => new external_value(PARAM_TEXT, 'Tabulator title', VALUE_OPTIONAL),
                                'tabcolor' => new external_value(PARAM_TEXT, 'Tabulator color', VALUE_OPTIONAL),
                                'categories' => new external_multiple_structure(
                                    new external_single_structure(
                                        array(
                                            'parenttabid' => new external_value(PARAM_TEXT, 'Parent tabulator id', VALUE_OPTIONAL),
                                            'cattitle' => new external_value(PARAM_TEXT, 'Category title', VALUE_OPTIONAL),
                                            'cattext' => new external_value(PARAM_TEXT, 'Category text', VALUE_OPTIONAL),
                                            'words' => new external_multiple_structure(
                                                new external_single_structure(
                                                    array(
                                                        'title' => new external_value(PARAM_TEXT, 'Word title', VALUE_OPTIONAL),
                                                        'text' => new external_value(PARAM_TEXT, 'Word text', VALUE_OPTIONAL),
                                                    )
                                                ), 'Category words', VALUE_OPTIONAL
                                            ),
                                        )
                                    ), 'Tabulator categories', VALUE_OPTIONAL
                                ),
                            )
                        ), 'Tabulators', VALUE_OPTIONAL
                    ),
                )
            ), 'Handler tabs', VALUE_OPTIONAL
        );
    }

    /**
     * Get the differentiator handlers.
     *
     * @param void
     * @return array
     * @throws \invalid_parameter_exception
     */
    public static function get_handlers($userid, $learninggoalid) {
        $params = self::validate_parameters(self::get_handlers_parameters(),
            array(
                'userid' => $userid,
                'learninggoalid' => $learninggoalid
            )
        );

        self::validate_context(\context_system::instance());

        global $PAGE, $DB;
        $renderer = $PAGE->get_renderer('core');

        $ctx = \context_system::instance();

        $sql = "SELECT 0 AS id, '" . get_string('thinkingskill', 'local_differentiator') . "' AS tabtitle, '#009' AS tabcolor,
                    'ts' AS tabprefix
                UNION
                SELECT 1 AS id, '" . get_string('content', 'local_differentiator') . "' AS tabtitle, '#600' AS tabcolor,
                    'c' AS tabprefix
                UNION
                SELECT 2 AS id, '" . get_string('resources', 'local_differentiator') . "' AS tabtitle, '#090' AS tabcolor,
                    'r' AS tabprefix
                UNION
                SELECT 3 AS id, '" . get_string('products', 'local_differentiator') . "' AS tabtitle, '#909' AS tabcolor,
                    'p' AS tabprefix
                UNION
                SELECT 4 AS id, '" . get_string('groups', 'local_differentiator') . "' AS tabtitle, '#990' AS tabcolor,
                    'g' AS tabprefix
                ORDER BY id ASC";

        $handlers = new \stdClass();
        $handlers->tabs = $DB->get_records_sql($sql);
        // Now tabs id, tabtitle, tabcolor are set.
        // Now iterate through the tabs to add their categories.

        foreach ($handlers->tabs as $tab) {
            // Create the query through the categories.
            $categorysql = 'SELECT wc.id AS id,
                            ' . $tab->id . ' AS parenttabid,
                            wce.' . $handlers->tabs[$tab->id]->tabprefix . 'wcetitle as cattitle,
                            wce.' . $handlers->tabs[$tab->id]->tabprefix . 'wcetext as cattext
                            FROM {local_differentiator_' . $handlers->tabs[$tab->id]->tabprefix . 'wce} wce
                            JOIN {local_differentiator_' . $handlers->tabs[$tab->id]->tabprefix . 'wc} wc
                            ON wc.id = wce.' . $handlers->tabs[$tab->id]->tabprefix . 'wcid
                            ORDER BY wc.sort ASC';

            // Perform that query.
            $categories = $DB->get_records_sql($categorysql);

            // Add the categories to the $handlers object.
            foreach ($categories as $category) {
                $handlers->tabs[$tab->id]->categories[$category->id]->cattitle = $category->cattitle;
                $handlers->tabs[$tab->id]->categories[$category->id]->cattext = $category->cattext;
                $handlers->tabs[$tab->id]->categories[$category->id]->parenttabid = $category->parenttabid;

                // Create the query through the words.
                $wordsql = 'SELECT w.id AS id,
                we.' . $handlers->tabs[$tab->id]->tabprefix . 'wetitle as wordtitle,
                we.' . $handlers->tabs[$tab->id]->tabprefix . 'wetext as wordtext
                FROM {local_differentiator_' . $handlers->tabs[$tab->id]->tabprefix . 'we} we
                JOIN {local_differentiator_' . $handlers->tabs[$tab->id]->tabprefix . 'w} w
                ON w.id = we.' . $handlers->tabs[$tab->id]->tabprefix . 'wid
                JOIN {local_differentiator_' . $handlers->tabs[$tab->id]->tabprefix . 'wc} wc
                ON wc.id = w.' . $handlers->tabs[$tab->id]->tabprefix . 'wcid
                WHERE wc.id = ' . $category->id . '
                ORDER BY w.sort ASC';

                // Perform that query.
                $words = $DB->get_records_sql($wordsql);

                // Add the words to the $handlers object.
                foreach ($words as $word) {
                    $handlers->tabs[$tab->id]->categories[$category->id]->words[$word->id]->title = $word->wordtitle;
                    $handlers->tabs[$tab->id]->categories[$category->id]->words[$word->id]->text = $word->wordtext;
                }
            }
        }
        $exporter = new exporter\handlers($handlers, $ctx);
        $list[] = $exporter->export($renderer);
        return $list;
    }
}