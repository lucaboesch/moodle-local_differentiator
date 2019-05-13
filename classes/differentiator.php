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

namespace local_differentiator;

use context_system;

defined('MOODLE_INTERNAL') || die();

class differentiator {

    public function __construct() {
    }

    public function make_url(string $subpath, array $params = null) : \moodle_url {
        $path = '/mod/differentiator/view.php/' . $subpath;
        return new \moodle_url($path, $params);
    }

    public function user_has_capability(string $capability) : bool {
        return \has_capability($capability, $this->context);
    }

    public function require_user_has_capability(string $capability) {
        \require_capability($capability, context_system::instance());
    }
}
