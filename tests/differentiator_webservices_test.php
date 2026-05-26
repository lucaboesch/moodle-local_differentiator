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
 * Unit tests for differentiator web services.
 *
 * @package     local_differentiator
 * @copyright   2026 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_differentiator;

use core_external\external_api;

// phpcs:disable moodle.PHPUnit.TestCaseNames.Missing

/**
 * Tests for differentiator web services.
 *
 * @package    local_differentiator
 * @category   test
 * @copyright  2026 Luca Bösch <luca.boesch@bfh.ch>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
final class differentiator_webservices_test extends \advanced_testcase {
    /**
     * This method is called before each test.
     */
    protected function setUp(): void {
        parent::setUp();
        $this->resetAfterTest();

        // Create a user.
        $user = $this->getDataGenerator()->create_user();
        $this->setUser($user);
    }

    /**
     * Test local_differentiator_get_learninggoals web service.
     *
     * @covers ::get_learninggoals
     * @return void
     */
    public function test_differentiator_get_learninggoals(): void {
        $this->assertTrue(true);
    }
}
