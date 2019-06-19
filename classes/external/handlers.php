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
use external_value;
use external_single_structure;

defined('MOODLE_INTERNAL') || die();

/**
 * Class handlers
 *
 * @package     local_differentiator
 * @copyright   2019 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class handlers extends \external_api {
    /**
     * Returns description of method parameters.
     *
     * @return external_function_parameters
     */
    public static function get_handlers_parameters() {
        return new external_function_parameters([
            'id' => new external_value(PARAM_INT, 'id'),
        ]);
    }

    /**
     * Returns description of method result value.
     *
     * @return external_multiple_structure
     */
    public static function get_handlers_returns() {
        return new external_multiple_structure(
            exporter\tab::get_read_structure()
        );
    }

    /**
     * Get a learning goal.
     *
     * @param $id
     * @return bool
     * @throws \invalid_parameter_exception
     */
    public static function get_handlers() {
        self::validate_context(\context_system::instance());

        global $PAGE, $DB;
        $renderer = $PAGE->get_renderer('core');

        $ctx = \context_system::instance();

/*
        $sql = "SELECT 0 AS id, '" . get_string('thinkingskill', 'local_differentiator') . "' AS title " .
            "UNION " .
            "SELECT  1 AS id, '" . get_string('content', 'local_differentiator') . "' AS title " .
            "UNION " .
            "SELECT  2 AS id, '" . get_string('resources', 'local_differentiator') . "' AS title " .
            "UNION " .
            "SELECT  3 AS id, '" . get_string('products', 'local_differentiator') . "' AS title " .
            "UNION " .
            "SELECT  4 AS id, '" . get_string('groups', 'local_differentiator') . "' AS title ORDER BY id ASC";
*/

        $sql = "SELECT 0 AS id, '" . get_string('thinkingskill', 'local_differentiator') . "' AS title, '#009' AS color,
                    tswce.tswcetitle as wordcategory, tswc.sort FROM {local_differentiator_tswce} tswce
                    JOIN {local_differentiator_tswc} tswc ON tswc.id = tswce.tswcid
                UNION
                SELECT 1 AS id, '" . get_string('content', 'local_differentiator') . "' AS title, '#600' AS color,
                    cwce.cwcetitle as wordcategory, cwc.sort FROM {local_differentiator_cwce} cwce
                    JOIN {local_differentiator_cwc} cwc ON cwc.id = cwce.cwcid
                UNION
                SELECT 2 AS id, '" . get_string('resources', 'local_differentiator') . "' AS title, '#090' AS color,
                    rwcetitle as wordcategory, rwc.sort FROM {local_differentiator_rwce} rwce
                    JOIN {local_differentiator_rwc} rwc ON rwc.id = rwce.rwcid
                UNION
                SELECT 3 AS id, '" . get_string('products', 'local_differentiator') . "' AS title, '#909' AS color,
                    pwcetitle as wordcategory, pwc.sort FROM {local_differentiator_pwce} pwce
                    JOIN {local_differentiator_pwc} pwc ON pwc.id = pwce.pwcid
                UNION
                SELECT 4 AS id, '" . get_string('groups', 'local_differentiator') . "' AS title, '#990' AS color,
                    gwcetitle as wordcategory, gwc.sort FROM {local_differentiator_gwce} gwce
                    JOIN {local_differentiator_gwc} gwc ON gwc.id = gwce.gwcid
                ORDER BY id ASC, sort ASC";

        $handlers = $DB->get_records_sql($sql);

        foreach ($handlers as $tab) {
            $exporter = new exporter\tab($tab, $ctx);
            $list[] = $exporter->export($renderer);
        }

        return $list;
    }
}

