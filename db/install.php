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
    'id' => 1,
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
    for ($i = 1; $i <= 12; $i++) {
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
        'pwetitle' => 'Response To Literature',
        'pwetext' => 'a response to literature',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 38,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Report',
        'pwetext' => 'a report',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 39,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Article',
        'pwetext' => 'an article',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 40,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Persuasive Essay',
        'pwetext' => 'a persuasive essay',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 41,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Sequel',
        'pwetext' => 'a sequel',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 42,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Letter',
        'pwetext' => 'a letter',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 43,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => "Children's Story",
        'pwetext' => "a children's story",
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 44,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Poem / Song',
        'pwetext' => 'a poem / song',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 45,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Eulogy',
        'pwetext' => 'a eulogy',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 46,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Diary',
        'pwetext' => 'a diary',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 47,
        'lang' => 'en',
        'timecreated' => $time,
        'pwetitle' => 'Review',
        'pwetext' => 'a review',
    ]);
    $DB->insert_record('local_differentiator_pwe', [
        'pwid' => 48,
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
    for ($i = 1; $i <= 6; $i++) {
        $DB->insert_record('local_differentiator_tsw', [
            'tswcid' => 1,
            'sort' => $i,
            'timecreated' => $time,
        ]);
    }
    for ($i = 1; $i <= 11; $i++) {
        $DB->insert_record('local_differentiator_tsw', [
            'tswcid' => 2,
            'sort' => $i,
            'timecreated' => $time,
        ]);
    }
    for ($i = 1; $i <= 11; $i++) {
        $DB->insert_record('local_differentiator_tsw', [
            'tswcid' => 3,
            'sort' => $i,
            'timecreated' => $time,
        ]);
    }
    for ($i = 1; $i <= 11; $i++) {
        $DB->insert_record('local_differentiator_tsw', [
            'tswcid' => 4,
            'sort' => $i,
            'timecreated' => $time,
        ]);
    }
    for ($i = 1; $i <= 9; $i++) {
        $DB->insert_record('local_differentiator_tsw', [
            'tswcid' => 5,
            'sort' => $i,
            'timecreated' => $time,
        ]);
    }
    for ($i = 1; $i <= 7; $i++) {
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
        'tswetitle' => 'List',
        'tswetext' => 'list the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 3,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Define',
        'tswetext' => 'define the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 4,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'State',
        'tswetext' => 'state the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 5,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Repeat',
        'tswetext' => 'repeat the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 6,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Duplicate',
        'tswetext' => 'duplicate the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 7,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Classify',
        'tswetext' => 'classify the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 8,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Describe',
        'tswetext' => 'describe the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 9,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Discuss',
        'tswetext' => 'discuss the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 10,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Explain',
        'tswetext' => 'explain the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 11,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Identify',
        'tswetext' => 'identify the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 12,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Locate',
        'tswetext' => 'locate the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 13,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Recognize',
        'tswetext' => 'recognize the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 14,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Report',
        'tswetext' => 'report the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 15,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Select',
        'tswetext' => 'select the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 16,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Translate',
        'tswetext' => 'translate the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 17,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Paraphrase',
        'tswetext' => 'paraphrase the ',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 18,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Choose',
        'tswetext' => 'choose the ',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 19,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Demonstrate',
        'tswetext' => 'demonstrate the ',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 20,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Dramatize',
        'tswetext' => 'dramatize the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 21,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Employ',
        'tswetext' => 'employ the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 22,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Illustrate',
        'tswetext' => 'illustrate the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 23,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Interpret',
        'tswetext' => 'interpret the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 24,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Operate',
        'tswetext' => 'operate the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 25,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Sketch',
        'tswetext' => 'sketch the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 26,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Solve',
        'tswetext' => 'solve the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 27,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Use',
        'tswetext' => 'use the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 28,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Schedule',
        'tswetext' => 'schedule the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 29,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Appraise',
        'tswetext' => 'appraise the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 30,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Compare',
        'tswetext' => 'compare the',
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
        'tswetitle' => 'Differentiate',
        'tswetext' => 'differentiate the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 34,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Discriminate',
        'tswetext' => 'discriminate the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 35,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Distinguish',
        'tswetext' => 'distinguish the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 36,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Examine',
        'tswetext' => 'examine the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 37,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Experiment',
        'tswetext' => 'experiment the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 38,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Question',
        'tswetext' => 'question the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 39,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Test',
        'tswetext' => 'test the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 40,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Appraise',
        'tswetext' => 'appraise the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 41,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Argue',
        'tswetext' => 'argue the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 42,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Contrast',
        'tswetext' => 'contrast the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 43,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Defend',
        'tswetext' => 'defend the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 44,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Judge',
        'tswetext' => 'judge the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 45,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Select',
        'tswetext' => 'select the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 46,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Support',
        'tswetext' => 'support the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 47,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Value',
        'tswetext' => 'value the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 48,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Evaluate',
        'tswetext' => 'evaluate the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 49,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Assemble',
        'tswetext' => 'assemble the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 50,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Construct',
        'tswetext' => 'construct the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 51,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Create',
        'tswetext' => 'create the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 52,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Design',
        'tswetext' => 'design the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 53,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Develop',
        'tswetext' => 'develop the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 54,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Formulate',
        'tswetext' => 'formulate the',
    ]);
    $DB->insert_record('local_differentiator_tswe', [
        'tswid' => 55,
        'lang' => 'en',
        'timecreated' => $time,
        'tswetitle' => 'Write',
        'tswetext' => 'write the',
    ]);
}
