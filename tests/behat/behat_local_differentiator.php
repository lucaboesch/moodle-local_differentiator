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
 * Behat local/differentiator related steps definitions.
 *
 * @package    local_differentiator
 * @category   test
 * @copyright  2024 Luca Bösch <luca.boesch@bfh.ch>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// NOTE: no MOODLE_INTERNAL test here, this file may be required by behat before including /config.php.

require_once(__DIR__ . '/../../../../lib/behat/behat_base.php');

/**
 * Step definitions related to local_differentiator.
 */
class behat_local_differentiator extends behat_base {
    /**
     * Convert page names to URLs for the step 'When I am on the "Differentiator" page'.
     *
     * @param string $type identifies which type of page this is, e.g. 'Differentiator'.
     * @param string $identifier identifies the particular page, e.g. 'Test questionnaire > preview > Attempt 1'.
     * @return moodle_url the corresponding URL.
     * @throws Exception with a meaningful error message if the specified page cannot be found.
     */
    protected function resolve_page_instance_url(string $type, string $identifier): moodle_url {
        switch (strtolower($type)) {
            case 'differentiator':
                return new moodle_url('/local/differentiator/index.php');
            default:
                return new moodle_url('/local/differentiator/index.php');
        }
    }
}
