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
 * Class learninggoal
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
            'userid' => new external_value(PARAM_INT, 'userid'),
            'learninggoalid' => new external_value(PARAM_INT, 'learninggoalid'),
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
     * @param $userid
     * @param $learninggoalid
     * @return array
     * @throws \invalid_parameter_exception
     */
    public static function get_learninggoal($userid, $learninggoalid) {
        global $USER;
        file_put_contents('/Users/luca/Desktop/log0.txt', 'userid ' . $userid . ' learninggoalid '. $learninggoalid);

        $params = self::validate_parameters(self::get_learninggoal_parameters(),
            array(
                'userid' => $userid,
                'learninggoalid' => $learninggoalid
            )
        );

        $learninggoalid = $params['learninggoalid'];

        self::validate_context(\context_system::instance());

        global $PAGE, $DB;
        $renderer = $PAGE->get_renderer('core');

        $ctx = \context_system::instance();

        if ($learninggoalid > 0) {

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

            $sql = "SELECT lg.id, lg.title AS name, " . $concat . " AS description,
            COALESCE(lg.pre_thinking_skill, '') AS pre_thinking_skill,
            COALESCE(lg.thinking_skill, '') AS thinking_skill,
            COALESCE(lgc.contenttext, '') AS content,
            COALESCE(lg.subject, '') AS subject,
            COALESCE(lg.pre_resource, '') AS pre_resource,
            COALESCE(lg.resource, '') AS resource,
            COALESCE(lg.pre_product, '') AS pre_product,
            COALESCE(lgp.producttext, '') AS product,
            COALESCE(lg.pre_group, '') AS pre_group,
            COALESCE(lg.group, '') AS group
            FROM {local_differentiator_lg} lg
            LEFT JOIN {local_differentiator_lgcont} lgc ON lgc.learninggoalid = lg.id
            LEFT JOIN {local_differentiator_lgprod} lgp ON lgp.learninggoalid = lg.id
            WHERE lg.id = :id";

            $params['id'] = $learninggoalid;
            $learninggoal = $DB->get_record_sql($sql, $params);
        } else {
            $sql = "SELECT 0 AS id, '" .
            get_string('clicktoedit', 'local_differentiator') . "' AS name, " .
            "'' AS description, '" .
            get_string('prethinkingskill', 'local_differentiator') . "' AS pre_thinking_skill, " .
            "(SELECT tswetext from {local_differentiator_tswe} WHERE tswid = 1) AS thinking_skill, " .
            "(SELECT cwetext from {local_differentiator_cwe} WHERE cwid = 1)  AS content, '" .
            get_string('clicktoedit', 'local_differentiator') . "' AS subject, '" .
            get_string('preresource', 'local_differentiator') . "' AS pre_resource, " .
            "(SELECT rwetext from {local_differentiator_rwe} WHERE rwid = 1) AS resource, '" .
            get_string('preproduct', 'local_differentiator') . "' AS pre_product, '" .
            /* "(SELECT pwetext from {local_differentiator_pwe} WHERE pwid = 1) AS product, '" . */
            get_string('essay', 'local_differentiator') . "' AS product, '" .
            get_string('pregroup', 'local_differentiator') . "' AS pre_group, " .
            "(SELECT gwetext from {local_differentiator_gwe} WHERE gwid = 1) AS group";

            $learninggoal = $DB->get_record_sql($sql);
        }

        $exporter = new exporter\learninggoal($learninggoal, $ctx);
        $list[] = $exporter->export($renderer);

        return $list;
    }
}

