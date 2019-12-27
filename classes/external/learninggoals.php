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
class learninggoals extends \external_api {
    /**
     * Definition of parameters for {@link get_learninggoals()}.
     * Returns description of method parameters.
     *
     * @return external_function_parameters
     */
    public static function get_learninggoals_parameters() {
        return new external_function_parameters([
            'userid' => new external_value(PARAM_INT, 'userid'),
            'learninggoalid' => new external_value(PARAM_INT, 'learninggoalid'),
        ]);
    }

    /**
     * Definition of parameters for {@link get_learninggoals()}.
     * Returns description of method result value.
     *
     * @return external_multiple_structure
     */
    public static function get_learninggoals_returns() {
        return new external_multiple_structure(
            exporter\learninggoal::get_read_structure()
        );
    }

    /**
     * Get all learning goals.
     *
     * @param int $userid
     * @param int $learninggoalid
     * @return array
     * @throws \invalid_parameter_exception
     */
    public static function get_learninggoals($userid, $learninggoalid) {
        global $USER;
        $params = self::validate_parameters(self::get_learninggoals_parameters(),
            array(
                'userid' => $userid,
                'learninggoalid' => $learninggoalid
            )
        );

        $userid = $USER->id;

        self::validate_context(\context_system::instance());

        global $PAGE, $DB;
        $renderer = $PAGE->get_renderer('core');

        $ctx = \context_system::instance();

        $concat = $DB->sql_concat('COALESCE(lg.pre_thinking_skill, \'\')', '\' \'',
            'COALESCE(lg.thinking_skill, \'\')', '\' \'',
            'COALESCE(lg.lgcontent, \'\')', '\' \'',
            'COALESCE(lg.subject, \'\')', '\' \'',
            'COALESCE(lg.pre_resource, \'\')', '\' \'',
            'COALESCE(lg.resource, \'\')', '\' \'',
            'COALESCE(lg.pre_product, \'\')', '\' \'',
            'COALESCE(lg.product, \'\')', '\' \'',
            'COALESCE(lg.pre_group, \'\')', '\' \'',
            'COALESCE(lg.lggroup, \'\')', '\'.\'');

        $sql = "SELECT lg.id, lg.title AS name, " . $concat . " as description
            FROM {local_differentiator_lg} lg
            WHERE userid = :userid
            ORDER BY lg.title ASC";

        $params['userid'] = $userid;

        $learninggoals = $DB->get_records_sql($sql, $params);

        if (!empty($learninggoals)) {
            foreach ($learninggoals as $learninggoal) {
                $exporter = new exporter\learninggoal($learninggoal, $ctx);
                $list[] = $exporter->export($renderer);
            }
        } else {
            $learninggoal = new \stdClass();
            $learninggoal->id = 0;
            $learninggoal->name = 'not found';
            $learninggoal->description = '';
            $exporter = new exporter\learninggoal($learninggoal, $ctx);
            $list[] = $exporter->export($renderer);
        }
        return $list;
    }
}
