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
 * This file installs the needed values to local_differentiator.
 *
 * @package     local_differentiator
 * @category    install
 * @copyright   2019 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();


/**
 * Install code for local_differentiator.
 *
 */
function xmldb_local_differentiator_install() {
    global $DB;

    $time = time();

    // Table local_differentiator_cw.
    for ($i = 1; $i <= 8; $i++) {
        $DB->insert_record('local_differentiator_cw', [
            'cwcid' => 1,
            'sort' => $i,
            'timecreated' => $time,
        ]);
    }
    for ($i = 1; $i <= 3; $i++) {
        $DB->insert_record('local_differentiator_cw', [
            'cwcid' => 2,
            'sort' => $i,
            'timecreated' => $time,
        ]);
    }
    for ($i = 1; $i <= 5; $i++) {
        $DB->insert_record('local_differentiator_cw', [
            'cwcid' => 3,
            'sort' => $i,
            'timecreated' => $time,
        ]);
    }
    for ($i = 1; $i <= 4; $i++) {
        $DB->insert_record('local_differentiator_cw', [
            'cwcid' => 4,
            'sort' => $i,
            'timecreated' => $time,
        ]);
    }

    // Table local_differentiator_cwc.
    for ($i = 1; $i <= 4; $i++) {
        $DB->insert_record('local_differentiator_cwc', [
            'sort' => $i,
            'timecreated' => $time,
        ]);
    }

    // Table local_differentiator_cwce.
    $DB->insert_record('local_differentiator_cwce', [
        'cwcid' => 1,
        'lang' => 'en',
        'timecreated' => $time,
        'cwcetitle' => 'Depth',
        'cwcetext' => 'Depth',
    ]);
    $DB->insert_record('local_differentiator_cwce', [
        'cwcid' => 2,
        'lang' => 'en',
        'timecreated' => $time,
        'cwcetitle' => 'Complexity',
        'cwcetext' => 'Complexity',
    ]);
    $DB->insert_record('local_differentiator_cwce', [
        'cwcid' => 3,
        'lang' => 'en',
        'timecreated' => $time,
        'cwcetitle' => 'Imperatives',
        'cwcetext' => 'Imperatives',
    ]);
    $DB->insert_record('local_differentiator_cwce', [
        'cwcid' => 4,
        'lang' => 'en',
        'timecreated' => $time,
        'cwcetitle' => 'Key Words',
        'cwcetext' => 'Key Words',
    ]);

    // Table local_differentiator_cwe.
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 1,
        'lang' => 'en',
        'timecreated' => $time,
        'cwetitle' => 'Big Idea',
        'cwetext' => 'big idea of the',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 2,
        'lang' => 'en',
        'timecreated' => $time,
        'cwetitle' => 'Unanswered Questions',
        'cwetext' => 'unanswered questions of the',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 3,
        'lang' => 'en',
        'timecreated' => $time,
        'cwetitle' => 'Ethics',
        'cwetext' => 'ethics of the',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 4,
        'lang' => 'en',
        'timecreated' => $time,
        'cwetitle' => 'Patterns',
        'cwetext' => 'patterns of the',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 5,
        'lang' => 'en',
        'timecreated' => $time,
        'cwetitle' => 'Rules',
        'cwetext' => 'rules of the',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 6,
        'lang' => 'en',
        'timecreated' => $time,
        'cwetitle' => 'Language of the Discipline',
        'cwetext' => 'language of the discipline of the',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 7,
        'lang' => 'en',
        'timecreated' => $time,
        'cwetitle' => 'Essential Details',
        'cwetext' => 'essential details of the',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 8,
        'lang' => 'en',
        'timecreated' => $time,
        'cwetitle' => 'Trends',
        'cwetext' => 'trends of the',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 9,
        'lang' => 'en',
        'timecreated' => $time,
        'cwetitle' => 'Multiple Points Of View',
        'cwetext' => 'multiple points of view of the',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 10,
        'lang' => 'en',
        'timecreated' => $time,
        'cwetitle' => 'Change Over Time',
        'cwetext' => 'change over time of the',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 11,
        'lang' => 'en',
        'timecreated' => $time,
        'cwetitle' => 'Across the Disciplines',
        'cwetext' => 'across the disciplines of the',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 12,
        'lang' => 'en',
        'timecreated' => $time,
        'cwetitle' => 'Origin',
        'cwetext' => 'origin of the',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 13,
        'lang' => 'en',
        'timecreated' => $time,
        'cwetitle' => 'Convergence',
        'cwetext' => 'convergence of the',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 14,
        'lang' => 'en',
        'timecreated' => $time,
        'cwetitle' => 'Parallels',
        'cwetext' => 'parallels of the',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 15,
        'lang' => 'en',
        'timecreated' => $time,
        'cwetitle' => 'Paradox',
        'cwetext' => 'paradox of the',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 16,
        'lang' => 'en',
        'timecreated' => $time,
        'cwetitle' => 'Contribution',
        'cwetext' => 'contribution of the',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 17,
        'lang' => 'en',
        'timecreated' => $time,
        'cwetitle' => 'Consequences',
        'cwetext' => 'consequences of the',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 18,
        'lang' => 'en',
        'timecreated' => $time,
        'cwetitle' => 'Motivations',
        'cwetext' => 'motivations of the',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 19,
        'lang' => 'en',
        'timecreated' => $time,
        'cwetitle' => 'Implications',
        'cwetext' => 'implications of the',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwcid' => 20,
        'lang' => 'en',
        'timecreated' => $time,
        'cwetitle' => 'Significance',
        'cwetext' => 'significance of the',
    ]);

    // Table local_differentiator_gw.
    for ($i = 1; $i <= 4; $i++) {
        $DB->insert_record('local_differentiator_gw', [
            'gwcid' => 1,
            'sort' => $i,
            'timecreated' => $time,
        ]);
    }

    // Table local_differentiator_gwc.
    $DB->insert_record('local_differentiator_gwc', [
        'sort' => 1,
        'timecreated' => $time,
    ]);

    // Table local_differentiator_gwce.
    $DB->insert_record('local_differentiator_gwce', [
        'gwcid' => 1,
        'lang' => 'en',
        'timecreated' => $time,
        'gwcetitle' => 'Group Size',
        'gwcetext' => 'Group Size',
    ]);

    // Table local_differentiator_gwe.
    $DB->insert_record('local_differentiator_gwe', [
        'gwid' => 1,
        'lang' => 'en',
        'timecreated' => $time,
        'gwetitle' => 'One',
        'gwetext' => 'one',
    ]);
    $DB->insert_record('local_differentiator_gwe', [
        'gwid' => 2,
        'lang' => 'en',
        'timecreated' => $time,
        'gwetitle' => 'Two',
        'gwetext' => 'two',
    ]);
    $DB->insert_record('local_differentiator_gwe', [
        'gwid' => 3,
        'lang' => 'en',
        'timecreated' => $time,
        'gwetitle' => 'Three',
        'gwetext' => 'three',
    ]);
    $DB->insert_record('local_differentiator_gwe', [
        'gwid' => 4,
        'lang' => 'en',
        'timecreated' => $time,
        'gwetitle' => 'Four',
        'gwetext' => 'four',
    ]);

    // Table local_differentiator_pw.
    for ($i = 1; $i <= 9; $i++) {
        $DB->insert_record('local_differentiator_pw', [
            'pwcid' => 1,
            'sort' => $i,
            'timecreated' => $time,
        ]);
    }
    for ($i = 1; $i <= 7; $i++) {
        $DB->insert_record('local_differentiator_pw', [
            'pwcid' => 2,
            'sort' => $i,
            'timecreated' => $time,
        ]);
    }
    for ($i = 1; $i <= 10; $i++) {
        $DB->insert_record('local_differentiator_pw', [
            'pwcid' => 3,
            'sort' => $i,
            'timecreated' => $time,
        ]);
    }
    for ($i = 1; $i <= 10; $i++) {
        $DB->insert_record('local_differentiator_pw', [
            'pwcid' => 4,
            'sort' => $i,
            'timecreated' => $time,
        ]);
    }
    for ($i = 1; $i <= 13; $i++) {
        $DB->insert_record('local_differentiator_pw', [
            'pwcid' => 5,
            'sort' => $i,
            'timecreated' => $time,
        ]);
    }

    // Table local_differentiator_pwc.
    for ($i = 1; $i <= 5; $i++) {
        $DB->insert_record('local_differentiator_pwc', [
            'sort' => $i,
            'timecreated' => $time,
        ]);
    }

    // Table local_differentiator_pwce.
    $DB->insert_record('local_differentiator_pwce', [
        'pwcid' => 1,
        'lang' => 'en',
        'timecreated' => $time,
        'pwcetitle' => 'Visual',
        'pwcetext' => 'Visual',
    ]);
    $DB->insert_record('local_differentiator_pwce', [
        'pwcid' => 2,
        'lang' => 'en',
        'timecreated' => $time,
        'pwcetitle' => 'Construction',
        'pwcetext' => 'Construction',
    ]);
    $DB->insert_record('local_differentiator_pwce', [
        'pwcid' => 3,
        'lang' => 'en',
        'timecreated' => $time,
        'pwcetitle' => 'Oral',
        'pwcetext' => 'Oral',
    ]);
    $DB->insert_record('local_differentiator_pwce', [
        'pwcid' => 4,
        'lang' => 'en',
        'timecreated' => $time,
        'pwcetitle' => 'Multimedia',
        'pwcetext' => 'Multimedia',
    ]);
    $DB->insert_record('local_differentiator_pwce', [
        'pwcid' => 5,
        'lang' => 'en',
        'timecreated' => $time,
        'pwcetitle' => 'Written',
        'pwcetext' => 'Written',
    ]);

    // Table local_differentiator_pwe.
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 1,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Chart',
        'pwetext' => 'a chart',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 2,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Drawing',
        'pwetext' => 'a drawing',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 3,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Timeline',
        'pwetext' => 'a timeline',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 4,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Diagram',
        'pwetext' => 'a diagram',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 5,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Graphic Organizer',
        'pwetext' => 'a graphic organizer',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 6,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Map',
        'pwetext' => 'a map',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 7,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Comic',
        'pwetext' => 'a comic',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 8,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Book Cover',
        'pwetext' => 'a book cover',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 9,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Poster',
        'pwetext' => 'a poster',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 10,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Model',
        'pwetext' => 'a model',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 11,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Sculpture',
        'pwetext' => 'a sculpture',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 12,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Diorama',
        'pwetext' => 'a diorama',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 13,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Miniature',
        'pwetext' => 'a miniature',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 14,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Art Gallery',
        'pwetext' => 'an art gallery',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 15,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Museum Exhibit',
        'pwetext' => 'a museum exhibit',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 16,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Mobile',
        'pwetext' => 'a mobile',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 17,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Debate',
        'pwetext' => 'a debate',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 18,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Panel Discussion',
        'pwetext' => 'a panel discussion',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 19,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Lesson',
        'pwetext' => 'a lesson',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 20,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Report',
        'pwetext' => 'a report',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 21,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Play',
        'pwetext' => 'a play',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 22,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => "Readers' Theater",
        'pwetext' => "a readers' theater",
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 23,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Press Conference',
        'pwetext' => 'a press conference',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 24,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Talk Show',
        'pwetext' => 'a talk show',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 25,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Monologue',
        'pwetext' => 'a monologue',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 26,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Movie Review',
        'pwetext' => 'a movie review',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 27,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Song',
        'pwetext' => 'a song',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 28,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Illustrated Book',
        'pwetext' => 'an illustrated book',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 29,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Newspaper',
        'pwetext' => 'a newspaper',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 30,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'TV Show',
        'pwetext' => 'a tv show',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 31,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'PowerPoint',
        'pwetext' => 'a powerpoint',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 32,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Video Poetry',
        'pwetext' => 'a video poetry',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 33,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Photo Essay',
        'pwetext' => 'a photo essay',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 34,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Video Travelogue',
        'pwetext' => 'a video travelogue',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 35,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'News Report',
        'pwetext' => 'a news report',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 36,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Webpage',
        'pwetext' => 'a webpage',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 37,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Essay',
        'pwetext' => 'an essay',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 38,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Response To Literature',
        'pwetext' => 'a response to literature',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 39,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Report',
        'pwetext' => 'a report',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 40,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Article',
        'pwetext' => 'an article',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 41,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Persuasive Essay',
        'pwetext' => 'a persuasive essay',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 42,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Sequel',
        'pwetext' => 'a sequel',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 43,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Letter',
        'pwetext' => 'a letter',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 44,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => "Children's Story",
        'pwetext' => "a children's story",
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 45,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Poem / Song',
        'pwetext' => 'a poem / song',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 46,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Eulogy',
        'pwetext' => 'a eulogy',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 47,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Diary',
        'pwetext' => 'a diary',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 48,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Review',
        'pwetext' => 'a review',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 49,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Story In A New Genre',
        'pwetext' => 'a story in a new genre',
    ]);

    // Table local_differentiator_rw.
    for ($i = 1; $i <= 7; $i++) {
        $DB->insert_record('local_differentiator_rw', [
            'rwcid' => 1,
            'sort' => $i,
            'timecreated' => $time,
        ]);
    }
    for ($i = 1; $i <= 6; $i++) {
        $DB->insert_record('local_differentiator_rw', [
            'rwcid' => 2,
            'sort' => $i,
            'timecreated' => $time,
        ]);
    }

    // Table local_differentiator_rwc.
    for ($i = 1; $i <= 2; $i++) {
        $DB->insert_record('local_differentiator_rwc', [
            'sort' => $i,
            'timecreated' => $time,
        ]);
    }

    // Table local_differentiator_rwce.
    $DB->insert_record('local_differentiator_rwce', [
        'rwcid' => 1,
        'lang' => 'en',
        'timecreated' => $time,
        'rwcetitle' => 'Offline',
        'rwcetext' => 'Offline',
    ]);
    $DB->insert_record('local_differentiator_rwce', [
        'rwcid' => 2,
        'lang' => 'en',
        'timecreated' => $time,
        'rwcetitle' => 'Online',
        'rwcetext' => 'Online',
    ]);

    // Table local_differentiator_rwe.
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 1,
        'lang' => 'en',
        'timecreated' => $time,
        'rwetitle' => 'Textbook',
        'rwetext' => 'a textbook',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 2,
        'lang' => 'en',
        'timecreated' => $time,
        'rwetitle' => 'Library Book',
        'rwetext' => 'a library book',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 3,
        'lang' => 'en',
        'timecreated' => $time,
        'rwetitle' => 'Magazine',
        'rwetext' => 'a magazine',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 4,
        'lang' => 'en',
        'timecreated' => $time,
        'rwetitle' => 'Newspaper',
        'rwetext' => 'a newspaper',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 5,
        'lang' => 'en',
        'timecreated' => $time,
        'rwetitle' => 'Interview',
        'rwetext' => 'an interview',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 6,
        'lang' => 'en',
        'timecreated' => $time,
        'rwetitle' => 'Encyclopedia',
        'rwetext' => 'an encyclopedia',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 7,
        'lang' => 'en',
        'timecreated' => $time,
        'rwetitle' => 'Expert',
        'rwetext' => 'an expert',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 8,
        'lang' => 'en',
        'timecreated' => $time,
        'rwetitle' => 'Website',
        'rwetext' => 'a website',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 9,
        'lang' => 'en',
        'timecreated' => $time,
        'rwetitle' => 'Wikipedia',
        'rwetext' => 'Wikipedia',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 10,
        'lang' => 'en',
        'timecreated' => $time,
        'rwetitle' => 'Online Encyclopedia',
        'rwetext' => 'an online encyclopedia',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 11,
        'lang' => 'en',
        'timecreated' => $time,
        'rwetitle' => 'Journal',
        'rwetext' => 'a journal',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 12,
        'lang' => 'en',
        'timecreated' => $time,
        'rwetitle' => 'Article',
        'rwetext' => 'an article',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 13,
        'lang' => 'en',
        'timecreated' => $time,
        'rwetitle' => 'Expert',
        'rwetext' => 'an expert',
    ]);

    // Table local_differentiator_tsw.
    for ($i = 1; $i <= 9; $i++) {
        $DB->insert_record('local_differentiator_tsw', [
            'tswcid' => 1,
            'sort' => $i,
            'timecreated' => $time,
        ]);
    }
    for ($i = 1; $i <= 9; $i++) {
        $DB->insert_record('local_differentiator_tsw', [
            'tswcid' => 2,
            'sort' => $i,
            'timecreated' => $time,
        ]);
    }
    for ($i = 1; $i <= 8; $i++) {
        $DB->insert_record('local_differentiator_tsw', [
            'tswcid' => 3,
            'sort' => $i,
            'timecreated' => $time,
        ]);
    }
    for ($i = 1; $i <= 8; $i++) {
        $DB->insert_record('local_differentiator_tsw', [
            'tswcid' => 4,
            'sort' => $i,
            'timecreated' => $time,
        ]);
    }
    for ($i = 1; $i <= 8; $i++) {
        $DB->insert_record('local_differentiator_tsw', [
            'tswcid' => 5,
            'sort' => $i,
            'timecreated' => $time,
        ]);
    }
    for ($i = 1; $i <= 8; $i++) {
        $DB->insert_record('local_differentiator_tsw', [
            'tswcid' => 6,
            'sort' => $i,
            'timecreated' => $time,
        ]);
    }

    // Table local_differentiator_tswc.
    for ($i = 1; $i <= 6; $i++) {
        $DB->insert_record('local_differentiator_tswc', [
            'sort' => $i,
            'timecreated' => $time,
        ]);
    }

    // Table local_differentiator_tswce.
    $DB->insert_record('local_differentiator_tswce', [
        'tswcid' => 1,
        'lang' => 'en',
        'timecreated' => $time,
        'tswcetitle' => 'Remembering',
        'tswcetext' => 'Remembering',
    ]);
    $DB->insert_record('local_differentiator_tswce', [
        'tswcid' => 2,
        'lang' => 'en',
        'timecreated' => $time,
        'tswcetitle' => 'Understanding',
        'tswcetext' => 'Understanding',
    ]);
    $DB->insert_record('local_differentiator_tswce', [
        'tswcid' => 3,
        'lang' => 'en',
        'timecreated' => $time,
        'tswcetitle' => 'Applying',
        'tswcetext' => 'Applying',
    ]);
    $DB->insert_record('local_differentiator_tswce', [
        'tswcid' => 4,
        'lang' => 'en',
        'timecreated' => $time,
        'tswcetitle' => 'Analyzing',
        'tswcetext' => 'Analyzing',
    ]);
    $DB->insert_record('local_differentiator_tswce', [
        'tswcid' => 5,
        'lang' => 'en',
        'timecreated' => $time,
        'tswcetitle' => 'Evaluating',
        'tswcetext' => 'Evaluating',
    ]);
    $DB->insert_record('local_differentiator_tswce', [
        'tswcid' => 6,
        'lang' => 'en',
        'timecreated' => $time,
        'tswcetitle' => 'Creating',
        'tswcetext' => 'Creating',
    ]);

    // Table local_differentiator_tswe.
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 1,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Remember',
        'tswetext' => 'remember the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 2,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Repeat',
        'tswetext' => 'repeat the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 3,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Name',
        'tswetext' => 'name the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 4,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Report',
        'tswetext' => 'report the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 5,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'List',
        'tswetext' => 'list the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 6,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'State',
        'tswetext' => 'state the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 7,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Define',
        'tswetext' => 'define the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 8,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Exemplify',
        'tswetext' => 'exemplify the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 9,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Recognise',
        'tswetext' => 'recognise the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 10,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Compare',
        'tswetext' => 'compare the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 11,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Show',
        'tswetext' => 'show the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 12,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Explain',
        'tswetext' => 'explain the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 13,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Choose',
        'tswetext' => 'choose the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 14,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Discribe',
        'tswetext' => 'discribe the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 15,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Classify',
        'tswetext' => 'classify the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 16,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Substantiate',
        'tswetext' => 'substantiate the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 17,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Summarise',
        'tswetext' => 'summarise the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 18,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Distinguish',
        'tswetext' => 'distinguish the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 19,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Interpret',
        'tswetext' => 'interpret the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 20,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Solve',
        'tswetext' => 'solve the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 21,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Visualise',
        'tswetext' => 'visualise the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 22,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Present',
        'tswetext' => 'present the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 23,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Measure',
        'tswetext' => 'measure the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 24,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Outline',
        'tswetext' => 'outline the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 25,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Implement',
        'tswetext' => 'implement the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 26,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Calculate',
        'tswetext' => 'calculate the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 27,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Execute',
        'tswetext' => 'execute the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 28,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Review',
        'tswetext' => 'review the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 29,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Question',
        'tswetext' => 'question the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 30,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Judge',
        'tswetext' => 'judge the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 31,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Contrast',
        'tswetext' => 'contrast the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 32,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Criticize',
        'tswetext' => 'criticize the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 33,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Analyse',
        'tswetext' => 'analyse the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 34,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Diagnose',
        'tswetext' => 'diagnose the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 35,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Reflect',
        'tswetext' => 'reflect the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 36,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Deduce',
        'tswetext' => 'deduce the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 37,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Select',
        'tswetext' => 'select the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 38,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Suggest',
        'tswetext' => 'suggest the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 39,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Assess',
        'tswetext' => 'assess the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 40,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Evaluate',
        'tswetext' => 'evaluate the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 41,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Decide',
        'tswetext' => 'decide the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 42,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Justify',
        'tswetext' => 'justify the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 43,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Appraise',
        'tswetext' => 'appraise the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 44,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Assemble',
        'tswetext' => 'assemble the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 45,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Conceive',
        'tswetext' => 'conceive the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 46,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Extend',
        'tswetext' => 'extend the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 47,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Develop',
        'tswetext' => 'develop the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 48,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Design',
        'tswetext' => 'design the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 49,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Create',
        'tswetext' => 'create the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 50,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Construct',
        'tswetext' => 'construct the',
    ]);

    // French.

    // Table local_differentiator_cwce.
    $DB->insert_record('local_differentiator_cwce', [
        'cwcid' => 1,
        'lang' => 'fr',
        'timecreated' => $time,
        'cwcetitle' => 'Profondeur',
        'cwcetext' => 'Profondeur',
    ]);
    $DB->insert_record('local_differentiator_cwce', [
        'cwcid' => 2,
        'lang' => 'fr',
        'timecreated' => $time,
        'cwcetitle' => 'Complexité',
        'cwcetext' => 'Complexité',
    ]);
    $DB->insert_record('local_differentiator_cwce', [
        'cwcid' => 3,
        'lang' => 'fr',
        'timecreated' => $time,
        'cwcetitle' => 'Impératifs',
        'cwcetext' => 'Impératifs',
    ]);
    $DB->insert_record('local_differentiator_cwce', [
        'cwcid' => 4,
        'lang' => 'fr',
        'timecreated' => $time,
        'cwcetitle' => 'Mots Clés',
        'cwcetext' => 'Mots Clés',
    ]);

    // Table local_differentiator_cwe.
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 1,
        'lang' => 'fr',
        'timecreated' => $time,
        'cwetitle' => 'Vue d\'ensemble',
        'cwetext' => 'la vue d\'ensemble de',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 2,
        'lang' => 'fr',
        'timecreated' => $time,
        'cwetitle' => 'Questions non répondues',
        'cwetext' => 'les questions non répondues de',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 3,
        'lang' => 'fr',
        'timecreated' => $time,
        'cwetitle' => 'Éthique',
        'cwetext' => 'l\'éthique de',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 4,
        'lang' => 'fr',
        'timecreated' => $time,
        'cwetitle' => 'Motifs',
        'cwetext' => 'les motifs de',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 5,
        'lang' => 'fr',
        'timecreated' => $time,
        'cwetitle' => 'Règles',
        'cwetext' => 'les regles de',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 6,
        'lang' => 'fr',
        'timecreated' => $time,
        'cwetitle' => 'Langage de la discipline',
        'cwetext' => 'le langage de la discipline de',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 7,
        'lang' => 'fr',
        'timecreated' => $time,
        'cwetitle' => 'Détails Essentiels',
        'cwetext' => 'les détails essentiels de',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 8,
        'lang' => 'fr',
        'timecreated' => $time,
        'cwetitle' => 'Tendances',
        'cwetext' => 'les tendances de',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 9,
        'lang' => 'fr',
        'timecreated' => $time,
        'cwetitle' => 'Points de vue multiples',
        'cwetext' => 'les points de vue multiples de',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 10,
        'lang' => 'fr',
        'timecreated' => $time,
        'cwetitle' => 'Changement dans le temps de',
        'cwetext' => 'le changement dans le temps de',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 11,
        'lang' => 'fr',
        'timecreated' => $time,
        'cwetitle' => 'Interdisciplinarité',
        'cwetext' => 'l\'interdisciplinarité',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 12,
        'lang' => 'fr',
        'timecreated' => $time,
        'cwetitle' => 'Origine',
        'cwetext' => 'l\'origine de',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 13,
        'lang' => 'fr',
        'timecreated' => $time,
        'cwetitle' => 'Convergence',
        'cwetext' => 'la convergence de',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 14,
        'lang' => 'fr',
        'timecreated' => $time,
        'cwetitle' => 'Parallélisme',
        'cwetext' => 'le parallélisme de',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 15,
        'lang' => 'fr',
        'timecreated' => $time,
        'cwetitle' => 'Paradoxe',
        'cwetext' => 'le paradoxe de',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 16,
        'lang' => 'fr',
        'timecreated' => $time,
        'cwetitle' => 'Contribution',
        'cwetext' => 'la contribution de',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 17,
        'lang' => 'fr',
        'timecreated' => $time,
        'cwetitle' => 'Conséquences',
        'cwetext' => 'les conséquences de',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 18,
        'lang' => 'fr',
        'timecreated' => $time,
        'cwetitle' => 'Motivations',
        'cwetext' => 'les motivations de',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 19,
        'lang' => 'fr',
        'timecreated' => $time,
        'cwetitle' => 'Implications',
        'cwetext' => 'les implications de',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwcid' => 20,
        'lang' => 'fr',
        'timecreated' => $time,
        'cwetitle' => 'Portée d\'application',
        'cwetext' => 'la portée d\'application de',
    ]);

    // Table local_differentiator_gwce.
    $DB->insert_record('local_differentiator_gwce', [
        'gwcid' => 1,
        'lang' => 'fr',
        'timecreated' => $time,
        'gwcetitle' => 'Taille du groupe',
        'gwcetext' => 'Taille du groupe',
    ]);

    // Table local_differentiator_gwe.
    $DB->insert_record('local_differentiator_gwe', [
        'gwid' => 1,
        'lang' => 'fr',
        'timecreated' => $time,
        'gwetitle' => 'Un',
        'gwetext' => 'un',
    ]);
    $DB->insert_record('local_differentiator_gwe', [
        'gwid' => 2,
        'lang' => 'fr',
        'timecreated' => $time,
        'gwetitle' => 'Deux',
        'gwetext' => 'deux',
    ]);
    $DB->insert_record('local_differentiator_gwe', [
        'gwid' => 3,
        'lang' => 'fr',
        'timecreated' => $time,
        'gwetitle' => 'Trois',
        'gwetext' => 'trois',
    ]);
    $DB->insert_record('local_differentiator_gwe', [
        'gwid' => 4,
        'lang' => 'fr',
        'timecreated' => $time,
        'gwetitle' => 'Quatre',
        'gwetext' => 'quatre',
    ]);

    // Table local_differentiator_pwce.
    $DB->insert_record('local_differentiator_pwce', [
        'pwcid' => 1,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwcetitle' => 'Visuel',
        'pwcetext' => 'Visuel',
    ]);
    $DB->insert_record('local_differentiator_pwce', [
        'pwcid' => 2,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwcetitle' => 'Construction',
        'pwcetext' => 'Construction',
    ]);
    $DB->insert_record('local_differentiator_pwce', [
        'pwcid' => 3,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwcetitle' => 'Oral',
        'pwcetext' => 'Oral',
    ]);
    $DB->insert_record('local_differentiator_pwce', [
        'pwcid' => 4,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwcetitle' => 'Multimédia',
        'pwcetext' => 'Multimédia',
    ]);
    $DB->insert_record('local_differentiator_pwce', [
        'pwcid' => 5,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwcetitle' => 'Écrit',
        'pwcetext' => 'Écrit',
    ]);

    // Table local_differentiator_pwce.
    $DB->insert_record('local_differentiator_pwce', [
        'pwcid' => 1,
        'lang' => 'en',
        'timecreated' => $time,
        'pwcetitle' => 'Visual',
        'pwcetext' => 'Visual',
    ]);
    $DB->insert_record('local_differentiator_pwce', [
        'pwcid' => 2,
        'lang' => 'en',
        'timecreated' => $time,
        'pwcetitle' => 'Construction',
        'pwcetext' => 'Construction',
    ]);
    $DB->insert_record('local_differentiator_pwce', [
        'pwcid' => 3,
        'lang' => 'en',
        'timecreated' => $time,
        'pwcetitle' => 'Oral',
        'pwcetext' => 'Oral',
    ]);
    $DB->insert_record('local_differentiator_pwce', [
        'pwcid' => 4,
        'lang' => 'en',
        'timecreated' => $time,
        'pwcetitle' => 'Multimedia',
        'pwcetext' => 'Multimedia',
    ]);
    $DB->insert_record('local_differentiator_pwce', [
        'pwcid' => 5,
        'lang' => 'en',
        'timecreated' => $time,
        'pwcetitle' => 'Written',
        'pwcetext' => 'Written',
    ]);

    // Table local_differentiator_pwe.
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 1,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Figure (graphique)',
        'pwetext' => 'une figure (graphique)',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 2,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Dessin',
        'pwetext' => 'un dessin',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 3,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Chronologie',
        'pwetext' => 'une chronologie',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 4,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Diagramme',
        'pwetext' => 'un diagramme',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 5,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Représentation schématique',
        'pwetext' => 'une représentation schématique',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 6,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Carte',
        'pwetext' => 'une carte',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 7,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Bande dessinée',
        'pwetext' => 'une bande dessinée',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 8,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Couverture',
        'pwetext' => 'une couverture',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 9,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Affiche',
        'pwetext' => 'une affiche',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 10,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Modèle',
        'pwetext' => 'un modèle',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 11,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Sculpture',
        'pwetext' => 'une sculpture',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 12,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Diorama',
        'pwetext' => 'un diorama',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 13,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Miniature',
        'pwetext' => 'une miniature',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 14,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Galerie d\'art',
        'pwetext' => 'une galerie d\'art',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 15,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Exposition muséale',
        'pwetext' => 'une exposition muséale',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 16,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Mobilé',
        'pwetext' => 'un mobilé',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 17,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Débat',
        'pwetext' => 'un débat',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 18,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Débat de spécialistes',
        'pwetext' => 'un débat de spécialistes',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 19,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Leçon',
        'pwetext' => 'une leçon',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 20,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Rapport',
        'pwetext' => 'un rapport',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 21,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Pièce de théâtre',
        'pwetext' => 'une pièce de théâtre',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 22,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => "Pièce radiophonique",
        'pwetext' => "une pièce radiophonique",
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 23,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Conférence de presse',
        'pwetext' => 'une conférence de presse',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 24,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Émission-débat',
        'pwetext' => 'une émission-débat',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 25,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Monologue',
        'pwetext' => 'un monologue',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 26,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Critique du film',
        'pwetext' => 'une critique du film',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 27,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Chanson',
        'pwetext' => 'une chanson',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 28,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Livre illustré',
        'pwetext' => 'un livre illustré',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 29,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Journal',
        'pwetext' => 'un journal',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 30,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Émission de télévision',
        'pwetext' => 'une émission de télévision',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 31,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'PowerPoint',
        'pwetext' => 'un powerpoint',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 32,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Poésie vidéo',
        'pwetext' => 'une poésie vidéo',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 33,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Photoreportage',
        'pwetext' => 'un photoreportage',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 34,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Carnet vidéo de voyage',
        'pwetext' => 'un carnet vidéo de voyage',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 35,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Reportage d\'actualités',
        'pwetext' => 'un reportage d\'actualités',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 36,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Site web',
        'pwetext' => 'un site web',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 37,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Essai',
        'pwetext' => 'un essai',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 38,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Réponse à la littérature',
        'pwetext' => 'une réponse à la littérature',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 39,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Reportage',
        'pwetext' => 'un reportage',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 40,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Article',
        'pwetext' => 'un article',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 41,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Essai persuasif',
        'pwetext' => 'un essai persuasif',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 42,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Série',
        'pwetext' => 'une série',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 43,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Lettre',
        'pwetext' => 'une lettre',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 44,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => "Histoire d'enfants",
        'pwetext' => "une histoire d'enfants",
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 45,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Poème / Chanson',
        'pwetext' => 'un poème / une chanson',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 46,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Éloge',
        'pwetext' => 'en éloge',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 47,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Journal intime',
        'pwetext' => 'un journal intime',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 48,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Revue',
        'pwetext' => 'une revue',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 49,
        'lang' => 'fr',
        'timecreated' => $time,
        'pwetitle' => 'Histoire d\'un genre nouveau',
        'pwetext' => 'une histoire d\'un genre nouveau',
    ]);

    // Table local_differentiator_rwce.
    $DB->insert_record('local_differentiator_rwce', [
        'rwcid' => 1,
        'lang' => 'fr',
        'timecreated' => $time,
        'rwcetitle' => 'Hors ligne',
        'rwcetext' => 'Hors ligne',
    ]);
    $DB->insert_record('local_differentiator_rwce', [
        'rwcid' => 2,
        'lang' => 'fr',
        'timecreated' => $time,
        'rwcetitle' => 'En ligne',
        'rwcetext' => 'En ligne',
    ]);

    // Table local_differentiator_rwe.
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 1,
        'lang' => 'fr',
        'timecreated' => $time,
        'rwetitle' => 'Texte',
        'rwetext' => 'un texte',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 2,
        'lang' => 'fr',
        'timecreated' => $time,
        'rwetitle' => 'Livre',
        'rwetext' => 'un livre',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 3,
        'lang' => 'fr',
        'timecreated' => $time,
        'rwetitle' => 'Revue',
        'rwetext' => 'une revue',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 4,
        'lang' => 'fr',
        'timecreated' => $time,
        'rwetitle' => 'Journal',
        'rwetext' => 'un journal',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 5,
        'lang' => 'fr',
        'timecreated' => $time,
        'rwetitle' => 'Interview',
        'rwetext' => 'un interview',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 6,
        'lang' => 'fr',
        'timecreated' => $time,
        'rwetitle' => 'Encyclopédie',
        'rwetext' => 'une encyclopédie',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 7,
        'lang' => 'fr',
        'timecreated' => $time,
        'rwetitle' => 'Expert',
        'rwetext' => 'un expert',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 8,
        'lang' => 'fr',
        'timecreated' => $time,
        'rwetitle' => 'Site Web',
        'rwetext' => 'un site web',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 9,
        'lang' => 'fr',
        'timecreated' => $time,
        'rwetitle' => 'Wikipedia',
        'rwetext' => 'Wikipedia',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 10,
        'lang' => 'fr',
        'timecreated' => $time,
        'rwetitle' => 'Encyclopédie en ligne',
        'rwetext' => 'une encyclopédie en ligne',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 11,
        'lang' => 'fr',
        'timecreated' => $time,
        'rwetitle' => 'Journal en ligne',
        'rwetext' => 'un journal en ligne',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 12,
        'lang' => 'fr',
        'timecreated' => $time,
        'rwetitle' => 'Article',
        'rwetext' => 'un article',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 13,
        'lang' => 'fr',
        'timecreated' => $time,
        'rwetitle' => 'Expert',
        'rwetext' => 'un expert',
    ]);

    // Table local_differentiator_tswce.
    $DB->insert_record('local_differentiator_tswce', [
        'tswcid' => 1,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswcetitle' => 'Connaissance',
        'tswcetext' => 'Connaissance',
    ]);
    $DB->insert_record('local_differentiator_tswce', [
        'tswcid' => 2,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswcetitle' => 'Compréhension',
        'tswcetext' => 'Compréhension',
    ]);
    $DB->insert_record('local_differentiator_tswce', [
        'tswcid' => 3,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswcetitle' => 'Application',
        'tswcetext' => 'Application',
    ]);
    $DB->insert_record('local_differentiator_tswce', [
        'tswcid' => 4,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswcetitle' => 'Analyse',
        'tswcetext' => 'Analyse',
    ]);
    $DB->insert_record('local_differentiator_tswce', [
        'tswcid' => 5,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswcetitle' => 'Evaluation',
        'tswcetext' => 'Evaluation',
    ]);
    $DB->insert_record('local_differentiator_tswce', [
        'tswcid' => 6,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswcetitle' => 'Création',
        'tswcetext' => 'Création',
    ]);

    // Table local_differentiator_tswe.
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 1,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Se rappeler',
        'tswetext' => 'de se rappeler',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 2,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Répéter',
        'tswetext' => 'de répéter',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 3,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Nommer',
        'tswetext' => 'de nommer',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 4,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Reporter',
        'tswetext' => 'de reporter',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 5,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Énumérer',
        'tswetext' => 'd\'énumérer',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 6,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Expliquer',
        'tswetext' => 'd\'expliquer',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 7,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Définir',
        'tswetext' => 'de définir',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 8,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Illustrer',
        'tswetext' => 'd\'illustrer',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 9,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Reconnaître',
        'tswetext' => 'de reconnaître',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 10,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Comparer',
        'tswetext' => 'de comparer',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 11,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Montrer',
        'tswetext' => 'de montrer',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 12,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Élucider',
        'tswetext' => 'd\'élucider',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 13,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Choisir',
        'tswetext' => 'de choisir',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 14,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Décrire',
        'tswetext' => 'de décrire',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 15,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Classifier',
        'tswetext' => 'de classifier',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 16,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Justifier',
        'tswetext' => 'de justifier',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 17,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Résumer',
        'tswetext' => 'de résumer',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 18,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Distinguer',
        'tswetext' => 'de distinguer',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 19,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Interpréter',
        'tswetext' => 'd\'interpréter',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 20,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Résoudre',
        'tswetext' => 'de résoudre',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 21,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Visualiser',
        'tswetext' => 'de visualiser',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 22,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Présenter',
        'tswetext' => 'de présenter',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 23,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Mesurer',
        'tswetext' => 'de mesurer',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 24,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Brouillonner',
        'tswetext' => 'de brouillonner',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 25,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Concrétiser',
        'tswetext' => 'de concrétiser',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 26,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Calculer',
        'tswetext' => 'de calculer',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 27,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Executer',
        'tswetext' => 'd\'executer',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 28,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Vérifier',
        'tswetext' => 'de vérifier',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 29,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Questionner',
        'tswetext' => 'de questionner',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 30,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Estimer',
        'tswetext' => 'd\'estimer',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 31,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Contraster',
        'tswetext' => 'de contraster',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 32,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Critiquer',
        'tswetext' => 'de critiquer',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 33,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Analyser',
        'tswetext' => 'd\'analyser',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 34,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Diagnostiquer',
        'tswetext' => 'de diagnostiquer',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 35,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Refléter',
        'tswetext' => 'de refléter',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 36,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Déduire',
        'tswetext' => 'de déduire',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 37,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Sélectionner',
        'tswetext' => 'de sélectionner',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 38,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Suggérer',
        'tswetext' => 'de suggérer',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 39,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Considerer',
        'tswetext' => 'de condiderer',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 40,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Évaluer',
        'tswetext' => 'd\'évaluer',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 41,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Décider',
        'tswetext' => 'de décider',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 42,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Justifier',
        'tswetext' => 'de justifier',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 43,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Estimer',
        'tswetext' => 'd\'estimer',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 44,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Assembler',
        'tswetext' => 'd\'assembler',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 45,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Engendrer',
        'tswetext' => 'd\'engendrer',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 46,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Étendre',
        'tswetext' => 'd\'étendre',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 47,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Développer',
        'tswetext' => 'de développer',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 48,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Concevoir',
        'tswetext' => 'de concevoir',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 49,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Créer',
        'tswetext' => 'de créer',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 50,
        'lang' => 'fr',
        'timecreated' => $time,
        'tswetitle' => 'Construire',
        'tswetext' => 'de construire',
    ]);

    // German.

    // Table local_differentiator_cwce.
    $DB->insert_record('local_differentiator_cwce', [
        'cwcid' => 1,
        'lang' => 'de',
        'timecreated' => $time,
        'cwcetitle' => 'Vertiefung',
        'cwcetext' => 'Vertiefung',
    ]);
    $DB->insert_record('local_differentiator_cwce', [
        'cwcid' => 2,
        'lang' => 'de',
        'timecreated' => $time,
        'cwcetitle' => 'Komplexität',
        'cwcetext' => 'Komplexität',
    ]);
    $DB->insert_record('local_differentiator_cwce', [
        'cwcid' => 3,
        'lang' => 'de',
        'timecreated' => $time,
        'cwcetitle' => 'Anforderungen',
        'cwcetext' => 'Anforderungen',
    ]);
    $DB->insert_record('local_differentiator_cwce', [
        'cwcid' => 4,
        'lang' => 'de',
        'timecreated' => $time,
        'cwcetitle' => 'Schlüsselwörter',
        'cwcetext' => 'Schlüsselwörter',
    ]);

    // Table local_differentiator_cwe.
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 1,
        'lang' => 'de',
        'timecreated' => $time,
        'cwetitle' => 'Gesamtbild',
        'cwetext' => 'das Gesamtbild der',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 2,
        'lang' => 'de',
        'timecreated' => $time,
        'cwetitle' => 'Unbeantwortete Fragen',
        'cwetext' => 'die unbeantworteten Fragen der',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 3,
        'lang' => 'de',
        'timecreated' => $time,
        'cwetitle' => 'Ethik',
        'cwetext' => 'die Ethik der',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 4,
        'lang' => 'de',
        'timecreated' => $time,
        'cwetitle' => 'Motive',
        'cwetext' => 'die Motive der',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 5,
        'lang' => 'de',
        'timecreated' => $time,
        'cwetitle' => 'Regeln',
        'cwetext' => 'die Regeln der',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 6,
        'lang' => 'de',
        'timecreated' => $time,
        'cwetitle' => 'Fachsprache',
        'cwetext' => 'die Fachsprache der',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 7,
        'lang' => 'de',
        'timecreated' => $time,
        'cwetitle' => 'Wesentliche Details',
        'cwetext' => 'die wesentliche Details der',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 8,
        'lang' => 'de',
        'timecreated' => $time,
        'cwetitle' => 'Trends',
        'cwetext' => 'die Trends der',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 9,
        'lang' => 'de',
        'timecreated' => $time,
        'cwetitle' => 'Mehrere Gesichtspunkte',
        'cwetext' => 'mehrere Gesichtspunkte der',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 10,
        'lang' => 'de',
        'timecreated' => $time,
        'cwetitle' => 'Veränderung im Laufe der Zeit',
        'cwetext' => 'die Veränderung im Laufe der Zeit der',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 11,
        'lang' => 'de',
        'timecreated' => $time,
        'cwetitle' => 'Interdisziplinarität',
        'cwetext' => 'die Interdisziplinarität der',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 12,
        'lang' => 'de',
        'timecreated' => $time,
        'cwetitle' => 'Herkunft',
        'cwetext' => 'die Herkunft der',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 13,
        'lang' => 'de',
        'timecreated' => $time,
        'cwetitle' => 'Konvergenz',
        'cwetext' => 'die Konvergenz der',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 14,
        'lang' => 'de',
        'timecreated' => $time,
        'cwetitle' => 'Parallellen',
        'cwetext' => 'die Parallelen der',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 15,
        'lang' => 'de',
        'timecreated' => $time,
        'cwetitle' => 'Paradox',
        'cwetext' => 'das Paradox der',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 16,
        'lang' => 'de',
        'timecreated' => $time,
        'cwetitle' => 'Beitrag',
        'cwetext' => 'den Beitrag der',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 17,
        'lang' => 'de',
        'timecreated' => $time,
        'cwetitle' => 'Konsequenzen',
        'cwetext' => 'die Konsequenzen der',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 18,
        'lang' => 'de',
        'timecreated' => $time,
        'cwetitle' => 'Motivation',
        'cwetext' => 'die Motivation der',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwid' => 19,
        'lang' => 'de',
        'timecreated' => $time,
        'cwetitle' => 'Implikationen',
        'cwetext' => 'die Implikationen der',
    ]);
    $DB->insert_record('local_differentiator_cwe', [
        'cwcid' => 20,
        'lang' => 'de',
        'timecreated' => $time,
        'cwetitle' => 'Bedeutung',
        'cwetext' => 'die Bedeutung der',
    ]);

    // Table local_differentiator_gwce.
    $DB->insert_record('local_differentiator_gwce', [
        'gwcid' => 1,
        'lang' => 'de',
        'timecreated' => $time,
        'gwcetitle' => 'Gruppengrösse',
        'gwcetext' => 'Gruppengrösse',
    ]);

    // Table local_differentiator_gwe.
    $DB->insert_record('local_differentiator_gwe', [
        'gwid' => 1,
        'lang' => 'de',
        'timecreated' => $time,
        'gwetitle' => 'Eins',
        'gwetext' => 'eins',
    ]);
    $DB->insert_record('local_differentiator_gwe', [
        'gwid' => 2,
        'lang' => 'de',
        'timecreated' => $time,
        'gwetitle' => 'Zwei',
        'gwetext' => 'zwei',
    ]);
    $DB->insert_record('local_differentiator_gwe', [
        'gwid' => 3,
        'lang' => 'de',
        'timecreated' => $time,
        'gwetitle' => 'Drei',
        'gwetext' => 'drei',
    ]);
    $DB->insert_record('local_differentiator_gwe', [
        'gwid' => 4,
        'lang' => 'de',
        'timecreated' => $time,
        'gwetitle' => 'Vier',
        'gwetext' => 'vier',
    ]);

    // Table local_differentiator_pwce.
    $DB->insert_record('local_differentiator_pwce', [
        'pwcid' => 1,
        'lang' => 'de',
        'timecreated' => $time,
        'pwcetitle' => 'Visuell',
        'pwcetext' => 'Visuell',
    ]);
    $DB->insert_record('local_differentiator_pwce', [
        'pwcid' => 2,
        'lang' => 'de',
        'timecreated' => $time,
        'pwcetitle' => 'Konstruktion',
        'pwcetext' => 'Konstruktion',
    ]);
    $DB->insert_record('local_differentiator_pwce', [
        'pwcid' => 3,
        'lang' => 'de',
        'timecreated' => $time,
        'pwcetitle' => 'Mündlich',
        'pwcetext' => 'Mündlich',
    ]);
    $DB->insert_record('local_differentiator_pwce', [
        'pwcid' => 4,
        'lang' => 'de',
        'timecreated' => $time,
        'pwcetitle' => 'Multimedia',
        'pwcetext' => 'Multimedia',
    ]);
    $DB->insert_record('local_differentiator_pwce', [
        'pwcid' => 5,
        'lang' => 'de',
        'timecreated' => $time,
        'pwcetitle' => 'Schriftlich',
        'pwcetext' => 'Schriftlich',
    ]);

    // Table local_differentiator_pwe.
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 1,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Grafik',
        'pwetext' => 'eine Grafik',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 2,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Zeichnung',
        'pwetext' => 'eine Zeichnung',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 3,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Chronologie',
        'pwetext' => 'eine Chronologie',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 4,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Diagramm',
        'pwetext' => 'ein Diagramme',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 5,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Schematische Darstellung',
        'pwetext' => 'eine schematische Darstellung',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 6,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Karte',
        'pwetext' => 'eine Karte',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 7,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Comic',
        'pwetext' => 'einen Comic',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 8,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Buchumschlag',
        'pwetext' => 'einen Buchumschlag',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 9,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Plakat',
        'pwetext' => 'ein Plakat',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 10,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Modell',
        'pwetext' => 'ein Modell',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 11,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Skulptur',
        'pwetext' => 'eine Skulptur',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 12,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Diorama',
        'pwetext' => 'ein Diorama',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 13,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Miniatur',
        'pwetext' => 'eine Miniatur',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 14,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Kunstgalerie',
        'pwetext' => 'eine Kunstgalerie',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 15,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Museumsausstellung',
        'pwetext' => 'eine Museumsausstellung',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 16,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Mobilé',
        'pwetext' => 'ein Mobilé',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 17,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Debatte',
        'pwetext' => 'eine Debatte',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 18,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Podiumsdiskussion',
        'pwetext' => 'eine Podiumsdiskussion',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 19,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Lektion',
        'pwetext' => 'eine Lektion',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 20,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Bericht',
        'pwetext' => 'einen Bericht',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 21,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Theaterstück',
        'pwetext' => 'ein Theaterstück',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 22,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => "Hörspiel",
        'pwetext' => "ein Hörspiel",
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 23,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Pressekonferenz',
        'pwetext' => 'eine Pressekonferenz',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 24,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Talkshow',
        'pwetext' => 'eine Talkshow',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 25,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Monolog',
        'pwetext' => 'einen Monolog',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 26,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Filmkritik',
        'pwetext' => 'eine Filmkritik',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 27,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Lied',
        'pwetext' => 'ein Lied',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 28,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Bildband',
        'pwetext' => 'einen Bildband',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 29,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Zeitung',
        'pwetext' => 'eine Zeitung',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 30,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Fernsehsendung',
        'pwetext' => 'eine Fernsehsendung',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 31,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'PowerPoint',
        'pwetext' => 'ein PowerPoint',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 32,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Videopoesie',
        'pwetext' => 'eine Videopoesie',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 33,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Fotoreportage',
        'pwetext' => 'eine Fotoreportage',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 34,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Videoreisebericht',
        'pwetext' => 'einen Videoreisebericht',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 35,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Nachrichtenbeitrag',
        'pwetext' => 'einen Nachrichtenbeitrag',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 36,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Webseite',
        'pwetext' => 'eine Webseite',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 37,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Aufsatz',
        'pwetext' => 'einen Aufsatz',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 38,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Antwort auf Literatur',
        'pwetext' => 'eine Antwort auf Literatur',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 39,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Rapport',
        'pwetext' => 'einen Rapport',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 40,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Artikel',
        'pwetext' => 'einen Artikel',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 41,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Überzeugender Aufsatz',
        'pwetext' => 'einen überzeugenden Aufsatz',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 42,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Serie',
        'pwetext' => 'eine Serie',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 43,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Brief',
        'pwetext' => 'einen Brief',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 44,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => "Kindergeschichte",
        'pwetext' => "eine Kindergeschichte",
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 45,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Gedicht / Chanson',
        'pwetext' => 'ein Gedicht / ein Chanson',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 46,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Nachruf',
        'pwetext' => 'einen Nachruf',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 47,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Tagebuch',
        'pwetext' => 'ein Tagebuch',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 48,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Rezension',
        'pwetext' => 'eine Rezension',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 49,
        'lang' => 'de',
        'timecreated' => $time,
        'pwetitle' => 'Geschichte in einem neuen Genre',
        'pwetext' => 'eine Geschichte in einem neuen Genre',
    ]);

    // Table local_differentiator_rwce.
    $DB->insert_record('local_differentiator_rwce', [
        'rwcid' => 1,
        'lang' => 'de',
        'timecreated' => $time,
        'rwcetitle' => 'Offline',
        'rwcetext' => 'Offline',
    ]);
    $DB->insert_record('local_differentiator_rwce', [
        'rwcid' => 2,
        'lang' => 'de',
        'timecreated' => $time,
        'rwcetitle' => 'Online',
        'rwcetext' => 'Online',
    ]);

    // Table local_differentiator_rwe.
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 1,
        'lang' => 'de',
        'timecreated' => $time,
        'rwetitle' => 'Text',
        'rwetext' => 'eines Textes',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 2,
        'lang' => 'de',
        'timecreated' => $time,
        'rwetitle' => 'Buch',
        'rwetext' => 'eines Buchs',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 3,
        'lang' => 'de',
        'timecreated' => $time,
        'rwetitle' => 'Magazin',
        'rwetext' => 'eines Magazins',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 4,
        'lang' => 'de',
        'timecreated' => $time,
        'rwetitle' => 'Zeitschrift',
        'rwetext' => 'einer Zeitschrift',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 5,
        'lang' => 'de',
        'timecreated' => $time,
        'rwetitle' => 'Interview',
        'rwetext' => 'eines Interviews',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 6,
        'lang' => 'de',
        'timecreated' => $time,
        'rwetitle' => 'Enzyklopädie',
        'rwetext' => 'einer Enzyklopädie',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 7,
        'lang' => 'de',
        'timecreated' => $time,
        'rwetitle' => 'eine/n Expert/in',
        'rwetext' => 'eine/n Expert/in',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 8,
        'lang' => 'de',
        'timecreated' => $time,
        'rwetitle' => 'Webseite',
        'rwetext' => 'einer Webseite',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 9,
        'lang' => 'de',
        'timecreated' => $time,
        'rwetitle' => 'Wikipedia',
        'rwetext' => 'von Wikipedia',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 10,
        'lang' => 'de',
        'timecreated' => $time,
        'rwetitle' => 'Online-Enzyklopädie',
        'rwetext' => 'einer Online-Enzyklopädie',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 11,
        'lang' => 'de',
        'timecreated' => $time,
        'rwetitle' => 'Online-Zeitschrift',
        'rwetext' => 'einer Online-Zeitschrift',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 12,
        'lang' => 'de',
        'timecreated' => $time,
        'rwetitle' => 'Artikel',
        'rwetext' => 'eines Artikels',
    ]);
    $DB->insert_record('local_differentiator_rwe', [
        'rwid' => 13,
        'lang' => 'de',
        'timecreated' => $time,
        'rwetitle' => 'einer/s Expert/in',
        'rwetext' => 'einer/s Expert/in',
    ]);

    // Table local_differentiator_tswce.
    $DB->insert_record('local_differentiator_tswce', [
        'tswcid' => 1,
        'lang' => 'de',
        'timecreated' => $time,
        'tswcetitle' => 'Erinnern',
        'tswcetext' => 'Erinnern',
    ]);
    $DB->insert_record('local_differentiator_tswce', [
        'tswcid' => 2,
        'lang' => 'de',
        'timecreated' => $time,
        'tswcetitle' => 'Verstehen',
        'tswcetext' => 'Verstehen',
    ]);
    $DB->insert_record('local_differentiator_tswce', [
        'tswcid' => 3,
        'lang' => 'de',
        'timecreated' => $time,
        'tswcetitle' => 'Anwenden',
        'tswcetext' => 'Anwenden',
    ]);
    $DB->insert_record('local_differentiator_tswce', [
        'tswcid' => 4,
        'lang' => 'de',
        'timecreated' => $time,
        'tswcetitle' => 'Analysieren',
        'tswcetext' => 'Analysieren',
    ]);
    $DB->insert_record('local_differentiator_tswce', [
        'tswcid' => 5,
        'lang' => 'de',
        'timecreated' => $time,
        'tswcetitle' => 'Evaluieren',
        'tswcetext' => 'Evaluieren',
    ]);
    $DB->insert_record('local_differentiator_tswce', [
        'tswcid' => 6,
        'lang' => 'de',
        'timecreated' => $time,
        'tswcetitle' => 'Kreieren',
        'tswcetext' => 'Kreieren',
    ]);

    // Table local_differentiator_tswe.
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 1,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Erinnern',
        'tswetext' => 'erinnern sich an',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 2,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Angeben',
        'tswetext' => 'geben an',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 3,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Benennen',
        'tswetext' => 'benennen',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 4,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Berichten',
        'tswetext' => 'berichten',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 5,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Auflisten',
        'tswetext' => 'listen auf',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 6,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Erklären',
        'tswetext' => 'erklären',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 7,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Definieren',
        'tswetext' => 'definieren',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 8,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Veranschaulichen',
        'tswetext' => 'veranschaulichen',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 9,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Wiedererkennen',
        'tswetext' => 'erkennen wieder',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 10,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Vergleichen',
        'tswetext' => 'vergleichen',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 11,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Darstellen',
        'tswetext' => 'stellen dar',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 12,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Erläutern',
        'tswetext' => 'erläutern',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 13,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Auswählen',
        'tswetext' => 'wählen aus',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 14,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Beschreiben',
        'tswetext' => 'beschreiben',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 15,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Einordnen',
        'tswetext' => 'ordnen ein',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 16,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Begründen',
        'tswetext' => 'Begründen',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 17,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Zusammenfassen',
        'tswetext' => 'fassen zusammen',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 18,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Unterscheiden',
        'tswetext' => 'unterscheiden',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 19,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Interpretieren',
        'tswetext' => 'interpretieren',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 20,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Lösen',
        'tswetext' => 'lösen',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 21,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Visualisieren',
        'tswetext' => 'visualisieren',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 22,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Präsentieren',
        'tswetext' => 'präsentieren',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 23,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Messen',
        'tswetext' => 'messen',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 24,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Entwerfen',
        'tswetext' => 'entwerfen',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 25,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Umsetzen',
        'tswetext' => 'setzen um',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 26,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Berechnen',
        'tswetext' => 'berechnen',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 27,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Ausführen',
        'tswetext' => 'führen aus',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 28,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Überprüfen',
        'tswetext' => 'überprüfen',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 29,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Hinterfragen',
        'tswetext' => 'hinterfragen',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 30,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Bewerten',
        'tswetext' => 'bewerten',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 31,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Gegenüberstellen',
        'tswetext' => 'stellen gegenüber',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 32,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Kritisieren',
        'tswetext' => 'kritisieren',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 33,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Analysieren',
        'tswetext' => 'analysieren',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 34,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Diagnostizieren',
        'tswetext' => 'diagnostizieren',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 35,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Reflektieren',
        'tswetext' => 'reflektieren',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 36,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Ableiten',
        'tswetext' => 'ableiten',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 37,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Auswählen',
        'tswetext' => 'wählen aus',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 38,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Vorschlagen',
        'tswetext' => 'vorschlagen',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 39,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Beurteilen',
        'tswetext' => 'beurteilen',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 40,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Evaluieren',
        'tswetext' => 'evaluieren',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 41,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Entscheiden',
        'tswetext' => 'entscheiden',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 42,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Rechtfertigen',
        'tswetext' => 'rechtfertigen',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 43,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Auswerten',
        'tswetext' => 'werten aus',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 44,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Zusammensetzen',
        'tswetext' => 'setzen zusammen',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 45,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Konzipieren',
        'tswetext' => 'konzipieren',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 46,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Erweitern',
        'tswetext' => 'erweitern',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 47,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Entwickeln',
        'tswetext' => 'entwickeln',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 48,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Designen',
        'tswetext' => 'designen',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 49,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Kreieren',
        'tswetext' => 'kreieren',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 50,
        'lang' => 'de',
        'timecreated' => $time,
        'tswetitle' => 'Konstruieren',
        'tswetext' => 'konstruieren',
    ]);
}
