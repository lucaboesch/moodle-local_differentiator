<?php

namespace local_differentiator\external;

use external_function_parameters;
use external_multiple_structure;
use external_value;
use external_single_structure;

defined('MOODLE_INTERNAL') || die();

class rooms extends \external_api {
    public static function get_rooms_parameters() {
        return new external_function_parameters([
            'coursemoduleid' => new external_value(PARAM_INT, 'course module id'),
        ]);
    }

    public static function get_rooms_returns() {
        return new external_multiple_structure(
            exporter\room::get_read_structure()
        );
    }

    /**
     * Get all rooms.
     *
     * @param $coursemoduleid
     * @return bool
     * @throws \invalid_parameter_exception
     */
    public static function get_rooms($coursemoduleid) {
        $params = ['coursemoduleid' => $coursemoduleid];
        $params = self::validate_parameters(self::get_rooms_parameters(), $params);

        // list($course, $coursemodule) = get_course_and_cm_from_cmid($params['coursemoduleid'], 'differentiator');
        self::validate_context(\context_system::instance());

        global $PAGE, $DB;
        $renderer = $PAGE->get_renderer('core');
        // $ctx = $coursemodule->context;
        $ctx = \context_system::instance();

        $list = [];
        $rooms = $DB->get_records('local_differentiator_lg', ['id' => 1]);
        //foreach ($rooms as $room) {
        //    $exporter = new exporter\room($room, $ctx);
        //    $list[] = $exporter->export($renderer);
        //}

        return $list;
    }
}
