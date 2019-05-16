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

namespace local_differentiator\form;

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir . "/formslib.php");

/**
 * Class learninggoal_edit
 *
 * @package     local_differentiator
 * @copyright   2019 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class learninggoal_edit extends \moodleform {
    /**
     * Define the form.
     * @throws \coding_exception
     */
    public function definition() {
        $mform = $this->_form;

        /** @var \local_differentiator\differentiator $differentiator */
        $differentiator = $this->_customdata['differentiator'];

        /** @var int $learninggoalid */
        $learninggoalid = $this->_customdata['learninggoalid'];

        // General section header.
        $mform->addElement('header', 'general', get_string('learninggoal', 'local_differentiator'));

        // Learning goal id.
        $mform->addElement('hidden', 'learninggoalid');
        $mform->setType('learninggoalid', PARAM_INT);
        if ($learninggoalid) {
            $mform->setConstant('learninggoalid', $learninggoalid);
        }

        // Name.
        $mform->addElement('text', 'name', get_string('learninggoal_name', 'local_differentiator'));
        $mform->addRule('name', get_string('required'), 'required');
        $mform->setType('name', PARAM_TEXT);

        // Description.
        $mform->addElement('text', 'description', get_string('learninggoal_description', 'local_differentiator'));
        $mform->addRule('description', get_string('required'), 'required');
        $mform->setType('description', PARAM_TEXT);

        $this->add_action_buttons(true, get_string('savechanges'));
    }

    /**
     * Custom form validation
     *
     * @param array $data
     * @param array $files
     * @return array
     */
    public function validation($data, $files) {
        return [];
    }
}
