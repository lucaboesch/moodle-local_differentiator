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
 * A boolean exporter for web service.
 *
 * @package     local_differentiator
 * @copyright   2019 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_differentiator\external\exporter;

use coding_exception;
use context;
use core\external\exporter;
use renderer_base;

defined('MOODLE_INTERNAL') || die();

/**
 * Class bool_dto
 *
 * @package     local_differentiator
 * @copyright   2019 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class bool_dto extends exporter {

    /**
     * @var bool
     */
    private $value;

    /**
     * bool_dto constructor.
     *
     * @param \bool $value
     * @param \context $context
     *
     * @throws coding_exception
     */
    public function __construct($value, \context $context) {
        $this->value = $value;
        parent::__construct([], ['context' => $context]);
    }

    /**
     * Return the type and description of the dto.
     *
     * @return array
     */
    protected static function define_other_properties() {
        return [
            'result' => [
                'type' => PARAM_BOOL,
                'description' => 'a boolean value.'
            ],
        ];
    }

    /**
     * Return the list of properties.
     *
     * @return array
     */
    protected static function define_related() {
        return ['context' => 'context'];
    }

    /**
     * Assign values to the defined other properties.
     *
     * @param renderer_base $output The output renderer object.
     * @return array
     * @throws coding_exception
     * @throws dml_exception
     * @throws moodle_exception
     */
    protected function get_other_values(renderer_base $output) {
        return ['result' => $this->value];
    }
}
