<?php

namespace local_differentiator\form;

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir . "/formslib.php");

class room_edit extends \moodleform {
    public function definition() {
        $mform = $this->_form;

        /** @var \local_differentiator\differentiator $differentiator */
        $differentiator = $this->_customdata['differentiator'];

        /** @var int $roomid */
        $roomid = $this->_customdata['roomid'];

        // General section header.
        $mform->addElement('header', 'general', get_string('room', 'local_differentiator'));

        // Room id.
        $mform->addElement('hidden', 'roomid');
        $mform->setType('roomid', PARAM_INT);
        if ($roomid) {
            $mform->setConstant('roomid', $roomid);
        }

        // Name.
        $mform->addElement('text', 'name', get_string('room_name', 'local_differentiator'));
        $mform->addRule('name', get_string('required'), 'required');
        $mform->setType('name', PARAM_TEXT);

        // Description.
        $mform->addElement('text', 'description', get_string('room_description', 'local_differentiator'));
        $mform->addRule('description', get_string('required'), 'required');
        $mform->setType('description', PARAM_TEXT);

        $this->add_action_buttons(true, get_string('savechanges'));
    }

    public function validation($data, $files) {
        return [];
    }
}
