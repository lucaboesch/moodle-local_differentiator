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
 * The differentiator learning goal exporter for web service.
 *
 * @package     local_differentiator
 * @copyright   2019 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_differentiator\external\exporter;

defined('MOODLE_INTERNAL') || die();

/**
 * Class learninggoal
 *
 * @package     local_differentiator
 * @copyright   2019 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class learninggoal extends \core\external\exporter {
    /**
     * @var
     */
    protected $learninggoal;

    /**
     * The learning goal constructor.
     *
     * @param \learninggoal $learninggoal
     * @param \context $context
     * @throws \coding_exception
     */
    public function __construct($learninggoal, \context $context) {
        $this->learninggoal = $learninggoal;
        parent::__construct([], ['context' => $context]);
    }

    /**
     * Return the id, name, description and elements of the learning goal.
     *
     * @return array
     */
    protected static function define_other_properties() {
        return [
            'id' => [
                'type' => PARAM_INT,
                'description' => 'learning goal id',
            ],
            'name' => [
                'type' => PARAM_TEXT,
                'description' => 'learning goal name',
            ],
            'description' => [
                'type' => PARAM_TEXT,
                'description' => 'learning goal description',
            ],
            'pre_thinking_skill' => [
                'type' => PARAM_TEXT,
                'description' => 'learning goal pre thinking skill word string',
            ],
            'thinking_skill' => [
                'type' => PARAM_TEXT,
                'description' => 'learning goal thinking skill word string',
            ],
            'content' => [
                'type' => PARAM_TEXT,
                'description' => 'learning goal content string',
            ],
            'subject' => [
                'type' => PARAM_TEXT,
                'description' => 'learning goal subject string',
            ],
            'pre_resource' => [
                'type' => PARAM_TEXT,
                'description' => 'learning goal pre resource string',
            ],
            'resource' => [
                'type' => PARAM_TEXT,
                'description' => 'learning goal resource string',
            ],
            'pre_product' => [
                'type' => PARAM_TEXT,
                'description' => 'learning goal pre product string',
            ],
            'product' => [
                'type' => PARAM_TEXT,
                'description' => 'learning goal product string',
            ],
            'pre_group' => [
                'type' => PARAM_TEXT,
                'description' => 'learning goal pre group string',
            ],
            'group' => [
                'type' => PARAM_TEXT,
                'description' => 'learning goal group string',
            ],
        ];
    }

    /**
     * Return the list of properties.
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
            'id' => $this->learninggoal->id,
            'name' => $this->learninggoal->name,
            'description' => $this->learninggoal->description,
            'pre_thinking_skill' => ((isset($this->learninggoal->pre_thinking_skill)) ? $this->learninggoal->pre_thinking_skill :
                ''),
            'thinking_skill' => ((isset($this->learninggoal->thinking_skill)) ? $this->learninggoal->thinking_skill : ''),
            'content' => ((isset($this->learninggoal->content)) ? $this->learninggoal->content : ''),
            'subject' => ((isset($this->learninggoal->subject)) ? $this->learninggoal->subject : ''),
            'pre_resource' => ((isset($this->learninggoal->pre_resource)) ? $this->learninggoal->pre_resource : ''),
            'resource' => ((isset($this->learninggoal->resource)) ? $this->learninggoal->resource : ''),
            'pre_product' => ((isset($this->learninggoal->pre_product)) ? $this->learninggoal->pre_product : ''),
            'product' => ((isset($this->learninggoal->product)) ? $this->learninggoal->product : ''),
            'pre_group' => ((isset($this->learninggoal->pre_group)) ? $this->learninggoal->pre_group : ''),
            'group' => ((isset($this->learninggoal->group)) ? $this->learninggoal->group : ''),
        ];
    }
}
