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
 * Form controller for local_differentiator.
 *
 * @package     local_differentiator
 * @copyright   2019 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_differentiator\form;

use \local_differentiator\differentiator;

defined('MOODLE_INTERNAL') || die();

/**
 * Class form_controller
 *
 * @package     local_differentiator
 * @copyright   2019 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
abstract class form_controller {
    /** @var differentiator */
    protected $differentiator;

    /** @var array */
    protected $formdata;

    /** @var \stdClass */
    protected $moreargs;

    /** @var \moodleform */
    protected $mform;

    /** @var array */
    protected $customdata;

    /** @var bool Form was submitted, validated and data was processed successfully. */
    private $formsubmittedsuccess = false;

    /** @var string display a message instead of rendering the form */
    protected $message = '';

    /**
     * form_controller constructor.
     *
     * @param differentiator $differentiator
     * @param array $formdata
     * @param \stdClass $moreargs
     */
    public function __construct(differentiator $differentiator, array $formdata, \stdClass $moreargs) {
        $this->differentiator = $differentiator;
        $this->formdata = $formdata;
        $this->moreargs = $moreargs;

        $this->build_customdata();
        $this->check_capability();
        $this->construct_mform();

        if ($data = $this->mform->get_data()) {
            // We have validated data.
            $this->formsubmittedsuccess = $this->handle_submit($data);
        } else {
            $this->handle_display();
        }
    }

    /**
     * Construct the mform.
     */
    protected function construct_mform() {
        $formclass = '\\local_differentiator\\form\\' . static::$formname;
        $this->mform = new $formclass(null, $this->customdata, 'post', '', null, true, $this->formdata);
    }

    /**
     * Render form (HTML).
     *
     * @return string
     */
    public function render() {
        if (!empty($this->message)) {
            return $this->message;
        }

        return $this->mform->render();
    }

    /**
     * Get a message that should be sent to the client.
     *
     * @return string
     */
    public function get_message() {
        return $this->message;
    }

    /**
     * Form was submitted, validated and data was processed successfully.
     *
     * @return bool
     */
    public function success() : bool {
        return $this->formsubmittedsuccess;
    }

    /**
     * Customdata sent to form.
     */
    abstract protected function build_customdata();

    /**
     * Handle a successful form submission.
     *
     * Called when the submitted form data was validated.
     *
     * @param \stdClass $data validated data from form
     * @return bool
     */
    abstract protected function handle_submit(\stdClass $data) : bool;

    /**
     * First display of the form.
     *
     * Or the form is submitted but the data doesn't validate and the form is redisplayed.
     *
     * This is the place where to set the default (existing) data with
     * $this->mform->set_data.
     */
    abstract protected function handle_display();

    /**
     * Check that user is allowed to access this form.
     */
    abstract protected function check_capability();

    /**
     * Get the specific controller for a form.
     *
     * @param string $formname
     * @param differentiator $differentiator
     * @param array $formdata
     * @param \stdClass $moreargs
     * @return form_controller
     * @throws \moodle_exception
     */
    static public function get_controller(string $formname, differentiator $differentiator, array $formdata, \stdClass $moreargs) {

        switch ($formname) {
            case 'learninggoal_edit':
                return new learninggoal_edit_controller($differentiator, $formdata, $moreargs);

            default:
                throw new \moodle_exception('unknown_form', 'differentiator');
        }
    }
}
