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

class learninggoals extends \external_api {
    public static function get_learninggoals_parameters() {
        return new external_function_parameters([
            'userid' => new external_value(PARAM_INT, 'userid'),
        ]);
    }

    public static function get_learninggoals_returns() {
        return new external_multiple_structure(
            exporter\learninggoal::get_read_structure()
        );
    }

    /**
     * Get all learning goals.
     *
     * @param $userid
     * @return bool
     * @throws \invalid_parameter_exception
     */
    public static function get_learninggoals($userid) {
        $params = ['userid' => $userid];
        $params = self::validate_parameters(self::get_learninggoals_parameters(), $params);

        // list($course, $coursemodule) = get_course_and_cm_from_cmid($params['coursemoduleid'], 'differentiator');
        self::validate_context(\context_system::instance());

        global $PAGE, $DB;
        $renderer = $PAGE->get_renderer('core');
        // $ctx = $coursemodule->context;
        $ctx = \context_system::instance();

        $list = [];
        $leaninggoals = $DB->get_records('local_differentiator_lg', ['userid' => $userid]);
        foreach ($leaninggoals as $learninggoal) {
            $exporter = new exporter\learninggoal($learninggoal, $ctx);
            $list[] = $exporter->export($renderer);
        }

        return $list;
    }
}
