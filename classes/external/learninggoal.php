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
 * Handling with a differentiator learning goal.
 *
 * @package     local_differentiator
 * @copyright   2019 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_differentiator\external;

use external_function_parameters;
use external_multiple_structure;
use external_settings;
use external_value;
use external_single_structure;
use local_differentiator\external\exporter\bool_dto;

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir.'/externallib.php');

/**
 * Class learninggoal
 *
 * @package     local_differentiator
 * @copyright   2019 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class learninggoal extends \external_api {
    /**
     * Definition of parameters for {@link get_learninggoal()}.
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
     * Definition of parameters for {@link save_learninggoal()}.
     * Returns description of method parameters.
     *
     * @return external_function_parameters
     */
    public static function save_learninggoal_parameters() {
        return new external_function_parameters([
            'userid' => new external_value(PARAM_INT, 'userid'),
            'learninggoalid' => new external_value(PARAM_INT, 'id of the learning goal'),
            'name' => new external_value(PARAM_TEXT, 'name of the learning goal'),
            'pre_thinking_skill' => new external_value(PARAM_TEXT, 'name of the learning goal'),
            'thinking_skill' => new external_value(PARAM_TEXT, 'name of the learning goal'),
            'content' => new external_value(PARAM_TEXT, 'name of the learning goal'),
            'subject' => new external_value(PARAM_TEXT, 'name of the learning goal'),
            'pre_resource' => new external_value(PARAM_TEXT, 'name of the learning goal'),
            'resource' => new external_value(PARAM_TEXT, 'name of the learning goal'),
            'pre_product' => new external_value(PARAM_TEXT, 'name of the learning goal'),
            'product' => new external_value(PARAM_TEXT, 'name of the learning goal'),
            'pre_group' => new external_value(PARAM_TEXT, 'name of the learning goal'),
            'group' => new external_value(PARAM_TEXT, 'name of the learning goal'),
        ]);
    }

    /**
     * Definition of parameters for {@link delete_learninggoal()}.
     * Returns description of method parameters.
     *
     * @return external_function_parameters
     */
    public static function delete_learninggoal_parameters() {
        return new external_function_parameters([
            'userid' => new external_value(PARAM_INT, 'userid'),
            'learninggoalid' => new external_value(PARAM_INT, 'learninggoalid'),
        ]);
    }

    /**
     * Definition of parameters for {@link duplicate_learninggoal()}.
     * Returns description of method parameters.
     *
     * @return external_function_parameters
     */
    public static function duplicate_learninggoal_parameters() {
        return new external_function_parameters([
            'userid' => new external_value(PARAM_INT, 'userid'),
            'learninggoalid' => new external_value(PARAM_INT, 'learninggoalid'),
        ]);
    }

    /**
     * Definition of return type for {@link get_learninggoal()}.
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
     * Definition of return type for {@link save_learninggoal()}.
     * Returns description of method result value.
     *
     * @return external_single_structure
     */
    public static function save_learninggoal_returns() {
        return bool_dto::get_read_structure();
    }

    /**
     * Definition of return type for {@link delete_learninggoal()}.
     * Returns description of method result value.
     *
     * @return external_single_structure
     */
    public static function delete_learninggoal_returns() {
        return bool_dto::get_read_structure();
    }

    /**
     * Definition of return type for {@link duplicate_learninggoal()}.
     * Returns description of method result value.
     *
     * @return external_single_structure
     */
    public static function duplicate_learninggoal_returns() {
        return bool_dto::get_read_structure();
    }

    /**
     * Get a learning goal.
     *
     * @param int $userid
     * @param int $learninggoalid
     * @return array
     * @throws \invalid_parameter_exception
     */
    public static function get_learninggoal($userid, $learninggoalid) {
        global $USER;
        $params = self::validate_parameters(self::get_learninggoal_parameters(),
            array(
                'userid' => $userid,
                'learninggoalid' => $learninggoalid
            )
        );

        // TODO check if the learning goal really belongs to the user.
        $learninggoalid = $params['learninggoalid'];
        self::validate_context(\context_system::instance());
        global $PAGE, $DB, $SESSION;
        $renderer = $PAGE->get_renderer('core');

        // Do additional setup stuff.
        $settings = external_settings::get_instance();
        $sessionlang = $settings->get_lang();
        if (!empty($sessionlang)) {
            $SESSION->lang = $sessionlang;
        }

        $ctx = \context_system::instance();
        if ($learninggoalid > 0) {
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
            $sql = "SELECT lg.id, lg.title AS \"name\", " . $concat . " AS \"description\",
            COALESCE(lg.pre_thinking_skill, '') AS \"pre_thinking_skill\",
            COALESCE(lg.thinking_skill, '') AS \"thinking_skill\",
            COALESCE(lg.lgcontent, '') AS \"content\",
            COALESCE(lg.subject, '') AS \"subject\",
            COALESCE(lg.pre_resource, '') AS \"pre_resource\",
            COALESCE(lg.resource, '') AS \"resource\",
            COALESCE(lg.pre_product, '') AS \"pre_product\",
            COALESCE(lg.product, '') AS \"product\",
            COALESCE(lg.pre_group, '') AS \"pre_group\",
            COALESCE(lg.lggroup, '') AS \"group\"
            FROM {local_differentiator_lg} lg
            WHERE lg.id = :id";
            $params['id'] = $learninggoalid;
            $learninggoal = $DB->get_record_sql($sql, $params);
        } else {
            $sql = "SELECT 0 AS id, '" .
                get_string('clicktoedit', 'local_differentiator') . "' AS \"name\", " .
                "'' AS \"description\", '" .
                get_string('prethinkingskill', 'local_differentiator') . "' AS \"pre_thinking_skill\", " .
                "(SELECT tswetext from {local_differentiator_tswe} WHERE tswid = 1 AND lang = '" . $SESSION->lang . "') AS " .
                "\"thinking_skill\", " .
                "(SELECT cwetext from {local_differentiator_cwe} WHERE cwid = 1 AND lang = '" . $SESSION->lang . "') AS " .
                "\"content\", '" .
                get_string('clicktoedit', 'local_differentiator') . "' AS \"subject\", '" .
                get_string('preresource', 'local_differentiator') . "' AS \"pre_resource\", " .
                "(SELECT rwetext from {local_differentiator_rwe} WHERE rwid = 1 AND lang = '" . $SESSION->lang . "') AS " .
                "\"resource\", '" .
                get_string('preproduct', 'local_differentiator') . "' AS \"pre_product\", " .
                "(SELECT pwetext from {local_differentiator_pwe} WHERE pwid = 37 AND lang = '" . $SESSION->lang . "') AS " .
                "\"product\", '" .
                get_string('pregroup', 'local_differentiator') . "' AS \"pre_group\", " .
                "(SELECT gwetext from {local_differentiator_gwe} WHERE gwid = 1 AND lang = '" . $SESSION->lang . "') AS \"group\"";
            $learninggoal = $DB->get_record_sql($sql);
        }
        $exporter = new exporter\learninggoal($learninggoal, $ctx);
        $list[] = $exporter->export($renderer);
        return $list;
    }

    /**
     * Updates or inserts the given data as a learning goal.
     *
     * @param int $userid
     * @param int $learninggoalid
     * @param string $name
     * @param string $prethinkingskill
     * @param string $thinkingskill
     * @param string $content
     * @param string $subject
     * @param string $preresource
     * @param string $resource
     * @param string $preproduct
     * @param string $product
     * @param string $pregroup
     * @param string $group
     *
     * @return stdClass
     * @throws \required_capability_exception
     * @throws coding_exception
     * @throws dml_exception
     * @throws invalid_parameter_exception
     * @throws moodle_exception
     * @throws restricted_context_exception
     */
    public static function save_learninggoal($userid, $learninggoalid, $name, $prethinkingskill, $thinkingskill, $content,
        $subject, $preresource, $resource, $preproduct, $product, $pregroup, $group) {
        global $USER;

        $params = [
            'userid' => $userid,
            'learninggoalid' => $learninggoalid,
            'name' => $name,
            'pre_thinking_skill' => $prethinkingskill,
            'thinking_skill' => $thinkingskill,
            'content' => $content,
            'subject' => $subject,
            'pre_resource' => $preresource,
            'resource' => $resource,
            'pre_product' => $preproduct,
            'product' => $product,
            'pre_group' => $pregroup,
            'group' => $group
        ];
        self::validate_parameters(self::save_learninggoal_parameters(), $params);

        self::validate_context(\context_system::instance());

        global $PAGE, $DB;

        $renderer = $PAGE->get_renderer('core');

        $ctx = \context_system::instance();

        $learninggoal = new \stdClass();
        $learninggoal->id = $learninggoalid;
        $learninggoal->userid = $USER->id;
        $learninggoal->title = $name;
        $learninggoal->pre_thinking_skill = $prethinkingskill;
        $learninggoal->thinking_skill = $thinkingskill;
        $learninggoal->lgcontent = $content;
        $learninggoal->subject = $subject;
        $learninggoal->pre_resource = $preresource;
        $learninggoal->resource = $resource;
        $learninggoal->pre_product = $preproduct;
        $learninggoal->product = $product;
        $learninggoal->pre_group = $pregroup;
        $learninggoal->lggroup = $group;

        if ($learninggoal->id != 0) {
            $learninggoal->timemodified = time();
            $DB->update_record('local_differentiator_lg', $learninggoal);
        } else {
            $learninggoal->id = null;
            $learninggoal->timecreated = time();
            $DB->insert_record('local_differentiator_lg', $learninggoal);
        }

        // Return success status.
        $exporter = new bool_dto(true, $ctx);
        return $exporter->export($renderer);
    }

    /**
     * Delete a learning goal.
     *
     * @param int $userid
     * @param int $learninggoalid
     * @return array
     * @throws \invalid_parameter_exception
     */
    public static function delete_learninggoal($userid, $learninggoalid) {
        global $USER;

        $params = self::validate_parameters(self::get_learninggoal_parameters(),
            array(
                'userid' => $userid,
                'learninggoalid' => $learninggoalid
            )
        );

        // TODO check if the learning goal really belongs to the user.

        $learninggoalid = $params['learninggoalid'];

        self::validate_context(\context_system::instance());

        global $PAGE, $DB;
        $renderer = $PAGE->get_renderer('core');

        $ctx = \context_system::instance();

        if (isset($learninggoalid) && ($learninggoalid > 0)) {
            $DB->delete_records('local_differentiator_lg', array('id' => $learninggoalid, 'userid' => $USER->id));
        }

        // Return success status.
        $exporter = new bool_dto(true, $ctx);
        return $exporter->export($renderer);
    }

    /**
     * Duplicate a learning goal.
     *
     * @param int $userid
     * @param int $learninggoalid
     * @return array
     * @throws \invalid_parameter_exception
     */
    public static function duplicate_learninggoal($userid, $learninggoalid) {
        global $USER;

        $params = self::validate_parameters(self::get_learninggoal_parameters(),
            array(
                'userid' => $userid,
                'learninggoalid' => $learninggoalid
            )
        );

        // TODO check if the learning goal really belongs to the user.

        $learninggoalid = $params['learninggoalid'];

        self::validate_context(\context_system::instance());

        global $PAGE, $DB;
        $renderer = $PAGE->get_renderer('core');

        $ctx = \context_system::instance();

        if ($learninggoalid > 0) {

            $sql = "SELECT lg.id,
            lg.title,
            lg.pre_thinking_skill,
            lg.thinking_skill,
            lg.lgcontent,
            lg.subject,
            lg.pre_resource,
            lg.resource,
            lg.pre_product,
            lg.product,
            lg.pre_group,
            lg.lggroup
            FROM {local_differentiator_lg} lg
            WHERE lg.id = :id";

            $params['id'] = $learninggoalid;
            $learninggoal = $DB->get_record_sql($sql, $params);
        }

        if (isset($learninggoal)) {
            $learninggoal->id = null;
            $learninggoal->userid = $USER->id;
            $learninggoal->timecreated = time();
            $DB->insert_record('local_differentiator_lg', $learninggoal);
        }

        // Return success status.
        $exporter = new bool_dto(true, $ctx);
        return $exporter->export($renderer);
    }
}

