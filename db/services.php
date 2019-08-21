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
 * Differentiator plugin external functions and service definitions.
 *
 * @package     local_differentiator
 * @copyright   2019 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$functions = array(
    'local_differentiator_get_learninggoals' => array(
        'classname' => 'local_differentiator\external\learninggoals',
        'methodname' => 'get_learninggoals',
        'description' => 'Get all learning goals.',
        'type' => 'read',
        'ajax' => true,
        'capabilities' => 'local/differentiator:edit',
    ),
    'local_differentiator_get_learninggoal' => array(
        'classname' => 'local_differentiator\external\learninggoal',
        'methodname' => 'get_learninggoal',
        'description' => 'Get a specific learning goal.',
        'type' => 'read',
        'ajax' => true,
        'capabilities' => 'local/differentiator:edit',
    ),
    'local_differentiator_get_handlers' => array(
        'classname' => 'local_differentiator\external\handlers',
        'methodname' => 'get_handlers',
        'description' => 'Get the differentiator handlers.',
        'type' => 'read',
        'ajax' => true,
        'capabilities' => 'local/differentiator:edit',
    ),
    'local_differentiator_save_learninggoal' => array(
        'classname' => 'local_differentiator\external\learninggoal',
        'methodname' => 'save_learninggoal',
        'description' => 'Save a specific learning goal.',
        'type' => 'write',
        'ajax' => true,
    ),
    'local_differentiator_delete_learninggoal' => array(
        'classname' => 'local_differentiator\external\learninggoal',
        'methodname' => 'delete_learninggoal',
        'description' => 'Delete a specific learning goal.',
        'type' => 'write',
        'ajax' => true,
    ),
    'local_differentiator_duplicate_learninggoal' => array(
        'classname' => 'local_differentiator\external\learninggoal',
        'methodname' => 'duplicate_learninggoal',
        'description' => 'Duplicate a specific learning goal.',
        'type' => 'write',
        'ajax' => true,
    ),
);
