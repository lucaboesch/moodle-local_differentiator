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
 * This file keeps track of upgrades to local_differentiator.
 *
 * @package     local_differentiator
 * @category    access
 * @copyright   2019 Luca Bösch <luca.boesch@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();


/**
 * Upgrade code for local_differentiator.
 *
 * @param int $oldversion the version we are upgrading from.
 */
function xmldb_local_differentiator_upgrade($oldversion = 0) {
    global $CFG, $DB;

    $dbman = $DB->get_manager();

    if ($oldversion < 2019122300) {

        $time = time();

        // Español.

        // Table local_differentiator_cwce.
        $DB->insert_record('local_differentiator_cwce', [
            'cwcid' => 1,
            'lang' => 'es',
            'timecreated' => $time,
            'cwcetitle' => 'Profundidad',
            'cwcetext' => 'Profundidad',
        ]);
        $DB->insert_record('local_differentiator_cwce', [
            'cwcid' => 2,
            'lang' => 'es',
            'timecreated' => $time,
            'cwcetitle' => 'Complejidad',
            'cwcetext' => 'Complejidad',
        ]);
        $DB->insert_record('local_differentiator_cwce', [
            'cwcid' => 3,
            'lang' => 'es',
            'timecreated' => $time,
            'cwcetitle' => 'Imperativos',
            'cwcetext' => 'Imperativos',
        ]);
        $DB->insert_record('local_differentiator_cwce', [
            'cwcid' => 4,
            'lang' => 'es',
            'timecreated' => $time,
            'cwcetitle' => 'Palabras clave',
            'cwcetext' => 'Palabras clave',
        ]);

        // Table local_differentiator_cwe.
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 1,
            'lang' => 'es',
            'timecreated' => $time,
            'cwetitle' => 'Cuadro completo',
            'cwetext' => 'el cuadro completo',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 2,
            'lang' => 'es',
            'timecreated' => $time,
            'cwetitle' => 'Preguntas sin responder',
            'cwetext' => 'las preguntas sin responder',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 3,
            'lang' => 'es',
            'timecreated' => $time,
            'cwetitle' => 'Ética',
            'cwetext' => 'la ética',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 4,
            'lang' => 'es',
            'timecreated' => $time,
            'cwetitle' => 'Patrones',
            'cwetext' => 'los patrones',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 5,
            'lang' => 'es',
            'timecreated' => $time,
            'cwetitle' => 'Reglas',
            'cwetext' => 'las reglas',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 6,
            'lang' => 'es',
            'timecreated' => $time,
            'cwetitle' => 'Terminología específica',
            'cwetext' => 'la terminología específica',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 7,
            'lang' => 'es',
            'timecreated' => $time,
            'cwetitle' => 'Detalles esenciales',
            'cwetext' => 'los detalles esenciales',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 8,
            'lang' => 'es',
            'timecreated' => $time,
            'cwetitle' => 'Tendencias',
            'cwetext' => 'las tendencias',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 9,
            'lang' => 'es',
            'timecreated' => $time,
            'cwetitle' => 'Puntos de vista diferentes',
            'cwetext' => 'los puntos de vista diferentes',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 10,
            'lang' => 'es',
            'timecreated' => $time,
            'cwetitle' => 'Cambios con el tiempo',
            'cwetext' => 'los cambios con el tiempo',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 11,
            'lang' => 'es',
            'timecreated' => $time,
            'cwetitle' => 'Interdisciplinariedad',
            'cwetext' => 'la interdisciplinariedad',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 12,
            'lang' => 'es',
            'timecreated' => $time,
            'cwetitle' => 'Orígen',
            'cwetext' => 'el orígen',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 13,
            'lang' => 'es',
            'timecreated' => $time,
            'cwetitle' => 'Convergencia',
            'cwetext' => 'la convergencia',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 14,
            'lang' => 'es',
            'timecreated' => $time,
            'cwetitle' => 'Paralelismos',
            'cwetext' => 'los paralelismos',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 15,
            'lang' => 'es',
            'timecreated' => $time,
            'cwetitle' => 'Paradoja',
            'cwetext' => 'la paradoja',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 16,
            'lang' => 'es',
            'timecreated' => $time,
            'cwetitle' => 'Contribución',
            'cwetext' => 'la contribución',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 17,
            'lang' => 'es',
            'timecreated' => $time,
            'cwetitle' => 'Consecuencias',
            'cwetext' => 'las consecuencias',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 18,
            'lang' => 'es',
            'timecreated' => $time,
            'cwetitle' => 'Motivaciones',
            'cwetext' => 'las motivaciones',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 19,
            'lang' => 'es',
            'timecreated' => $time,
            'cwetitle' => 'Implicaciones',
            'cwetext' => 'las implicaciones',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 20,
            'lang' => 'es',
            'timecreated' => $time,
            'cwetitle' => 'Significado',
            'cwetext' => 'el significado',
        ]);

        // Table local_differentiator_gwce.
        $DB->insert_record('local_differentiator_gwce', [
            'gwcid' => 1,
            'lang' => 'es',
            'timecreated' => $time,
            'gwcetitle' => 'Tamaño del grupo',
            'gwcetext' => 'Tamaño del grupo',
        ]);

        // Table local_differentiator_gwe.
        $DB->insert_record('local_differentiator_gwe', [
            'gwid' => 1,
            'lang' => 'es',
            'timecreated' => $time,
            'gwetitle' => 'Uno',
            'gwetext' => 'uno',
        ]);
        $DB->insert_record('local_differentiator_gwe', [
            'gwid' => 2,
            'lang' => 'es',
            'timecreated' => $time,
            'gwetitle' => 'Dos',
            'gwetext' => 'dos',
        ]);
        $DB->insert_record('local_differentiator_gwe', [
            'gwid' => 3,
            'lang' => 'es',
            'timecreated' => $time,
            'gwetitle' => 'Tres',
            'gwetext' => 'tres',
        ]);
        $DB->insert_record('local_differentiator_gwe', [
            'gwid' => 4,
            'lang' => 'es',
            'timecreated' => $time,
            'gwetitle' => 'Cuatro',
            'gwetext' => 'cuatro',
        ]);

        // Table local_differentiator_pwce.
        $DB->insert_record('local_differentiator_pwce', [
            'pwcid' => 1,
            'lang' => 'es',
            'timecreated' => $time,
            'pwcetitle' => 'Visual',
            'pwcetext' => 'Visual',
        ]);
        $DB->insert_record('local_differentiator_pwce', [
            'pwcid' => 2,
            'lang' => 'es',
            'timecreated' => $time,
            'pwcetitle' => 'Construcción',
            'pwcetext' => 'Construcción',
        ]);
        $DB->insert_record('local_differentiator_pwce', [
            'pwcid' => 3,
            'lang' => 'es',
            'timecreated' => $time,
            'pwcetitle' => 'Oral',
            'pwcetext' => 'Oral',
        ]);
        $DB->insert_record('local_differentiator_pwce', [
            'pwcid' => 4,
            'lang' => 'es',
            'timecreated' => $time,
            'pwcetitle' => 'Multimedia',
            'pwcetext' => 'Multimedia',
        ]);
        $DB->insert_record('local_differentiator_pwce', [
            'pwcid' => 5,
            'lang' => 'es',
            'timecreated' => $time,
            'pwcetitle' => 'Escrito',
            'pwcetext' => 'Escrito',
        ]);

        // Table local_differentiator_pwe.
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 1,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Gráfica',
            'pwetext' => 'una gráfica',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 2,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Dibujo',
            'pwetext' => 'un dibujo',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 3,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Cronología',
            'pwetext' => 'una cronología',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 4,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Diagrama',
            'pwetext' => 'un diagrama',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 5,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Representación gráfica',
            'pwetext' => 'una representación gráfica',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 6,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Mapa',
            'pwetext' => 'un mapa',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 7,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Comic',
            'pwetext' => 'un comic',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 8,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Portada de libro',
            'pwetext' => 'una portada de libro',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 9,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Poster',
            'pwetext' => 'un poster',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 10,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Modelo',
            'pwetext' => 'un modelo',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 11,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Escultura',
            'pwetext' => 'una escultura',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 12,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Diorama',
            'pwetext' => 'un diorama',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 13,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Miniatura',
            'pwetext' => 'una miniatura',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 14,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Galería artística',
            'pwetext' => 'una galería artística',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 15,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Exposición museográfica',
            'pwetext' => 'una exposición museográfica',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 16,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Móvil',
            'pwetext' => 'un móvil',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 17,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Debate',
            'pwetext' => 'un debate',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 18,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Panel de discusión',
            'pwetext' => 'un panel de discusión',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 19,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Lección',
            'pwetext' => 'una lección',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 20,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Reporte',
            'pwetext' => 'un reporte',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 21,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Pieza teatral',
            'pwetext' => 'una pieza teatral',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 22,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Pieza radiofónica',
            'pwetext' => 'una pieza radiofónica',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 23,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Conferencia de prensa',
            'pwetext' => 'una conferencia de prensa',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 24,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Programa de entrevistas',
            'pwetext' => 'un programa de entrevistas',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 25,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Monólogo',
            'pwetext' => 'un monólogo',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 26,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Crítica cinematográfica',
            'pwetext' => 'una crítica cinematográfica',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 27,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Canción',
            'pwetext' => 'una canción',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 28,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Libro ilustrado',
            'pwetext' => 'un libro ilustrado',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 29,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Periódico',
            'pwetext' => 'un periódico',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 30,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Transmisión televisiva',
            'pwetext' => 'una transmisión televisiva',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 31,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Powerpoint',
            'pwetext' => 'un powerpoint',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 32,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Video poesía',
            'pwetext' => 'una video poesía',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 33,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Fotoreportaje',
            'pwetext' => 'un fotoreportaje',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 34,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Video de viaje',
            'pwetext' => 'un video de viaje',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 35,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Reporte noticioso',
            'pwetext' => 'un reporte noticioso',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 36,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Página web',
            'pwetext' => 'una página web',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 37,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Ensayo',
            'pwetext' => 'un ensayo',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 38,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Análisis literario',
            'pwetext' => 'un análisis literario',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 39,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Reportaje',
            'pwetext' => 'un reportaje',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 40,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Artículo',
            'pwetext' => 'un artículo',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 41,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Ensayo convincente',
            'pwetext' => 'un ensayo convincente',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 42,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Secuela',
            'pwetext' => 'una secuela',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 43,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Carta',
            'pwetext' => 'una carta',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 44,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Historia infantil',
            'pwetext' => 'una historia infantil',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 45,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Poema / Canción',
            'pwetext' => 'un poema / una canción',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 46,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Elogio',
            'pwetext' => 'un elogio',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 47,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Diario',
            'pwetext' => 'un diario',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 48,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Revisión',
            'pwetext' => 'una revisión',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 49,
            'lang' => 'es',
            'timecreated' => $time,
            'pwetitle' => 'Historia en un nuevo género',
            'pwetext' => 'una historia en un nuevo género',
        ]);

        // Table local_differentiator_rwce.
        $DB->insert_record('local_differentiator_rwce', [
            'rwcid' => 1,
            'lang' => 'es',
            'timecreated' => $time,
            'rwcetitle' => 'Fuera de línea',
            'rwcetext' => 'Fuera de línea',
        ]);
        $DB->insert_record('local_differentiator_rwce', [
            'rwcid' => 2,
            'lang' => 'es',
            'timecreated' => $time,
            'rwcetitle' => 'En línea',
            'rwcetext' => 'En línea',
        ]);

        // Table local_differentiator_rwe.
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 1,
            'lang' => 'es',
            'timecreated' => $time,
            'rwetitle' => 'Texto',
            'rwetext' => 'un texto',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 2,
            'lang' => 'es',
            'timecreated' => $time,
            'rwetitle' => 'Libro',
            'rwetext' => 'un libro',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 3,
            'lang' => 'es',
            'timecreated' => $time,
            'rwetitle' => 'Revista',
            'rwetext' => 'una revista',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 4,
            'lang' => 'es',
            'timecreated' => $time,
            'rwetitle' => 'Periódico',
            'rwetext' => 'un periódico',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 5,
            'lang' => 'es',
            'timecreated' => $time,
            'rwetitle' => 'Entrevista',
            'rwetext' => 'una entrevista',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 6,
            'lang' => 'es',
            'timecreated' => $time,
            'rwetitle' => 'Enciclopedia',
            'rwetext' => 'una enciclopedia',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 7,
            'lang' => 'es',
            'timecreated' => $time,
            'rwetitle' => 'Experto',
            'rwetext' => 'un experto',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 8,
            'lang' => 'es',
            'timecreated' => $time,
            'rwetitle' => 'Sitio web',
            'rwetext' => 'un sitio web',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 9,
            'lang' => 'es',
            'timecreated' => $time,
            'rwetitle' => 'Wikipedia',
            'rwetext' => 'Wikipedia',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 10,
            'lang' => 'es',
            'timecreated' => $time,
            'rwetitle' => 'Enciclopedia en línea',
            'rwetext' => 'una enciclopedia en línea',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 11,
            'lang' => 'es',
            'timecreated' => $time,
            'rwetitle' => 'Periódico en línea',
            'rwetext' => 'un periódico en línea',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 12,
            'lang' => 'es',
            'timecreated' => $time,
            'rwetitle' => 'Artículo',
            'rwetext' => 'un artículo',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 13,
            'lang' => 'es',
            'timecreated' => $time,
            'rwetitle' => 'Experto',
            'rwetext' => 'un experto / una experta',
        ]);

        // Table local_differentiator_tswce.
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 1,
            'lang' => 'es',
            'timecreated' => $time,
            'tswcetitle' => 'Recordar',
            'tswcetext' => 'Recordar',
        ]);
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 2,
            'lang' => 'es',
            'timecreated' => $time,
            'tswcetitle' => 'Comprender',
            'tswcetext' => 'Comprender',
        ]);
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 3,
            'lang' => 'es',
            'timecreated' => $time,
            'tswcetitle' => 'Aplicar',
            'tswcetext' => 'Aplicar',
        ]);
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 4,
            'lang' => 'es',
            'timecreated' => $time,
            'tswcetitle' => 'Analizar',
            'tswcetext' => 'Analizar',
        ]);
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 5,
            'lang' => 'es',
            'timecreated' => $time,
            'tswcetitle' => 'Evaluar',
            'tswcetext' => 'Evaluar',
        ]);
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 6,
            'lang' => 'es',
            'timecreated' => $time,
            'tswcetitle' => 'Crear',
            'tswcetext' => 'Crear',
        ]);

        // Table local_differentiator_tswe.
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 1,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Recordar',
            'tswetext' => 'recordar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 2,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Repetir',
            'tswetext' => 'repetir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 3,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Nombrar',
            'tswetext' => 'nombrar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 4,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Referir',
            'tswetext' => 'referir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 5,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Listar',
            'tswetext' => 'listar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 6,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Explicar',
            'tswetext' => 'explicar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 7,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Definir',
            'tswetext' => 'definir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 8,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Ilustrar',
            'tswetext' => 'ilustrar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 9,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Reconocer',
            'tswetext' => 'reconocer',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 10,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Comparar',
            'tswetext' => 'comparar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 11,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Demostrar',
            'tswetext' => 'demostrar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 12,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Elucidar',
            'tswetext' => 'elucidar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 13,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Elegir',
            'tswetext' => 'elegir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 14,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Describir',
            'tswetext' => 'describir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 15,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Clasificar',
            'tswetext' => 'clasificar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 16,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Probar',
            'tswetext' => 'probar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 17,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Resumir',
            'tswetext' => 'resumir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 18,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Distinguir',
            'tswetext' => 'distinguir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 19,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Interpretar',
            'tswetext' => 'interpretar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 20,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Resolver',
            'tswetext' => 'resolver',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 21,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Visualizar',
            'tswetext' => 'visualizar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 22,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Juzgar',
            'tswetext' => 'juzgar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 23,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Medir',
            'tswetext' => 'medir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 24,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Delinear',
            'tswetext' => 'delinear',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 25,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Implementar',
            'tswetext' => 'implementar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 26,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Calcular',
            'tswetext' => 'calcular',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 27,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Ejecutar',
            'tswetext' => 'ejecutar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 28,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Verificar',
            'tswetext' => 'verificar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 29,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Preguntar',
            'tswetext' => 'preguntar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 30,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Presentar',
            'tswetext' => 'presentar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 31,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Contrastar',
            'tswetext' => 'contrastar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 32,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Criticar',
            'tswetext' => 'criticar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 33,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Analizar',
            'tswetext' => 'analizar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 34,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Diagnosticar',
            'tswetext' => 'diagnosticar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 35,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Reflexionar',
            'tswetext' => 'reflexionar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 36,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Deducir',
            'tswetext' => 'deducir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 37,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Seleccionar',
            'tswetext' => 'seleccionar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 38,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Sugerir',
            'tswetext' => 'sugerir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 39,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Valorar',
            'tswetext' => 'valorar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 40,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Evaluar',
            'tswetext' => 'evaluar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 41,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Decidir',
            'tswetext' => 'decidir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 42,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Justificar',
            'tswetext' => 'justificar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 43,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Apreciar',
            'tswetext' => 'apreciar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 44,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Ensamblar',
            'tswetext' => 'ensamblar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 45,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Concebir',
            'tswetext' => 'concebir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 46,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Ampliar',
            'tswetext' => 'ampliar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 47,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Desarrollar',
            'tswetext' => 'desarrollar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 48,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Diseñar',
            'tswetext' => 'diseñar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 49,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Crear',
            'tswetext' => 'crear',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 50,
            'lang' => 'es',
            'timecreated' => $time,
            'tswetitle' => 'Construir',
            'tswetext' => 'construir',
        ]);

        // Español - Mexico.

        // Table local_differentiator_cwce.
        $DB->insert_record('local_differentiator_cwce', [
            'cwcid' => 1,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'cwcetitle' => 'Profundidad',
            'cwcetext' => 'Profundidad',
        ]);
        $DB->insert_record('local_differentiator_cwce', [
            'cwcid' => 2,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'cwcetitle' => 'Complejidad',
            'cwcetext' => 'Complejidad',
        ]);
        $DB->insert_record('local_differentiator_cwce', [
            'cwcid' => 3,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'cwcetitle' => 'Imperativos',
            'cwcetext' => 'Imperativos',
        ]);
        $DB->insert_record('local_differentiator_cwce', [
            'cwcid' => 4,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'cwcetitle' => 'Palabras clave',
            'cwcetext' => 'Palabras clave',
        ]);

        // Table local_differentiator_cwe.
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 1,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'cwetitle' => 'Cuadro completo',
            'cwetext' => 'el cuadro completo',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 2,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'cwetitle' => 'Preguntas sin responder',
            'cwetext' => 'las preguntas sin responder',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 3,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'cwetitle' => 'Ética',
            'cwetext' => 'la ética',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 4,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'cwetitle' => 'Patrones',
            'cwetext' => 'los patrones',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 5,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'cwetitle' => 'Reglas',
            'cwetext' => 'las reglas',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 6,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'cwetitle' => 'Terminología específica',
            'cwetext' => 'la terminología específica',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 7,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'cwetitle' => 'Detalles esenciales',
            'cwetext' => 'los detalles esenciales',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 8,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'cwetitle' => 'Tendencias',
            'cwetext' => 'las tendencias',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 9,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'cwetitle' => 'Puntos de vista diferentes',
            'cwetext' => 'los puntos de vista diferentes',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 10,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'cwetitle' => 'Cambios con el tiempo',
            'cwetext' => 'los cambios con el tiempo',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 11,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'cwetitle' => 'Interdisciplinariedad',
            'cwetext' => 'la interdisciplinariedad',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 12,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'cwetitle' => 'Orígen',
            'cwetext' => 'el orígen',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 13,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'cwetitle' => 'Convergencia',
            'cwetext' => 'la convergencia',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 14,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'cwetitle' => 'Paralelismos',
            'cwetext' => 'los paralelismos',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 15,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'cwetitle' => 'Paradoja',
            'cwetext' => 'la paradoja',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 16,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'cwetitle' => 'Contribución',
            'cwetext' => 'la contribución',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 17,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'cwetitle' => 'Consecuencias',
            'cwetext' => 'las consecuencias',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 18,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'cwetitle' => 'Motivaciones',
            'cwetext' => 'las motivaciones',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 19,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'cwetitle' => 'Implicaciones',
            'cwetext' => 'las implicaciones',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 20,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'cwetitle' => 'Significado',
            'cwetext' => 'el significado',
        ]);

        // Table local_differentiator_gwce.
        $DB->insert_record('local_differentiator_gwce', [
            'gwcid' => 1,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'gwcetitle' => 'Tamaño del grupo',
            'gwcetext' => 'Tamaño del grupo',
        ]);

        // Table local_differentiator_gwe.
        $DB->insert_record('local_differentiator_gwe', [
            'gwid' => 1,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'gwetitle' => 'Uno',
            'gwetext' => 'uno',
        ]);
        $DB->insert_record('local_differentiator_gwe', [
            'gwid' => 2,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'gwetitle' => 'Dos',
            'gwetext' => 'dos',
        ]);
        $DB->insert_record('local_differentiator_gwe', [
            'gwid' => 3,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'gwetitle' => 'Tres',
            'gwetext' => 'tres',
        ]);
        $DB->insert_record('local_differentiator_gwe', [
            'gwid' => 4,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'gwetitle' => 'Cuatro',
            'gwetext' => 'cuatro',
        ]);

        // Table local_differentiator_pwce.
        $DB->insert_record('local_differentiator_pwce', [
            'pwcid' => 1,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwcetitle' => 'Visual',
            'pwcetext' => 'Visual',
        ]);
        $DB->insert_record('local_differentiator_pwce', [
            'pwcid' => 2,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwcetitle' => 'Construcción',
            'pwcetext' => 'Construcción',
        ]);
        $DB->insert_record('local_differentiator_pwce', [
            'pwcid' => 3,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwcetitle' => 'Oral',
            'pwcetext' => 'Oral',
        ]);
        $DB->insert_record('local_differentiator_pwce', [
            'pwcid' => 4,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwcetitle' => 'Multimedia',
            'pwcetext' => 'Multimedia',
        ]);
        $DB->insert_record('local_differentiator_pwce', [
            'pwcid' => 5,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwcetitle' => 'Escrito',
            'pwcetext' => 'Escrito',
        ]);

        // Table local_differentiator_pwe.
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 1,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Gráfica',
            'pwetext' => 'una gráfica',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 2,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Dibujo',
            'pwetext' => 'un dibujo',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 3,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Cronología',
            'pwetext' => 'una cronología',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 4,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Diagrama',
            'pwetext' => 'un diagrama',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 5,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Representación gráfica',
            'pwetext' => 'una representación gráfica',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 6,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Mapa',
            'pwetext' => 'un mapa',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 7,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Comic',
            'pwetext' => 'un comic',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 8,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Portada de libro',
            'pwetext' => 'una portada de libro',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 9,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Poster',
            'pwetext' => 'un poster',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 10,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Modelo',
            'pwetext' => 'un modelo',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 11,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Escultura',
            'pwetext' => 'una escultura',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 12,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Diorama',
            'pwetext' => 'un diorama',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 13,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Miniatura',
            'pwetext' => 'una miniatura',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 14,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Galería artística',
            'pwetext' => 'una galería artística',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 15,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Exposición museográfica',
            'pwetext' => 'una exposición museográfica',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 16,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Móvil',
            'pwetext' => 'un móvil',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 17,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Debate',
            'pwetext' => 'un debate',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 18,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Panel de discusión',
            'pwetext' => 'un panel de discusión',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 19,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Lección',
            'pwetext' => 'una lección',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 20,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Reporte',
            'pwetext' => 'un reporte',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 21,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Pieza teatral',
            'pwetext' => 'una pieza teatral',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 22,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Pieza radiofónica',
            'pwetext' => 'una pieza radiofónica',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 23,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Conferencia de prensa',
            'pwetext' => 'una conferencia de prensa',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 24,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Programa de entrevistas',
            'pwetext' => 'un programa de entrevistas',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 25,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Monólogo',
            'pwetext' => 'un monólogo',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 26,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Crítica cinematográfica',
            'pwetext' => 'una crítica cinematográfica',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 27,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Canción',
            'pwetext' => 'una canción',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 28,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Libro ilustrado',
            'pwetext' => 'un libro ilustrado',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 29,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Periódico',
            'pwetext' => 'un periódico',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 30,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Transmisión televisiva',
            'pwetext' => 'una transmisión televisiva',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 31,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Powerpoint',
            'pwetext' => 'un powerpoint',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 32,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Video poesía',
            'pwetext' => 'una video poesía',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 33,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Fotoreportaje',
            'pwetext' => 'un fotoreportaje',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 34,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Video de viaje',
            'pwetext' => 'un video de viaje',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 35,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Reporte noticioso',
            'pwetext' => 'un reporte noticioso',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 36,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Página web',
            'pwetext' => 'una página web',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 37,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Ensayo',
            'pwetext' => 'un ensayo',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 38,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Análisis literario',
            'pwetext' => 'un análisis literario',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 39,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Reportaje',
            'pwetext' => 'un reportaje',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 40,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Artículo',
            'pwetext' => 'un artículo',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 41,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Ensayo convincente',
            'pwetext' => 'un ensayo convincente',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 42,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Secuela',
            'pwetext' => 'una secuela',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 43,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Carta',
            'pwetext' => 'una carta',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 44,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Historia infantil',
            'pwetext' => 'una historia infantil',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 45,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Poema / Canción',
            'pwetext' => 'un poema / una canción',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 46,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Elogio',
            'pwetext' => 'un elogio',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 47,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Diario',
            'pwetext' => 'un diario',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 48,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Revisión',
            'pwetext' => 'una revisión',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 49,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'pwetitle' => 'Historia en un nuevo género',
            'pwetext' => 'una historia en un nuevo género',
        ]);

        // Table local_differentiator_rwce.
        $DB->insert_record('local_differentiator_rwce', [
            'rwcid' => 1,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'rwcetitle' => 'Fuera de línea',
            'rwcetext' => 'Fuera de línea',
        ]);
        $DB->insert_record('local_differentiator_rwce', [
            'rwcid' => 2,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'rwcetitle' => 'En línea',
            'rwcetext' => 'En línea',
        ]);

        // Table local_differentiator_rwe.
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 1,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'rwetitle' => 'Texto',
            'rwetext' => 'un texto',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 2,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'rwetitle' => 'Libro',
            'rwetext' => 'un libro',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 3,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'rwetitle' => 'Revista',
            'rwetext' => 'una revista',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 4,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'rwetitle' => 'Periódico',
            'rwetext' => 'un periódico',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 5,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'rwetitle' => 'Entrevista',
            'rwetext' => 'una entrevista',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 6,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'rwetitle' => 'Enciclopedia',
            'rwetext' => 'una enciclopedia',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 7,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'rwetitle' => 'Experto',
            'rwetext' => 'un experto',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 8,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'rwetitle' => 'Sitio web',
            'rwetext' => 'un sitio web',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 9,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'rwetitle' => 'Wikipedia',
            'rwetext' => 'Wikipedia',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 10,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'rwetitle' => 'Enciclopedia en línea',
            'rwetext' => 'una enciclopedia en línea',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 11,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'rwetitle' => 'Periódico en línea',
            'rwetext' => 'un periódico en línea',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 12,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'rwetitle' => 'Artículo',
            'rwetext' => 'un artículo',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 13,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'rwetitle' => 'Experto',
            'rwetext' => 'un experto / una experta',
        ]);

        // Table local_differentiator_tswce.
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 1,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswcetitle' => 'Recordar',
            'tswcetext' => 'Recordar',
        ]);
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 2,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswcetitle' => 'Comprender',
            'tswcetext' => 'Comprender',
        ]);
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 3,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswcetitle' => 'Aplicar',
            'tswcetext' => 'Aplicar',
        ]);
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 4,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswcetitle' => 'Analizar',
            'tswcetext' => 'Analizar',
        ]);
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 5,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswcetitle' => 'Evaluar',
            'tswcetext' => 'Evaluar',
        ]);
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 6,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswcetitle' => 'Crear',
            'tswcetext' => 'Crear',
        ]);

        // Table local_differentiator_tswe.
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 1,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Recordar',
            'tswetext' => 'recordar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 2,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Repetir',
            'tswetext' => 'repetir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 3,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Nombrar',
            'tswetext' => 'nombrar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 4,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Referir',
            'tswetext' => 'referir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 5,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Listar',
            'tswetext' => 'listar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 6,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Explicar',
            'tswetext' => 'explicar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 7,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Definir',
            'tswetext' => 'definir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 8,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Ilustrar',
            'tswetext' => 'ilustrar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 9,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Reconocer',
            'tswetext' => 'reconocer',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 10,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Comparar',
            'tswetext' => 'comparar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 11,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Demostrar',
            'tswetext' => 'demostrar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 12,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Elucidar',
            'tswetext' => 'elucidar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 13,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Elegir',
            'tswetext' => 'elegir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 14,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Describir',
            'tswetext' => 'describir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 15,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Clasificar',
            'tswetext' => 'clasificar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 16,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Probar',
            'tswetext' => 'probar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 17,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Resumir',
            'tswetext' => 'resumir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 18,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Distinguir',
            'tswetext' => 'distinguir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 19,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Interpretar',
            'tswetext' => 'interpretar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 20,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Resolver',
            'tswetext' => 'resolver',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 21,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Visualizar',
            'tswetext' => 'visualizar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 22,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Juzgar',
            'tswetext' => 'juzgar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 23,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Medir',
            'tswetext' => 'medir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 24,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Delinear',
            'tswetext' => 'delinear',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 25,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Implementar',
            'tswetext' => 'implementar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 26,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Calcular',
            'tswetext' => 'calcular',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 27,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Ejecutar',
            'tswetext' => 'ejecutar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 28,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Verificar',
            'tswetext' => 'verificar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 29,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Preguntar',
            'tswetext' => 'preguntar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 30,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Presentar',
            'tswetext' => 'presentar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 31,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Contrastar',
            'tswetext' => 'contrastar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 32,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Criticar',
            'tswetext' => 'criticar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 33,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Analizar',
            'tswetext' => 'analizar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 34,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Diagnosticar',
            'tswetext' => 'diagnosticar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 35,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Reflexionar',
            'tswetext' => 'reflexionar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 36,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Deducir',
            'tswetext' => 'deducir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 37,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Seleccionar',
            'tswetext' => 'seleccionar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 38,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Sugerir',
            'tswetext' => 'sugerir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 39,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Valorar',
            'tswetext' => 'valorar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 40,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Evaluar',
            'tswetext' => 'evaluar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 41,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Decidir',
            'tswetext' => 'decidir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 42,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Justificar',
            'tswetext' => 'justificar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 43,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Apreciar',
            'tswetext' => 'apreciar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 44,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Ensamblar',
            'tswetext' => 'ensamblar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 45,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Concebir',
            'tswetext' => 'concebir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 46,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Ampliar',
            'tswetext' => 'ampliar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 47,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Desarrollar',
            'tswetext' => 'desarrollar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 48,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Diseñar',
            'tswetext' => 'diseñar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 49,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Crear',
            'tswetext' => 'crear',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 50,
            'lang' => 'es_mx',
            'timecreated' => $time,
            'tswetitle' => 'Construir',
            'tswetext' => 'construir',
        ]);

        // Plugin savepoint reached.
        upgrade_plugin_savepoint(true, 2019122300, 'local', 'differentiator');
    }

    if ($oldversion < 2019122400) {

        $time = time();
        $gwe = $DB->get_record('local_differentiator_gwe', ['gwid' => 1, 'lang' => 'es']);
        if (!empty($gwe)) {
            $gwe->gwetitle = 'Uno';
            $gwe->gwetext = 'uno';
            $gwe->timemodified = $time;
            $DB->update_record('local_differentiator_gwe', $gwe);
        }

        $gwe = $DB->get_record('local_differentiator_gwe', ['gwid' => 1, 'lang' => 'es_mx']);
        if (!empty($gwe)) {
            $gwe->gwetitle = 'Uno';
            $gwe->gwetext = 'uno';
            $gwe->timemodified = $time;
            $DB->update_record('local_differentiator_gwe', $gwe);
        }

        $tswe = $DB->get_record('local_differentiator_tswe', ['tswid' => 43, 'lang' => 'es']);
        if (!empty($tswe)) {
            $tswe->tswetitle = 'Apreciar';
            $tswe->tswetext = 'apreciar';
            $tswe->timemodified = $time;
            $DB->update_record('local_differentiator_tswe', $tswe);
        }

        $tswe = $DB->get_record('local_differentiator_tswe', ['tswid' => 43, 'lang' => 'es_mx']);
        if (!empty($tswe)) {
            $tswe->tswetitle = 'Apreciar';
            $tswe->tswetext = 'apreciar';
            $tswe->timemodified = $time;
            $DB->update_record('local_differentiator_tswe', $tswe);
        }

        $tswe = $DB->get_record('local_differentiator_tswe', ['tswid' => 43, 'lang' => 'it']);
        if (!empty($tswe)) {
            $tswe->tswetitle = 'Apprezziare';
            $tswe->tswetext = 'apprezziare';
            $tswe->timemodified = $time;
            $DB->update_record('local_differentiator_tswe', $tswe);
        }

        // Plugin savepoint reached.
        upgrade_plugin_savepoint(true, 2019122400, 'local', 'differentiator');
    }

    if ($oldversion < 2019122600) {

        $time = time();

        // Português.

        // Table local_differentiator_cwce.
        $DB->insert_record('local_differentiator_cwce', [
            'cwcid' => 1,
            'lang' => 'pt',
            'timecreated' => $time,
            'cwcetitle' => 'Profundidade',
            'cwcetext' => 'Profundidade',
        ]);
        $DB->insert_record('local_differentiator_cwce', [
            'cwcid' => 2,
            'lang' => 'pt',
            'timecreated' => $time,
            'cwcetitle' => 'Complexidade',
            'cwcetext' => 'Complexidade',
        ]);
        $DB->insert_record('local_differentiator_cwce', [
            'cwcid' => 3,
            'lang' => 'pt',
            'timecreated' => $time,
            'cwcetitle' => 'Imperativos',
            'cwcetext' => 'Imperativos',
        ]);
        $DB->insert_record('local_differentiator_cwce', [
            'cwcid' => 4,
            'lang' => 'pt',
            'timecreated' => $time,
            'cwcetitle' => 'Palavras-chave',
            'cwcetext' => 'Palavras-chave',
        ]);

        // Table local_differentiator_cwe.
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 1,
            'lang' => 'pt',
            'timecreated' => $time,
            'cwetitle' => 'Quadro completo',
            'cwetext' => 'o quadro completo',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 2,
            'lang' => 'pt',
            'timecreated' => $time,
            'cwetitle' => 'Perguntas não respondidas',
            'cwetext' => 'as perguntas não respondidas',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 3,
            'lang' => 'pt',
            'timecreated' => $time,
            'cwetitle' => 'Ética',
            'cwetext' => 'a ética',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 4,
            'lang' => 'pt',
            'timecreated' => $time,
            'cwetitle' => 'Predefinições',
            'cwetext' => 'as predefinições',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 5,
            'lang' => 'pt',
            'timecreated' => $time,
            'cwetitle' => 'Regras',
            'cwetext' => 'as regras',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 6,
            'lang' => 'pt',
            'timecreated' => $time,
            'cwetitle' => 'Idioma',
            'cwetext' => 'a terminologia específica',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 7,
            'lang' => 'pt',
            'timecreated' => $time,
            'cwetitle' => 'Detalhes Essenciais',
            'cwetext' => 'os detalhes Essenciais',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 8,
            'lang' => 'pt',
            'timecreated' => $time,
            'cwetitle' => 'Tendências',
            'cwetext' => 'as tendências',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 9,
            'lang' => 'pt',
            'timecreated' => $time,
            'cwetitle' => 'Pontos de vista diferentes',
            'cwetext' => 'os diferentes pontos de vista',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 10,
            'lang' => 'pt',
            'timecreated' => $time,
            'cwetitle' => 'Alterações ao longo do tempo',
            'cwetext' => 'as alterações ao longo do tempo',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 11,
            'lang' => 'pt',
            'timecreated' => $time,
            'cwetitle' => 'Interdisciplinariedade',
            'cwetext' => 'a interdisciplinariedade',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 12,
            'lang' => 'pt',
            'timecreated' => $time,
            'cwetitle' => 'Origem',
            'cwetext' => 'a origem',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 13,
            'lang' => 'pt',
            'timecreated' => $time,
            'cwetitle' => 'Convergência',
            'cwetext' => 'a convergência',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 14,
            'lang' => 'pt',
            'timecreated' => $time,
            'cwetitle' => 'Paralelismos',
            'cwetext' => 'os paralelismos',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 15,
            'lang' => 'pt',
            'timecreated' => $time,
            'cwetitle' => 'Paradoxo',
            'cwetext' => 'o paradoxo',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 16,
            'lang' => 'pt',
            'timecreated' => $time,
            'cwetitle' => 'Contribuição',
            'cwetext' => 'a contribuição',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 17,
            'lang' => 'pt',
            'timecreated' => $time,
            'cwetitle' => 'Consequências',
            'cwetext' => 'as consequências',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 18,
            'lang' => 'pt',
            'timecreated' => $time,
            'cwetitle' => 'Motivações',
            'cwetext' => 'as motivações',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 19,
            'lang' => 'pt',
            'timecreated' => $time,
            'cwetitle' => 'Implicações',
            'cwetext' => 'as implicações',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 20,
            'lang' => 'pt',
            'timecreated' => $time,
            'cwetitle' => 'Significado',
            'cwetext' => 'o significado',
        ]);

        // Table local_differentiator_gwce.
        $DB->insert_record('local_differentiator_gwce', [
            'gwcid' => 1,
            'lang' => 'pt',
            'timecreated' => $time,
            'gwcetitle' => 'Tamanho do grupo',
            'gwcetext' => 'Tamanho do grupo',
        ]);

        // Table local_differentiator_gwe.
        $DB->insert_record('local_differentiator_gwe', [
            'gwid' => 1,
            'lang' => 'pt',
            'timecreated' => $time,
            'gwetitle' => 'Um',
            'gwetext' => 'um',
        ]);
        $DB->insert_record('local_differentiator_gwe', [
            'gwid' => 2,
            'lang' => 'pt',
            'timecreated' => $time,
            'gwetitle' => 'Dois',
            'gwetext' => 'dois',
        ]);
        $DB->insert_record('local_differentiator_gwe', [
            'gwid' => 3,
            'lang' => 'pt',
            'timecreated' => $time,
            'gwetitle' => 'Três',
            'gwetext' => 'três',
        ]);
        $DB->insert_record('local_differentiator_gwe', [
            'gwid' => 4,
            'lang' => 'pt',
            'timecreated' => $time,
            'gwetitle' => 'Quatro',
            'gwetext' => 'quatro',
        ]);

        // Table local_differentiator_pwce.
        $DB->insert_record('local_differentiator_pwce', [
            'pwcid' => 1,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwcetitle' => 'Visual',
            'pwcetext' => 'Visual',
        ]);
        $DB->insert_record('local_differentiator_pwce', [
            'pwcid' => 2,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwcetitle' => 'Construção',
            'pwcetext' => 'Construção',
        ]);
        $DB->insert_record('local_differentiator_pwce', [
            'pwcid' => 3,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwcetitle' => 'Oral',
            'pwcetext' => 'Oral',
        ]);
        $DB->insert_record('local_differentiator_pwce', [
            'pwcid' => 4,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwcetitle' => 'Multimedia',
            'pwcetext' => 'Multimedia',
        ]);
        $DB->insert_record('local_differentiator_pwce', [
            'pwcid' => 5,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwcetitle' => 'Multimédia',
            'pwcetext' => 'Multimédia',
        ]);

        // Table local_differentiator_pwe.
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 1,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Gráfico',
            'pwetext' => 'um gráfico',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 2,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Desenho',
            'pwetext' => 'um desenho',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 3,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Cronologia',
            'pwetext' => 'uma cronologia',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 4,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Diagrama',
            'pwetext' => 'um diagrama',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 5,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Representação esquemática',
            'pwetext' => 'uma representação esquemática',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 6,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Mapa',
            'pwetext' => 'um mapa',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 7,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Banda desenhada',
            'pwetext' => 'uma banda desenhada',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 8,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Capa de livro',
            'pwetext' => 'uma capa de um livro',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 9,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Poster',
            'pwetext' => 'um poster',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 10,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Modelo',
            'pwetext' => 'um modelo',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 11,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Escultura',
            'pwetext' => 'uma escultura',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 12,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Diorama',
            'pwetext' => 'um diorama',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 13,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Miniatura',
            'pwetext' => 'uma miniatura',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 14,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Galeria de arte',
            'pwetext' => 'uma galeria de arte',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 15,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Exposição num museu',
            'pwetext' => 'uma exposição num museu',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 16,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Móvel',
            'pwetext' => 'um móvel',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 17,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Debate',
            'pwetext' => 'um debate',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 18,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Painel de discussão',
            'pwetext' => 'um painel de discussão',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 19,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Lição',
            'pwetext' => 'uma lição',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 20,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Relatório',
            'pwetext' => 'um relatório',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 21,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Peça de teatro',
            'pwetext' => 'uma peça de teatro',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 22,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Peça radiofónica',
            'pwetext' => 'uma peça radiofónica',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 23,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Conferência de imprensa',
            'pwetext' => 'uma conferência de imprensa',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 24,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Programa de entrevistas',
            'pwetext' => 'um programa de entrevistas',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 25,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Monólogo',
            'pwetext' => 'um monólogo',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 26,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Crítica cinematográfica',
            'pwetext' => 'uma crítica cinematográfica',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 27,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Canção',
            'pwetext' => 'uma canção',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 28,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Livro ilustrado',
            'pwetext' => 'um livro ilustrado',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 29,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Jornal',
            'pwetext' => 'um jornal',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 30,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Transmissão televisiva',
            'pwetext' => 'uma transmissão televisiva',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 31,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'PowerPoint',
            'pwetext' => 'uma apresentação PowerPoint',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 32,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Video de poesia',
            'pwetext' => 'um vídeo de poesia',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 33,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Reportagem fotográfica',
            'pwetext' => 'uma reportagem fotográfica',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 34,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Video de uma viagem',
            'pwetext' => 'um video de uma viagem',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 35,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Reportagem noticiosa',
            'pwetext' => 'uma reportagem noticiosa',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 36,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Página web',
            'pwetext' => 'uma página Web',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 37,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Ensaio',
            'pwetext' => 'un ensaio',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 38,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Análise literária',
            'pwetext' => 'uma análise literária',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 39,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Reportagem',
            'pwetext' => 'uma reportagem',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 40,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Artigo',
            'pwetext' => 'um artigo',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 41,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Ensaio persuasivo',
            'pwetext' => 'um ensaio persuasivo',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 42,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Série',
            'pwetext' => 'uma série',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 43,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Carta',
            'pwetext' => 'uma carta',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 44,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Historia infantil',
            'pwetext' => 'uma história infantil',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 45,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Poema/Canção',
            'pwetext' => 'um poema/uma canção',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 46,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Elogio',
            'pwetext' => 'um elogio',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 47,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Diário',
            'pwetext' => 'um diário',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 48,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'Revisão',
            'pwetext' => 'uma revisão',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 49,
            'lang' => 'pt',
            'timecreated' => $time,
            'pwetitle' => 'História num novo género',
            'pwetext' => 'uma história num novo género',
        ]);

        // Table local_differentiator_rwce.
        $DB->insert_record('local_differentiator_rwce', [
            'rwcid' => 1,
            'lang' => 'pt',
            'timecreated' => $time,
            'rwcetitle' => 'Offline',
            'rwcetext' => 'Offline',
        ]);
        $DB->insert_record('local_differentiator_rwce', [
            'rwcid' => 2,
            'lang' => 'pt',
            'timecreated' => $time,
            'rwcetitle' => 'Online',
            'rwcetext' => 'Online',
        ]);

        // Table local_differentiator_rwe.
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 1,
            'lang' => 'pt',
            'timecreated' => $time,
            'rwetitle' => 'Texto',
            'rwetext' => 'um texto',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 2,
            'lang' => 'pt',
            'timecreated' => $time,
            'rwetitle' => 'Livro',
            'rwetext' => 'um livro',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 3,
            'lang' => 'pt',
            'timecreated' => $time,
            'rwetitle' => 'Revista',
            'rwetext' => 'uma revista',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 4,
            'lang' => 'pt',
            'timecreated' => $time,
            'rwetitle' => 'Jornal',
            'rwetext' => 'um jornal',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 5,
            'lang' => 'pt',
            'timecreated' => $time,
            'rwetitle' => 'Entrevista',
            'rwetext' => 'uma entrevista',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 6,
            'lang' => 'pt',
            'timecreated' => $time,
            'rwetitle' => 'Enciclopédia',
            'rwetext' => 'uma enciclopédia',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 7,
            'lang' => 'pt',
            'timecreated' => $time,
            'rwetitle' => 'Especialista',
            'rwetext' => 'um/uma especialista',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 8,
            'lang' => 'pt',
            'timecreated' => $time,
            'rwetitle' => 'Site web',
            'rwetext' => 'um Site Web',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 9,
            'lang' => 'pt',
            'timecreated' => $time,
            'rwetitle' => 'Wikipedia',
            'rwetext' => 'Wikipedia',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 10,
            'lang' => 'pt',
            'timecreated' => $time,
            'rwetitle' => 'Enciclopédia online',
            'rwetext' => 'uma enciclopédia online',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 11,
            'lang' => 'pt',
            'timecreated' => $time,
            'rwetitle' => 'Jornal online',
            'rwetext' => 'um jornal online',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 12,
            'lang' => 'pt',
            'timecreated' => $time,
            'rwetitle' => 'Artigo',
            'rwetext' => 'um artigo',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 13,
            'lang' => 'pt',
            'timecreated' => $time,
            'rwetitle' => 'Especialista',
            'rwetext' => 'um/uma especialista',
        ]);

        // Table local_differentiator_tswce.
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 1,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswcetitle' => 'Recordar',
            'tswcetext' => 'Recordar',
        ]);
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 2,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswcetitle' => 'Compreender',
            'tswcetext' => 'Compreender',
        ]);
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 3,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswcetitle' => 'Aplicar',
            'tswcetext' => 'Aplicar',
        ]);
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 4,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswcetitle' => 'Analisar',
            'tswcetext' => 'Analisar',
        ]);
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 5,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswcetitle' => 'Avaliar',
            'tswcetext' => 'Avaliar',
        ]);
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 6,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswcetitle' => 'Criar',
            'tswcetext' => 'Criar',
        ]);

        // Table local_differentiator_tswe.
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 1,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Recordar',
            'tswetext' => 'recordar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 2,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Repetir',
            'tswetext' => 'repetir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 3,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Nomear',
            'tswetext' => 'nomear',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 4,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Referir',
            'tswetext' => 'referir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 5,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Listar',
            'tswetext' => 'listar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 6,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Expressar',
            'tswetext' => 'expressar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 7,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Definir',
            'tswetext' => 'definir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 8,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Ilustrar',
            'tswetext' => 'ilustrar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 9,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Reconhecer',
            'tswetext' => 'reconhecer',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 10,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Comparar',
            'tswetext' => 'comparar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 11,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Demonstrar',
            'tswetext' => 'demonstrar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 12,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Elucidar',
            'tswetext' => 'elucidar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 13,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Eleger',
            'tswetext' => 'eleger',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 14,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Descrever',
            'tswetext' => 'descrever',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 15,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Classificar',
            'tswetext' => 'classificar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 16,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Provar',
            'tswetext' => 'provar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 17,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Resumir',
            'tswetext' => 'resumir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 18,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Distinguir',
            'tswetext' => 'distinguir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 19,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Interpretar',
            'tswetext' => 'interpretar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 20,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Resolver',
            'tswetext' => 'resolver',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 21,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Visualizar',
            'tswetext' => 'visualizar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 22,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Julgar',
            'tswetext' => 'julgar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 23,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Medir',
            'tswetext' => 'medir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 24,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Delinear',
            'tswetext' => 'delinear',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 25,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Implementar',
            'tswetext' => 'implementar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 26,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Calcular',
            'tswetext' => 'calcular',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 27,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Executar',
            'tswetext' => 'executar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 28,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Verificar',
            'tswetext' => 'verificar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 29,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Preguntar',
            'tswetext' => 'preguntar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 30,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Apresentar',
            'tswetext' => 'apresentar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 31,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Contrastar',
            'tswetext' => 'contrastar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 32,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Criticar',
            'tswetext' => 'criticar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 33,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Analisar',
            'tswetext' => 'analisar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 34,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Diagnosticar',
            'tswetext' => 'diagnosticar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 35,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Refletir',
            'tswetext' => 'refletir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 36,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Deduzir',
            'tswetext' => 'deduzir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 37,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Selecionar',
            'tswetext' => 'selecionar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 38,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Sugerir',
            'tswetext' => 'sugerir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 39,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Valorizar',
            'tswetext' => 'valorizar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 40,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Avaliar',
            'tswetext' => 'avaliar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 41,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Decidir',
            'tswetext' => 'decidir',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 42,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Justificar',
            'tswetext' => 'justificar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 43,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Apreciar',
            'tswetext' => 'apreciar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 44,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Compor',
            'tswetext' => 'compor',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 45,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Conceber',
            'tswetext' => 'conceber',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 46,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Ampliar',
            'tswetext' => 'ampliar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 47,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Desenvolver',
            'tswetext' => 'desenvolver',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 48,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Desenhar',
            'tswetext' => 'desenhar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 49,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Criar',
            'tswetext' => 'criar',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 50,
            'lang' => 'pt',
            'timecreated' => $time,
            'tswetitle' => 'Construir',
            'tswetext' => 'construir',
        ]);

        // Plugin savepoint reached.
        upgrade_plugin_savepoint(true, 2019122600, 'local', 'differentiator');
    }

    if ($oldversion < 2019122700) {
        $time = time();
        $pwce = $DB->get_record('local_differentiator_pwce', ['pwcid' => 4, 'lang' => 'pt']);
        if (!empty($pwce)) {
            $pwce->pwcetitle = 'Multimédia';
            $pwce->pwcetext = 'Multimédia';
            $pwce->timemodified = $time;
            $DB->update_record('local_differentiator_pwce', $pwce);
        }

        $pwce = $DB->get_record('local_differentiator_pwce', ['pwcid' => 5, 'lang' => 'pt']);
        if (!empty($pwce)) {
            $pwce->pwcetitle = 'Escrita';
            $pwce->pwcetext = 'Escrita';
            $pwce->timemodified = $time;
            $DB->update_record('local_differentiator_pwce', $pwce);
        }

        $cwe = $DB->get_record('local_differentiator_cwe', ['cwid' => 7, 'lang' => 'pt']);
        if (!empty($cwe)) {
            $cwe->cwetitle = 'Detalhes essenciais';
            $cwe->cwetext = 'os detalhes essenciais';
            $cwe->timemodified = $time;
            $DB->update_record('local_differentiator_cwe', $cwe);
        }

        // Plugin savepoint reached.
        upgrade_plugin_savepoint(true, 2019122700, 'local', 'differentiator');
    }

    if ($oldversion < 2019122800) {
        $time = time();
        $tswe = $DB->get_record('local_differentiator_tswe', ['tswid' => 12, 'lang' => 'pt']);
        if (!empty($tswe)) {
            $tswe->tswetitle = 'Explicar';
            $tswe->tswetext = 'explicar';
            $tswe->timemodified = $time;
            $DB->update_record('local_differentiator_tswe', $tswe);
        }
        $tswe = $DB->get_record('local_differentiator_tswe', ['tswid' => 29, 'lang' => 'pt']);
        if (!empty($tswe)) {
            $tswe->tswetitle = 'Perguntar';
            $tswe->tswetext = 'perguntar';
            $tswe->timemodified = $time;
            $DB->update_record('local_differentiator_tswe', $tswe);
        }
        $tswe = $DB->get_record('local_differentiator_tswe', ['tswid' => 31, 'lang' => 'pt']);
        if (!empty($tswe)) {
            $tswe->tswetitle = 'Debater';
            $tswe->tswetext = 'debater';
            $tswe->timemodified = $time;
            $DB->update_record('local_differentiator_tswe', $tswe);
        }
        $tswe = $DB->get_record('local_differentiator_tswe', ['tswid' => 39, 'lang' => 'pt']);
        if (!empty($tswe)) {
            $tswe->tswetitle = 'Considerar';
            $tswe->tswetext = 'considerar';
            $tswe->timemodified = $time;
            $DB->update_record('local_differentiator_tswe', $tswe);
        }
        $rwe = $DB->get_record('local_differentiator_rwe', ['rwid' => 8, 'lang' => 'pt']);
        if (!empty($rwe)) {
            $rwe->tswetitle = 'Site Web';
            $rwe->tswetext = 'um site Web';
            $rwe->timemodified = $time;
            $DB->update_record('local_differentiator_rwe', $rwe);
        }
        $rwe = $DB->get_record('local_differentiator_rwe', ['rwid' => 9, 'lang' => 'pt']);
        if (!empty($rwe)) {
            $rwe->tswetitle = 'Wikipédia';
            $rwe->tswetext = 'Wikipédia';
            $rwe->timemodified = $time;
            $DB->update_record('local_differentiator_rwe', $rwe);
        }
        $pwe = $DB->get_record('local_differentiator_pwe', ['pwid' => 9, 'lang' => 'pt']);
        if (!empty($pwe)) {
            $pwe->tswetitle = 'Póster';
            $pwe->tswetext = 'um póster';
            $pwe->timemodified = $time;
            $DB->update_record('local_differentiator_pwe', $pwe);
        }
        $pwe = $DB->get_record('local_differentiator_pwe', ['pwid' => 16, 'lang' => 'pt']);
        if (!empty($pwe)) {
            $pwe->tswetitle = 'Dispositivo móvel';
            $pwe->tswetext = 'um dispositivo móvel';
            $pwe->timemodified = $time;
            $DB->update_record('local_differentiator_pwe', $pwe);
        }
        $pwe = $DB->get_record('local_differentiator_pwe', ['pwid' => 32, 'lang' => 'pt']);
        if (!empty($pwe)) {
            $pwe->tswetitle = 'Vídeo de poesia';
            $pwe->tswetext = 'um vídeo de poesia';
            $pwe->timemodified = $time;
            $DB->update_record('local_differentiator_pwe', $pwe);
        }
        $pwe = $DB->get_record('local_differentiator_pwe', ['pwid' => 34, 'lang' => 'pt']);
        if (!empty($pwe)) {
            $pwe->tswetitle = 'Vídeo de uma viagem';
            $pwe->tswetext = 'um vídeo de uma viagem';
            $pwe->timemodified = $time;
            $DB->update_record('local_differentiator_pwe', $pwe);
        }
        // Plugin savepoint reached.
        upgrade_plugin_savepoint(true, 2019122800, 'local', 'differentiator');
    }
    return true;
}
