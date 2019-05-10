<?php

namespace local_differentiator\form;

defined('MOODLE_INTERNAL') || die();

class room_edit_controller extends form_controller {
    public static $formname = 'room_edit';

    /** @var int|null */
    private $roomid;

    private $room = null;

    protected function build_customdata() {
        global $DB;

        $this->roomid = (isset($this->moreargs->roomid)) ? intval($this->moreargs->roomid) : null;
        $this->customdata = [
            'differentiator' => $this->differentiator,
            'roomid' => $this->roomid,
        ];

        if ($this->roomid) {
            $this->room = $DB->get_record('differentiator_rooms', ['id' => $this->roomid]);
        }
    }

    protected function handle_submit(\stdClass $data) : bool {
        if ($this->roomid && $data->roomid != $this->roomid) {
            return false;
        }

        global $DB;
        $room = new \stdClass();
        $room->id = $this->roomid;
        $room->differentiatorid = $this->differentiator->get_id();
        $room->name = $data->name;
        $room->description = $data->description;

        if ($room->id) {
            $DB->update_record('differentiator_rooms', $room);
        } else {
            $DB->insert_record('differentiator_rooms', $room);
        }

        return true;
    }

    protected function handle_display() {
        global $DB;

        if ($this->room) {
            // Set default (existing) data.
            $data = [
                'name' => $this->room->name,
                'description' => $this->room->description,
            ];
            $this->mform->set_data($data);
        }
    }

    protected function check_capability() {
        $this->differentiator->require_user_has_capability('mod/differentiator:view');
    }
}
