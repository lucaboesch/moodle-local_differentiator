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
//                // If I had any parameters, they would be described here. But I don't have any, so this array is empty.
//            )
//        );
//        return new external_function_parameters([
            'id' => new external_value(PARAM_INT, 'id'),
//            'lang' => new external_value(PARAM_TEXT, 'language'),
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
    public static function get_handlers() {
        $params = ['id' => $id];
        $params = self::validate_parameters(self::get_handlers_parameters(), $params);
//        $params = ['lang' => $lang];
//        $params = self::validate_parameters(self::get_handlers_parameters(), $params);

        self::validate_context(\context_system::instance());

        global $PAGE, $DB;
        $renderer = $PAGE->get_renderer('core');

        $ctx = \context_system::instance();

        //$sql = "SELECT 0 AS id, '" . get_string('thinkingskill', 'local_differentiator') . "' AS title, '#009' AS color,
        //            tswce.tswcid as wordcategoryid, tswce.tswcetitle as wordcategory, tswc.sort FROM {local_differentiator_tswce} tswce
        //            JOIN {local_differentiator_tswc} tswc ON tswc.id = tswce.tswcid
        //        UNION
        //        SELECT 1 AS id, '" . get_string('content', 'local_differentiator') . "' AS title, '#600' AS color,
        //            cwce.cwcid as wordcategoryid, cwce.cwcetitle as wordcategory, cwc.sort FROM {local_differentiator_cwce} cwce
        //            JOIN {local_differentiator_cwc} cwc ON cwc.id = cwce.cwcid
        //        UNION
        //        SELECT 2 AS id, '" . get_string('resources', 'local_differentiator') . "' AS title, '#090' AS color,
        //            rwce.rwcid as wordcategoryid, rwce.rwcetitle as wordcategory, rwc.sort FROM {local_differentiator_rwce} rwce
        //            JOIN {local_differentiator_rwc} rwc ON rwc.id = rwce.rwcid
        //        UNION
        //        SELECT 3 AS id, '" . get_string('products', 'local_differentiator') . "' AS title, '#909' AS color,
        //            pwce.pwcid as wordcategoryid, pwce.pwcetitle as wordcategory, pwc.sort FROM {local_differentiator_pwce} pwce
        //            JOIN {local_differentiator_pwc} pwc ON pwc.id = pwce.pwcid
        //        UNION
        //        SELECT 4 AS id, '" . get_string('groups', 'local_differentiator') . "' AS title, '#990' AS color,
        //            gwce.gwcid as wordcategoryid, gwce.gwcetitle as wordcategory, gwc.sort FROM {local_differentiator_gwce} gwce
        //            JOIN {local_differentiator_gwc} gwc ON gwc.id = gwce.gwcid
        //        ORDER BY id ASC, sort ASC";

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
        $handlers->tabs = array();
        $handlers->tabs[0]->id = 0;
        $handlers->tabs[0]->tabtitle = 'Thinking Skill';
        $handlers->tabs[0]->tabcolor = '#000099';
        $handlers->tabs[0]->categories = array();
        $handlers->tabs[1]->id = 1;
        $handlers->tabs[1]->tabtitle = 'Content';
        $handlers->tabs[1]->tabcolor = '#660000';
        $handlers->tabs[1]->categories = array();
        $handlers->tabs[0]->categories[0]->cattitle = 'Remembering';
        $handlers->tabs[0]->categories[0]->cattext = 'Remembering';
        $handlers->tabs[1]->categories[0]->cattitle = 'Depth';
        $handlers->tabs[1]->categories[0]->cattext = 'Depth';
        $handlers->tabs[0]->categories[0]->words = array();
        $handlers->tabs[0]->categories[0]->words[0]->title = 'Remember';
        $handlers->tabs[0]->categories[0]->words[0]->text = 'remember the';
        $handlers->tabs[1]->categories[0]->words = array();
        $handlers->tabs[1]->categories[0]->words[0]->title = 'Big Idea';
        $handlers->tabs[1]->categories[0]->words[0]->text = 'big idea of the';

        //$word = array('title' => 'Remember', 'text' => 'remember the');
        //$category = array('cattitle' => 'Remembering', 'cattext' => 'Remembering', 'words' => $word);
        //$tabs = array('tabtitle' => 'Thinking Skill', 'tabcolor' => '#000099', 'categories' => $category);
        //$handlers = array($tabs);

        $handlers = new \stdClass();
        $handlers->tabs = $DB->get_records_sql($sql);

        $handlers->tabs[0]->categories[0]->cattitle = 'Remembering';
        $handlers->tabs[0]->categories[0]->cattext = 'Remembering';
        $handlers->tabs[1]->categories[0]->cattitle = 'Depth';
        $handlers->tabs[1]->categories[0]->cattext = 'Depth';
        $handlers->tabs[0]->categories[0]->words = array();
        $handlers->tabs[0]->categories[0]->words[0]->title = 'Remember';
        $handlers->tabs[0]->categories[0]->words[0]->text = 'remember the';
        $handlers->tabs[1]->categories[0]->words = array();
        $handlers->tabs[1]->categories[0]->words[0]->title = 'Big Idea';
        $handlers->tabs[1]->categories[0]->words[0]->text = 'big idea of the';

        file_put_contents('/Users/luca/Desktop/log0.txt', json_encode($handlers));

        $exporter = new exporter\handlers($handlers, $ctx);
        $list[] = $exporter->export($renderer);
        return $list;
    }
}

