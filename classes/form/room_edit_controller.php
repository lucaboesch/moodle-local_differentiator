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

/**
 * Class room_edit_controller
 *
 * @package     local_differentiator
 * @copyright   2019 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class room_edit_controller extends form_controller {
    /**
     * @var string
     */
    public static $formname = 'room_edit';

    /** @var int|null */
    private $roomid;

    /**
     * @var null
     */
    private $room = null;

    /**
     * Customdata sent to form.
     *
     * @throws \dml_exception
     */
    protected function build_customdata() {
        global $DB;

        $this->roomid = (isset($this->moreargs->roomid)) ? intval($this->moreargs->roomid) : null;
        $this->customdata = [
            'differentiator' => $this->differentiator,
            'roomid' => $this->roomid,
        ];

        if ($this->roomid) {
            $this->room = $DB->get_record('local_differentiator_lg', ['id' => $this->roomid]);
        }
    }

    /**
     * Handle a successful form submission.
     *
     * @param \stdClass $data
     * @return bool
     * @throws \dml_exception
     */
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

    /**
     * First display of the form.
     */
    protected function handle_display() {
        global $DB;

        if ($this->room) {
            // Set default (existing) data.
            $data = [
                'name' => $this->room->name,
                'description' => $this->learninggoal->description,
            ];
            $this->mform->set_data($data);
        }
    }

    /**
     * Check that a user has the required capability.
     *
     * @throws \dml_exception
     * @throws \required_capability_exception
     */
    protected function check_capability() {
        $this->differentiator->require_user_has_capability('local/differentiator:view');
    }
}
