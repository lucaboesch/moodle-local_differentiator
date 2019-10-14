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
 * Class learninggoal_edit_controller
 *
 * @package     local_differentiator
 * @copyright   2019 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class learninggoal_edit_controller extends form_controller {
    /**
     * @var string
     */
    public static $formname = 'learninggoal_edit';

    /** @var int|null */
    private $learninggoalid;

    /**
     * @var null
     */
    private $learninggoal = null;

    /**
     * Customdata sent to form.
     *
     * @throws \dml_exception
     */
    protected function build_customdata() {
        global $DB;

        $this->learninggoalid = (isset($this->moreargs->learninggoalid)) ? intval($this->moreargs->learninggoalid) : null;
        $this->customdata = [
            'differentiator' => $this->differentiator,
            'learninggoalid' => $this->learninggoalid,
        ];

        if ($this->learninggoalid) {
            $this->learninggoal = $DB->get_record('local_differentiator_lg', ['id' => $this->learninggoalid]);
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
        global $DB;

        if ($this->learninggoalid && $data->learninggoalid != $this->learninggoalid) {
            return false;
        }

        $learninggoal = new \stdClass();
        $learninggoal->id = $this->learninggoalid;
        $learninggoal->differentiatorid = $this->differentiator->get_id();
        $learninggoal->name = $data->name;
        $learninggoal->description = $data->description;

        if ($learninggoal->id) {
            $DB->update_record('local_differentiator_lg', $learninggoal);
        } else {
            $DB->insert_record('local_differentiator_lg', $learninggoal);
        }

        return true;
    }

    /**
     * First display of the form.
     */
    protected function handle_display() {

        if ($this->learninggoal) {
            // Set default (existing) data.
            $data = [
                'name' => $this->learninggoal->name,
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
