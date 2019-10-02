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
 * The differentiator handler tab exporter for web service.
 *
 * @package     local_differentiator
 * @copyright   2019 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace local_differentiator\external\exporter;
defined('MOODLE_INTERNAL') || die();
/**
 * Class tab
 *
 * @package     local_differentiator
 * @copyright   2019 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class tab extends \core\external\exporter {
    /**
     * @var
     */
    protected $tab;
    /**
     * The tab constructor.
     *
     * @param \tab $tab
     * @param \context $context
     * @throws \coding_exception
     */
    public function __construct($tab, \context $context) {
        $this->tab = $tab;
        parent::__construct([], ['context' => $context]);
    }
    /**
     * Return the it, title, color and target input field of the tab.
     *
     * @return array
     */
    protected static function define_other_properties() {
        return [
            'id' => [
                'type' => PARAM_INT,
                'description' => 'tab id',
            ],
            'tabtitle' => [
                'type' => PARAM_TEXT,
                'description' => 'tab title',
            ],
            'tabcolor' => [
                'type' => PARAM_TEXT,
                'description' => 'tab color',
            ],
            'targetinput' => [
                'type' => PARAM_TEXT,
                'description' => 'learning goal text field to be filled',
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
     * Get id, title and color of the tab as well as its word categories.
     *
     * @param \renderer_base $output
     * @return array
     */
    protected function get_other_values(\renderer_base $output) {
        $values = array(
            'id' => $this->tab->id,
            'tabtitle' => $this->tab->tabtitle,
            'tabcolor' => $this->tab->tabcolor,
            'targetinput' => $this->tab->targetinput,
        );

        return $values;
    }
}