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
 * Library of functions for local_differentiator.
 *
 * @package     local_differentiator
 * @copyright   2019 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Saves a new differentiator instance into the database.
 *
 * Given an object containing all the necessary data,
 * (defined by the form in mod_form.php) this function
 * will create a new instance and return the id number
 * of the new instance.
 *
 * @param object $differentiator an object from the form in mod_form.php
 * @return int the id of the newly inserted record
 */
function differentiator_add_instance($differentiator) {
    global $DB;

    $differentiator->timecreated = time();
    $differentiator->timemodified = time();

    $id = $DB->insert_record('differentiator', $differentiator);
    return $id;
}

/**
 * Updates a differentiator instance.
 *
 * Given an object containing all the necessary data,
 * (defined by the form in mod_form.php) this function
 * will update an existing instance with new data.
 *
 * @param object $differentiator an object from the form in mod_form.php
 * @return boolean Success/Fail
 */
function differentiator_update_instance($differentiator) {
    global $DB;

    $differentiator->timemodified = time();
    $differentiator->id = $differentiator->instance;

    $ret = $DB->update_record('differentiator', $differentiator);
    return $ret;
}

/**
 * List of features supported in differentiator.
 *
 * @param string $feature FEATURE_xx constant for requested feature
 * @return bool True if feature is supported
 */
function differentiator_supports($feature) {
    switch ($feature) {
        case FEATURE_GROUPS:
            return false;
        case FEATURE_GROUPINGS:
            return false;
        case FEATURE_MOD_INTRO:
            return true;
        case FEATURE_BACKUP_MOODLE2:
            return true;
        case FEATURE_SHOW_DESCRIPTION:
            return true;

        default:
            return null;
    }
}

/**
 * View or submit an mform.
 *
 * Returns the HTML to view an mform.
 * If form data is delivered and the data is valid, this returns 'ok'.
 *
 * @param array $args
 * @return string
 * @throws moodle_exception
 */
function local_differentiator_output_fragment_mform($args) {
    $differentiator = new \local_differentiator\differentiator();

    $formdata = [];
    if (!empty($args['jsonformdata'])) {
        $serialiseddata = json_decode($args['jsonformdata']);
        if (is_string($serialiseddata)) {
            parse_str($serialiseddata, $formdata);
        }
    }

    $moreargs = (isset($args['moreargs'])) ? json_decode($args['moreargs']) : new stdClass;
    $formname = $args['form'] ?? '';

    $form = \local_differentiator\form\form_controller::get_controller($formname, $differentiator, $formdata, $moreargs);

    if ($form->success()) {
        $ret = 'ok';
        if ($msg = $form->get_message()) {
            $ret .= ' ' . $msg;
        }
        return $ret;
    } else {
        return $form->render();
    }
}
