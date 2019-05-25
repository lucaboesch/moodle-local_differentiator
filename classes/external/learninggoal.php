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
 * Class learninggoals
 *
 * @package     local_differentiator
 * @copyright   2019 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class learninggoal extends \external_api {
    /**
     * Returns description of method parameters.
     *
     * @return external_function_parameters
     */
    public static function get_learninggoal_parameters() {
        return new external_function_parameters([
            'id' => new external_value(PARAM_INT, 'id'),
        ]);
    }

    /**
     * Returns description of method result value.
     *
     * @return external_multiple_structure
     */
    public static function get_learninggoal_returns() {
        return new external_multiple_structure(
            exporter\learninggoal::get_read_structure()
        );
    }

    /**
     * Get a learning goal.
     *
     * @param $id
     * @return bool
     * @throws \invalid_parameter_exception
     */
    public static function get_learninggoal($id) {
        $params = ['id' => 1];
        $params = self::validate_parameters(self::get_learninggoal_parameters(), $params);

        self::validate_context(\context_system::instance());

        global $PAGE, $DB;
        $renderer = $PAGE->get_renderer('core');

        $ctx = \context_system::instance();

        $concat = $DB->sql_concat('COALESCE(lg.pre_thinking_skill, \'\')', '\' \'',
            'COALESCE(lg.thinking_skill, \'\')', '\' \'',
            'COALESCE(lgc.contenttext, \'\')', '\' \'',
            'COALESCE(lg.subject, \'\')', '\' \'',
            'COALESCE(lg.pre_resource, \'\')', '\' \'',
            'COALESCE(lg.resource, \'\')', '\' \'',
            'COALESCE(lg.pre_product, \'\')', '\' \'',
            'COALESCE(lgp.producttext, \'\')', '\' \'',
            'COALESCE(lg.pre_group, \'\')', '\' \'',
            'COALESCE(lg.group, \'\')', '\'.\'');

        $sql = "SELECT lg.id, lg.title AS name, " . $concat . " as description,
            COALESCE(lg.pre_thinking_skill, '') as pre_thinking_skill,
            COALESCE(lg.thinking_skill, '') as thinking_skill,
            COALESCE(lgc.contenttext, '') as content,
            COALESCE(lg.subject, '') as subject,
            COALESCE(lg.pre_resource, '') as pre_resource,
            COALESCE(lg.resource, '') as resource,
            COALESCE(lg.pre_product, '') as pre_product,
            COALESCE(lgp.producttext, '') as product,
            COALESCE(lg.pre_group, '') as pre_group,
            COALESCE(lg.group, '') as group
            FROM {local_differentiator_lg} lg
            LEFT JOIN {local_differentiator_lgcont} lgc ON lgc.learninggoalid = lg.id
            LEFT JOIN {local_differentiator_lgprod} lgp ON lgp.learninggoalid = lg.id
            WHERE lg.id = :id";

        $params['id'] = $id;
        $learninggoal = $DB->get_record_sql($sql, $params);

        $exporter = new exporter\learninggoal($learninggoal, $ctx);
        $list[] = $exporter->export($renderer);

        return $list;
    }
}

