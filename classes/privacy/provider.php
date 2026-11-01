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
 * Privacy Subsystem implementation for local_differentiator.
 *
 * @package     local_differentiator
 * @copyright   2026 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_differentiator\privacy;

use context;
use context_user;
use core_privacy\local\metadata\collection;
use core_privacy\local\request\approved_contextlist;
use core_privacy\local\request\approved_userlist;
use core_privacy\local\request\contextlist;
use core_privacy\local\request\transform;
use core_privacy\local\request\userlist;
use core_privacy\local\request\writer;

/**
 * Privacy Subsystem for local_differentiator.
 *
 * The plugin stores a user's personal learning goals in the {local_differentiator_lg}
 * table, keyed by the owning user id. All other tables hold site-wide reference data
 * (word categories and their entries) which contains no personal data.
 *
 * A learning goal with a userid of 0 is a shared system default and is therefore not
 * considered personal data belonging to any single user.
 *
 * @copyright   2026 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class provider implements
    // This plugin stores personal data.
    \core_privacy\local\metadata\provider,

    // This plugin is capable of determining which users have data within it.
    \core_privacy\local\request\core_userlist_provider,

    // This plugin can provide access to, and deletion of, user data.
    \core_privacy\local\request\plugin\provider {
    /**
     * Return the fields which contain personal data.
     *
     * @param collection $collection a reference to the collection to use to store the metadata.
     * @return collection the updated collection of metadata items.
     */
    public static function get_metadata(collection $collection): collection {
        $collection->add_database_table(
            'local_differentiator_lg',
            [
                'userid' => 'privacy:metadata:local_differentiator_lg:userid',
                'title' => 'privacy:metadata:local_differentiator_lg:title',
                'lang' => 'privacy:metadata:local_differentiator_lg:lang',
                'subject' => 'privacy:metadata:local_differentiator_lg:subject',
                'pre_thinking_skill' => 'privacy:metadata:local_differentiator_lg:pre_thinking_skill',
                'thinking_skill' => 'privacy:metadata:local_differentiator_lg:thinking_skill',
                'lgcontent' => 'privacy:metadata:local_differentiator_lg:lgcontent',
                'pre_resource' => 'privacy:metadata:local_differentiator_lg:pre_resource',
                'resource' => 'privacy:metadata:local_differentiator_lg:resource',
                'pre_product' => 'privacy:metadata:local_differentiator_lg:pre_product',
                'product' => 'privacy:metadata:local_differentiator_lg:product',
                'pre_group' => 'privacy:metadata:local_differentiator_lg:pre_group',
                'lggroup' => 'privacy:metadata:local_differentiator_lg:lggroup',
                'timecreated' => 'privacy:metadata:local_differentiator_lg:timecreated',
                'timemodified' => 'privacy:metadata:local_differentiator_lg:timemodified',
            ],
            'privacy:metadata:local_differentiator_lg'
        );

        return $collection;
    }

    /**
     * Get the list of contexts that contain user information for the specified user.
     *
     * Learning goals are stored against the user, so they belong to the user's own context.
     *
     * @param int $userid the user to search.
     * @return contextlist the contextlist containing the list of contexts used in this plugin.
     */
    public static function get_contexts_for_userid(int $userid): contextlist {
        $contextlist = new contextlist();

        $sql = "SELECT ctx.id
                  FROM {context} ctx
                  JOIN {local_differentiator_lg} lg ON lg.userid = ctx.instanceid
                 WHERE ctx.contextlevel = :contextlevel
                   AND ctx.instanceid = :userid";
        $params = [
            'contextlevel' => CONTEXT_USER,
            'userid' => $userid,
        ];
        $contextlist->add_from_sql($sql, $params);

        return $contextlist;
    }

    /**
     * Get the list of users who have data within a context.
     *
     * @param userlist $userlist the userlist containing the list of users who have data in this context/plugin combination.
     */
    public static function get_users_in_context(userlist $userlist): void {
        $context = $userlist->get_context();

        if (!$context instanceof context_user) {
            return;
        }

        $sql = "SELECT lg.userid
                  FROM {local_differentiator_lg} lg
                 WHERE lg.userid = :userid";
        $params = ['userid' => $context->instanceid];
        $userlist->add_from_sql('userid', $sql, $params);
    }

    /**
     * Export all user data for the specified user, in the specified contexts.
     *
     * @param approved_contextlist $contextlist the approved contexts to export information for.
     */
    public static function export_user_data(approved_contextlist $contextlist): void {
        global $DB;

        if (empty($contextlist->count())) {
            return;
        }

        $user = $contextlist->get_user();

        foreach ($contextlist->get_contexts() as $context) {
            // The only context that can hold a user's learning goals is their own user context.
            if (!$context instanceof context_user || $context->instanceid != $user->id) {
                continue;
            }

            $goals = $DB->get_records('local_differentiator_lg', ['userid' => $user->id], 'timecreated ASC');
            if (empty($goals)) {
                continue;
            }

            $data = [];
            foreach ($goals as $goal) {
                $data[] = (object) [
                    'title' => $goal->title,
                    'lang' => $goal->lang,
                    'subject' => $goal->subject,
                    'pre_thinking_skill' => $goal->pre_thinking_skill,
                    'thinking_skill' => $goal->thinking_skill,
                    'lgcontent' => $goal->lgcontent,
                    'pre_resource' => $goal->pre_resource,
                    'resource' => $goal->resource,
                    'pre_product' => $goal->pre_product,
                    'product' => $goal->product,
                    'pre_group' => $goal->pre_group,
                    'lggroup' => $goal->lggroup,
                    'timecreated' => transform::datetime($goal->timecreated),
                    'timemodified' => $goal->timemodified ? transform::datetime($goal->timemodified) : null,
                ];
            }

            writer::with_context($context)->export_data(
                [get_string('pluginname', 'local_differentiator')],
                (object) ['learninggoals' => $data]
            );
        }
    }

    /**
     * Delete all data for all users in the specified context.
     *
     * @param context $context the specific context to delete data for.
     */
    public static function delete_data_for_all_users_in_context(context $context): void {
        global $DB;

        if (!$context instanceof context_user) {
            return;
        }

        $DB->delete_records('local_differentiator_lg', ['userid' => $context->instanceid]);
    }

    /**
     * Delete all user data for the specified user, in the specified contexts.
     *
     * @param approved_contextlist $contextlist the approved contexts and user information to delete information for.
     */
    public static function delete_data_for_user(approved_contextlist $contextlist): void {
        global $DB;

        if (empty($contextlist->count())) {
            return;
        }

        $user = $contextlist->get_user();

        foreach ($contextlist->get_contexts() as $context) {
            if ($context instanceof context_user && $context->instanceid == $user->id) {
                $DB->delete_records('local_differentiator_lg', ['userid' => $user->id]);
            }
        }
    }

    /**
     * Delete multiple users within a single context.
     *
     * @param approved_userlist $userlist the approved context and user information to delete information for.
     */
    public static function delete_data_for_users(approved_userlist $userlist): void {
        global $DB;

        $context = $userlist->get_context();

        if (!$context instanceof context_user) {
            return;
        }

        // A user context can only ever hold the learning goals of its own user, so only
        // delete when that user is part of the approved list.
        if (in_array($context->instanceid, $userlist->get_userids())) {
            $DB->delete_records('local_differentiator_lg', ['userid' => $context->instanceid]);
        }
    }
}
