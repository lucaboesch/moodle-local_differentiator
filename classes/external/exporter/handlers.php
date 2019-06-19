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

namespace local_differentiator\external\exporter;

defined('MOODLE_INTERNAL') || die();

/**
 * Class handlers
 *
 * @package     local_differentiator
 * @copyright   2019 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class handlers extends \core\external\exporter {
    /**
     * @var
     */
    protected $handlers;

    /**
     * The differentiator handlers constructor.
     *
     * @param $handlers
     * @param \context $context
     * @throws \coding_exception
     */
    public function __construct($handlers, \context $context) {
        $this->handlers = $handlers;
        parent::__construct([], ['context' => $context]);
    }

    /**
     * Get ids and titles of the handlers.
     *
     * @return array
     */
    protected static function define_other_properties() {
        return [
            'title' => [
                'type' => PARAM_TEXT,
                'description' => 'tab title'
            ],
            'color' => [
                'type' => PARAM_TEXT,
                'description' => 'tab color'
            ],
            'wordcategoryid' => [
                'type' => PARAM_INT,
                'description' => 'word category title id'
            ],
            'wordcategory' => [
                'type' => PARAM_TEXT,
                'description' => 'word category title'
            ],
        ];
    }

    /**
     * TODO.
     *
     * @return array
     */
    protected static function define_related() {
        return [
            'context' => 'context',
        ];
    }

    /**
     * Get id, name and description of the learning goal.
     *
     * @param \renderer_base $output
     * @return array
     */
    protected function get_other_values(\renderer_base $output) {
        return [
            'title' => $this->handlers->title,
            'color' => $this->handlers->color,
            'wordcategoryid' => $this->handlers->wordcategoryid,
            'wordcategory' => $this->handlers->wordcategory,
        ];
    }
}
