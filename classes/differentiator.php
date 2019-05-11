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
 * @copyright   2018 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_differentiator;

defined('MOODLE_INTERNAL') || die();

class differentiator {
    /** @var int */
    private $instance;

    /** @var \stdClass */
    private $coursemodule;

    /** @var \context_module */
    private $context;

    /** @var \stdClass|null  */
    private $settings = null;

    public function __construct(\cm_info $coursemodule) {
        if ($coursemodule->modname !== 'differentiator') {
            throw new \moodle_exception('wrong_cm_info_given', 'differentiator');
        }
        $this->instance = $coursemodule->instance;
        $this->coursemodule = $coursemodule;
        $this->context = $coursemodule->context;
    }

    /**
     * Get differentiator instance id.
     *
     * @return int
     */
    public function get_id() : int {
        return $this->instance;
    }

    public function get_context() : \context_module {
        return $this->context;
    }

    public function get_coursemodule() {
        return $this->coursemodule;
    }

    public function get_settings() {
        if ($this->settings === null) {
            global $DB;
            $settings = $DB->get_record('differentiator', ['id' => $this->instance], '*', MUST_EXIST);

            $this->settings = new \stdClass();
            $this->settings->name = $settings->name;
        }

        return $this->settings;
    }

    public function make_url(string $subpath, array $params = null) : \moodle_url {
        $path = '/mod/differentiator/view.php/' . $this->coursemodule->id . '/' . $subpath;
        return new \moodle_url($path, $params);
    }

    public function user_has_capability(string $capability) : bool {
        return \has_capability($capability, $this->context);
    }

    public function require_user_has_capability(string $capability) {
        \require_capability($capability, $this->context);
    }
}
