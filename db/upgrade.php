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
            $rwe->rwetitle = 'Site Web';
            $rwe->rwetext = 'um site Web';
            $rwe->timemodified = $time;
            $DB->update_record('local_differentiator_rwe', $rwe);
        }
        $rwe = $DB->get_record('local_differentiator_rwe', ['rwid' => 9, 'lang' => 'pt']);
        if (!empty($rwe)) {
            $rwe->rwetitle = 'Wikipédia';
            $rwe->rwetext = 'Wikipédia';
            $rwe->timemodified = $time;
            $DB->update_record('local_differentiator_rwe', $rwe);
        }
        $pwe = $DB->get_record('local_differentiator_pwe', ['pwid' => 9, 'lang' => 'pt']);
        if (!empty($pwe)) {
            $pwe->pwetitle = 'Póster';
            $pwe->pwetext = 'um póster';
            $pwe->timemodified = $time;
            $DB->update_record('local_differentiator_pwe', $pwe);
        }
        $pwe = $DB->get_record('local_differentiator_pwe', ['pwid' => 16, 'lang' => 'pt']);
        if (!empty($pwe)) {
            $pwe->pwetitle = 'Dispositivo móvel';
            $pwe->pwetext = 'um dispositivo móvel';
            $pwe->timemodified = $time;
            $DB->update_record('local_differentiator_pwe', $pwe);
        }
        $pwe = $DB->get_record('local_differentiator_pwe', ['pwid' => 32, 'lang' => 'pt']);
        if (!empty($pwe)) {
            $pwe->pwetitle = 'Vídeo de poesia';
            $pwe->pwetext = 'um vídeo de poesia';
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

    if ($oldversion < 2019122900) {
        $time = time();
        $pwe = $DB->get_record('local_differentiator_pwe', ['pwid' => 37, 'lang' => 'pt']);
        if (!empty($pwe)) {
            $pwe->pwetitle = 'Ensaio';
            $pwe->pwetext = 'um ensaio';
            $pwe->timemodified = $time;
            $DB->update_record('local_differentiator_pwe', $pwe);
        }
        // Plugin savepoint reached.
        upgrade_plugin_savepoint(true, 2019122900, 'local', 'differentiator');
    }

    if ($oldversion < 2020010300) {
        $time = time();
        $pwe = $DB->get_record('local_differentiator_pwe', ['pwid' => 36, 'lang' => 'pt']);
        if (!empty($pwe)) {
            $pwe->pwetitle = 'Página Web';
            $pwe->pwetext = 'uma página Web';
            $pwe->timemodified = $time;
            $DB->update_record('local_differentiator_pwe', $pwe);
        }
        $pwe = $DB->get_record('local_differentiator_pwe', ['pwid' => 44, 'lang' => 'pt']);
        if (!empty($pwe)) {
            $pwe->pwetitle = 'História infantil';
            $pwe->pwetext = 'uma história infantil';
            $pwe->timemodified = $time;
            $DB->update_record('local_differentiator_pwe', $pwe);
        }
        $pwe = $DB->get_record('local_differentiator_pwe', ['pwid' => 49, 'lang' => 'pt']);
        if (!empty($pwe)) {
            $pwe->pwetitle = 'História num género novo';
            $pwe->pwetext = 'uma história num género novo';
            $pwe->timemodified = $time;
            $DB->update_record('local_differentiator_pwe', $pwe);
        }
        $pwce = $DB->get_record('local_differentiator_pwce', ['pwcid' => 3, 'lang' => 'pt']);
        if (!empty($pwce)) {
            $pwce->pwcetitle = 'Oralidade';
            $pwce->pwcetext = 'Oralidade';
            $pwce->timemodified = $time;
            $DB->update_record('local_differentiator_pwce', $pwce);
        }
        $pwe = $DB->get_record('local_differentiator_pwe', ['pwid' => 4, 'lang' => 'de']);
        if (!empty($pwe)) {
            $pwe->pwetitle = 'Diagramm';
            $pwe->pwetext = 'ein Diagramm';
            $pwe->timemodified = $time;
            $DB->update_record('local_differentiator_pwe', $pwe);
        }

        // Nederlands.

        // Table local_differentiator_cwce.
        $DB->insert_record('local_differentiator_cwce', [
            'cwcid' => 1,
            'lang' => 'nl',
            'timecreated' => $time,
            'cwcetitle' => 'Verdieping',
            'cwcetext' => 'Verdieping',
        ]);
        $DB->insert_record('local_differentiator_cwce', [
            'cwcid' => 2,
            'lang' => 'nl',
            'timecreated' => $time,
            'cwcetitle' => 'Complexiteit',
            'cwcetext' => 'Complexiteit',
        ]);
        $DB->insert_record('local_differentiator_cwce', [
            'cwcid' => 3,
            'lang' => 'nl',
            'timecreated' => $time,
            'cwcetitle' => 'Eisen',
            'cwcetext' => 'Eisen',
        ]);
        $DB->insert_record('local_differentiator_cwce', [
            'cwcid' => 4,
            'lang' => 'nl',
            'timecreated' => $time,
            'cwcetitle' => 'Kernwoorden',
            'cwcetext' => 'Kernwoorden',
        ]);

        // Table local_differentiator_cwe.
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 1,
            'lang' => 'nl',
            'timecreated' => $time,
            'cwetitle' => 'Idee',
            'cwetext' => 'het idee',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 2,
            'lang' => 'nl',
            'timecreated' => $time,
            'cwetitle' => 'Open vragen',
            'cwetext' => 'de open vragen',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 3,
            'lang' => 'nl',
            'timecreated' => $time,
            'cwetitle' => 'Ethiek',
            'cwetext' => 'de ethiek',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 4,
            'lang' => 'nl',
            'timecreated' => $time,
            'cwetitle' => 'Patronen',
            'cwetext' => 'patronen',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 5,
            'lang' => 'nl',
            'timecreated' => $time,
            'cwetitle' => 'Regels',
            'cwetext' => 'de regels',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 6,
            'lang' => 'nl',
            'timecreated' => $time,
            'cwetitle' => 'Vakjargon',
            'cwetext' => 'het vakjargon',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 7,
            'lang' => 'nl',
            'timecreated' => $time,
            'cwetitle' => 'Essentiële details',
            'cwetext' => 'de essentiële details',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 8,
            'lang' => 'nl',
            'timecreated' => $time,
            'cwetitle' => 'Trends',
            'cwetext' => 'de trends',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 9,
            'lang' => 'nl',
            'timecreated' => $time,
            'cwetitle' => 'Verschillende standpunten',
            'cwetext' => 'de verschillende standpunten',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 10,
            'lang' => 'nl',
            'timecreated' => $time,
            'cwetitle' => 'Verschil in de tijd',
            'cwetext' => 'het verschil in de tijd',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 11,
            'lang' => 'nl',
            'timecreated' => $time,
            'cwetitle' => 'Over vakgebieden heen',
            'cwetext' => 'over vakgebieden heen',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 12,
            'lang' => 'nl',
            'timecreated' => $time,
            'cwetitle' => 'Oorsprong',
            'cwetext' => 'de oorsprong',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 13,
            'lang' => 'nl',
            'timecreated' => $time,
            'cwetitle' => 'Overeenstemming',
            'cwetext' => 'de overeenstemming',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 14,
            'lang' => 'nl',
            'timecreated' => $time,
            'cwetitle' => 'Parallel',
            'cwetext' => 'de parallel',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 15,
            'lang' => 'nl',
            'timecreated' => $time,
            'cwetitle' => 'Tegenstelling',
            'cwetext' => 'de tegenstelling',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 16,
            'lang' => 'nl',
            'timecreated' => $time,
            'cwetitle' => 'Bijdrage',
            'cwetext' => 'de bijdrage',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 17,
            'lang' => 'nl',
            'timecreated' => $time,
            'cwetitle' => 'Consequenties',
            'cwetext' => 'de consequenties',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 18,
            'lang' => 'nl',
            'timecreated' => $time,
            'cwetitle' => 'Motivaties',
            'cwetext' => 'de motivaties',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 19,
            'lang' => 'nl',
            'timecreated' => $time,
            'cwetitle' => 'Implicaties',
            'cwetext' => 'de implicaties',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwcid' => 20,
            'lang' => 'nl',
            'timecreated' => $time,
            'cwetitle' => 'Betekenissen',
            'cwetext' => 'de betekenissen',
        ]);

        // Table local_differentiator_gwce.
        $DB->insert_record('local_differentiator_gwce', [
            'gwcid' => 1,
            'lang' => 'nl',
            'timecreated' => $time,
            'gwcetitle' => 'Groepsgrootte',
            'gwcetext' => 'Groepsgrootte',
        ]);

        // Table local_differentiator_gwe.
        $DB->insert_record('local_differentiator_gwe', [
            'gwid' => 1,
            'lang' => 'nl',
            'timecreated' => $time,
            'gwetitle' => 'Eén',
            'gwetext' => 'eén',
        ]);
        $DB->insert_record('local_differentiator_gwe', [
            'gwid' => 2,
            'lang' => 'nl',
            'timecreated' => $time,
            'gwetitle' => 'Twee',
            'gwetext' => 'twee',
        ]);
        $DB->insert_record('local_differentiator_gwe', [
            'gwid' => 3,
            'lang' => 'nl',
            'timecreated' => $time,
            'gwetitle' => 'Drie',
            'gwetext' => 'drie',
        ]);
        $DB->insert_record('local_differentiator_gwe', [
            'gwid' => 4,
            'lang' => 'nl',
            'timecreated' => $time,
            'gwetitle' => 'Vier',
            'gwetext' => 'vier',
        ]);

        // Table local_differentiator_pwce.
        $DB->insert_record('local_differentiator_pwce', [
            'pwcid' => 1,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwcetitle' => 'Visueel',
            'pwcetext' => 'Visueel',
        ]);
        $DB->insert_record('local_differentiator_pwce', [
            'pwcid' => 2,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwcetitle' => 'Werkstuk',
            'pwcetext' => 'Werkstuk',
        ]);
        $DB->insert_record('local_differentiator_pwce', [
            'pwcid' => 3,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwcetitle' => 'Mondeling',
            'pwcetext' => 'Mondeling',
        ]);
        $DB->insert_record('local_differentiator_pwce', [
            'pwcid' => 4,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwcetitle' => 'Multimedia',
            'pwcetext' => 'Multimedia',
        ]);
        $DB->insert_record('local_differentiator_pwce', [
            'pwcid' => 5,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwcetitle' => 'Schriftelijk',
            'pwcetext' => 'Schriftelijk',
        ]);

        // Table local_differentiator_pwe.
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 1,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Grafiek',
            'pwetext' => 'een grafiek',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 2,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Tekening',
            'pwetext' => 'een tekening',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 3,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Tijdlijn',
            'pwetext' => 'een tijdlijn',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 4,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Diagram',
            'pwetext' => 'een diagram',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 5,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Schematische voorstelling',
            'pwetext' => 'een schematische voorstelling',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 6,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Kaart',
            'pwetext' => 'een kaart',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 7,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Striptekening',
            'pwetext' => 'een striptekening',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 8,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Boekomslag',
            'pwetext' => 'een boekomslag',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 9,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Poster',
            'pwetext' => 'een poster',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 10,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Model',
            'pwetext' => 'een model',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 11,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Sculptuur',
            'pwetext' => 'een sculptuur',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 12,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Diorama',
            'pwetext' => 'een diorama',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 13,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Miniatuur',
            'pwetext' => 'een miniatuur',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 14,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Expositie',
            'pwetext' => 'een expositie',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 15,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Tentoonstelling',
            'pwetext' => 'een tentoonstelling',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 16,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Mobile',
            'pwetext' => 'een mobile',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 17,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Debat',
            'pwetext' => 'een debat',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 18,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Paneldiscussie',
            'pwetext' => 'een paneldiscussie',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 19,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Les',
            'pwetext' => 'een les',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 20,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Mededeling',
            'pwetext' => 'een mededeling',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 21,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Rollenspel',
            'pwetext' => 'een rollenspel',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 22,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => "Lezing",
            'pwetext' => "een lezing",
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 23,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Persconferentie',
            'pwetext' => 'een persconferentie',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 24,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Talkshow',
            'pwetext' => 'een talkshow',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 25,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Monoloog',
            'pwetext' => 'een monoloog',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 26,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Filmrecentie',
            'pwetext' => 'een filmrecentie',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 27,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Lied',
            'pwetext' => 'een lied',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 28,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Geïllustreerd boek',
            'pwetext' => 'een geïllustreerd boek',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 29,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Krant',
            'pwetext' => 'een krant',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 30,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'TV-show',
            'pwetext' => 'een TV-show',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 31,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Presentatie',
            'pwetext' => 'een presentatie',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 32,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Videoreportage',
            'pwetext' => 'een videoreportage',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 33,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Fotoboek',
            'pwetext' => 'een fotoboek',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 34,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Reisverslag',
            'pwetext' => 'een reisverslag',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 35,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Nieuwbericht',
            'pwetext' => 'een nieuwsbericht',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 36,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Webpagina',
            'pwetext' => 'een webpagina',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 37,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Opstel',
            'pwetext' => 'een opstel',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 38,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Literatuurstudie',
            'pwetext' => 'een literatuurstudie',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 39,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Rapport',
            'pwetext' => 'een rapport',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 40,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Artikel',
            'pwetext' => 'een artikel',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 41,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Betoog',
            'pwetext' => 'een betoog',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 42,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Vervolg',
            'pwetext' => 'een vervolg',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 43,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Brief',
            'pwetext' => 'een brief',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 44,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => "Kinderverhaal",
            'pwetext' => "een kinderverhaal",
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 45,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Gedicht/lied',
            'pwetext' => 'een gedicht/lied',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 46,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Lofrede',
            'pwetext' => 'een lofrede',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 47,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Dagboek',
            'pwetext' => 'een dagboek',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 48,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Recentie',
            'pwetext' => 'een recentie',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 49,
            'lang' => 'nl',
            'timecreated' => $time,
            'pwetitle' => 'Verhaal in nieuw genre',
            'pwetext' => 'een verhaal in een nieuw genre',
        ]);

        // Table local_differentiator_rwce.
        $DB->insert_record('local_differentiator_rwce', [
            'rwcid' => 1,
            'lang' => 'nl',
            'timecreated' => $time,
            'rwcetitle' => 'Offline',
            'rwcetext' => 'Offline',
        ]);
        $DB->insert_record('local_differentiator_rwce', [
            'rwcid' => 2,
            'lang' => 'nl',
            'timecreated' => $time,
            'rwcetitle' => 'Online',
            'rwcetext' => 'Online',
        ]);

        // Table local_differentiator_rwe.
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 1,
            'lang' => 'nl',
            'timecreated' => $time,
            'rwetitle' => 'Tekst',
            'rwetext' => 'een tekst',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 2,
            'lang' => 'nl',
            'timecreated' => $time,
            'rwetitle' => 'Boek',
            'rwetext' => 'een boek',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 3,
            'lang' => 'nl',
            'timecreated' => $time,
            'rwetitle' => 'Magazine',
            'rwetext' => 'een magazine',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 4,
            'lang' => 'nl',
            'timecreated' => $time,
            'rwetitle' => 'Krant',
            'rwetext' => 'een krant',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 5,
            'lang' => 'nl',
            'timecreated' => $time,
            'rwetitle' => 'Interview',
            'rwetext' => 'een interview',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 6,
            'lang' => 'nl',
            'timecreated' => $time,
            'rwetitle' => 'Encyclopedie',
            'rwetext' => 'een encyclopedie',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 7,
            'lang' => 'nl',
            'timecreated' => $time,
            'rwetitle' => 'Deskundige',
            'rwetext' => 'een deskundige',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 8,
            'lang' => 'nl',
            'timecreated' => $time,
            'rwetitle' => 'Webseite',
            'rwetext' => 'een website',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 9,
            'lang' => 'nl',
            'timecreated' => $time,
            'rwetitle' => 'Wikipedia',
            'rwetext' => 'Wikipedia',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 10,
            'lang' => 'nl',
            'timecreated' => $time,
            'rwetitle' => 'Online encyclopedie',
            'rwetext' => 'een online encyclopedie',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 11,
            'lang' => 'nl',
            'timecreated' => $time,
            'rwetitle' => 'Krant',
            'rwetext' => 'een krant',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 12,
            'lang' => 'nl',
            'timecreated' => $time,
            'rwetitle' => 'Artikel',
            'rwetext' => 'een artikel',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 13,
            'lang' => 'nl',
            'timecreated' => $time,
            'rwetitle' => 'Deskundige',
            'rwetext' => 'een deskundige',
        ]);

        // Table local_differentiator_tswce.
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 1,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswcetitle' => 'Onthouden',
            'tswcetext' => 'onthouden',
        ]);
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 2,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswcetitle' => 'Begrijpen',
            'tswcetext' => 'Begrijpen',
        ]);
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 3,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswcetitle' => 'Toepassen',
            'tswcetext' => 'Toepassen',
        ]);
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 4,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswcetitle' => 'Analyseren',
            'tswcetext' => 'Analyseren',
        ]);
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 5,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswcetitle' => 'Evalueren',
            'tswcetext' => 'Evalueren',
        ]);
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 6,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswcetitle' => 'Creëren',
            'tswcetext' => 'Creëren',
        ]);

        // Table local_differentiator_tswe.
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 1,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Onthouden',
            'tswetext' => 'onthouden',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 2,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Herhalen',
            'tswetext' => 'herhalen',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 3,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Benoemen',
            'tswetext' => 'benoemen',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 4,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Rapporteren',
            'tswetext' => 'rapporteren',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 5,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Oplijsten',
            'tswetext' => 'oplijsten',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 6,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Weergeven',
            'tswetext' => 'weergeven',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 7,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Definiëren',
            'tswetext' => 'definiëren',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 8,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Verduidelijken',
            'tswetext' => 'verduidelijken',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 9,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Herkennen',
            'tswetext' => 'herkennen',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 10,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Vergelijken',
            'tswetext' => 'vergelijken',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 11,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Tonen',
            'tswetext' => 'tonen',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 12,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Uitleggen',
            'tswetext' => 'uitleggen',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 13,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Kiezen',
            'tswetext' => 'kiezen',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 14,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Beschrijven',
            'tswetext' => 'beschrijven',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 15,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Classificeren',
            'tswetext' => 'classificeren',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 16,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Onderbouwen',
            'tswetext' => 'onderbouwen',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 17,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Samenvatten',
            'tswetext' => 'samenvatten',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 18,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Onderscheiden',
            'tswetext' => 'onderscheiden',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 19,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Interpreteren',
            'tswetext' => 'interpreteren',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 20,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Oplossen',
            'tswetext' => 'oplossen',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 21,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Visualiseren',
            'tswetext' => 'visualiseren',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 22,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Schatten',
            'tswetext' => 'schatten',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 23,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Meten',
            'tswetext' => 'meten',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 24,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Schetsen',
            'tswetext' => 'schetsen',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 25,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Implementeren',
            'tswetext' => 'mplementeren',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 26,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Berekenen',
            'tswetext' => 'berekenen',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 27,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Uitvoeren',
            'tswetext' => 'uitvoeren',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 28,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Inspecteren',
            'tswetext' => 'inspecteren',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 29,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Vragen',
            'tswetext' => 'vragen',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 30,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Presenteren',
            'tswetext' => 'presenteren',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 31,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Contrasteren',
            'tswetext' => 'contrasteren',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 32,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Bekritiseren',
            'tswetext' => 'bekritiseren',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 33,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Analyseren',
            'tswetext' => 'analyseren',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 34,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Diagnostiseren',
            'tswetext' => 'diagnostiseren',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 35,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Reflecteren',
            'tswetext' => 'reflecteren',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 36,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Afleiden',
            'tswetext' => 'afleiden',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 37,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Selecteren',
            'tswetext' => 'selecteren',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 38,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Suggereren',
            'tswetext' => 'suggereren',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 39,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Beoordelen',
            'tswetext' => 'beoordelen',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 40,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Evalueren',
            'tswetext' => 'evalueren',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 41,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Beslissen',
            'tswetext' => 'beslissen',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 42,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Rechtvaardigen',
            'tswetext' => 'rechtvaardigen',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 43,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Inschatten',
            'tswetext' => 'inschatten',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 44,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Samenstellen',
            'tswetext' => 'samenstellen',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 45,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Voorstellen',
            'tswetext' => 'voorstellen',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 46,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Uitbreiden',
            'tswetext' => 'uitbreiden',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 47,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Ontwikkelen',
            'tswetext' => 'ontwikkelen',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 48,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Ontwerpen',
            'tswetext' => 'ontwerpen',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 49,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Maken',
            'tswetext' => 'maken',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 50,
            'lang' => 'nl',
            'timecreated' => $time,
            'tswetitle' => 'Construeren',
            'tswetext' => 'construeren',
        ]);

        // Plugin savepoint reached.
        upgrade_plugin_savepoint(true, 2020010300, 'local', 'differentiator');
    }

    if ($oldversion < 2020020100) {

        $time = time();

        // Ελληνικά.

        // Table local_differentiator_cwce.
        $DB->insert_record('local_differentiator_cwce', [
            'cwcid' => 1,
            'lang' => 'el',
            'timecreated' => $time,
            'cwcetitle' => 'Βάθος',
            'cwcetext' => 'Βάθος',
        ]);
        $DB->insert_record('local_differentiator_cwce', [
            'cwcid' => 2,
            'lang' => 'el',
            'timecreated' => $time,
            'cwcetitle' => 'Πολυπλοκότητα',
            'cwcetext' => 'Πολυπλοκότητα',
        ]);
        $DB->insert_record('local_differentiator_cwce', [
            'cwcid' => 3,
            'lang' => 'el',
            'timecreated' => $time,
            'cwcetitle' => 'Επιταγές',
            'cwcetext' => 'Επιταγές',
        ]);
        $DB->insert_record('local_differentiator_cwce', [
            'cwcid' => 4,
            'lang' => 'el',
            'timecreated' => $time,
            'cwcetitle' => 'Λέξεις κλειδιά',
            'cwcetext' => 'Λέξεις κλειδιά',
        ]);

        // Table local_differentiator_cwe.
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 1,
            'lang' => 'el',
            'timecreated' => $time,
            'cwetitle' => 'Γενικότερη ιδέα',
            'cwetext' => 'γενικότερη ιδέα',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 2,
            'lang' => 'el',
            'timecreated' => $time,
            'cwetitle' => 'Ανοιχτές ερωτήσεις',
            'cwetext' => 'ανοιχτών ερωτήσεων',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 3,
            'lang' => 'el',
            'timecreated' => $time,
            'cwetitle' => 'Ηθική',
            'cwetext' => 'ηθικής',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 4,
            'lang' => 'el',
            'timecreated' => $time,
            'cwetitle' => 'Πρότυπα',
            'cwetext' => 'προτύπων',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 5,
            'lang' => 'el',
            'timecreated' => $time,
            'cwetitle' => 'Κανόνες',
            'cwetext' => 'κανόνων',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 6,
            'lang' => 'el',
            'timecreated' => $time,
            'cwetitle' => 'Ειδική ορολογία',
            'cwetext' => 'ειδικής ορολογίας',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 7,
            'lang' => 'el',
            'timecreated' => $time,
            'cwetitle' => 'Βασικές λεπτομέρειες',
            'cwetext' => 'βασικών λεπτομερειών',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 8,
            'lang' => 'el',
            'timecreated' => $time,
            'cwetitle' => 'Τάσεις',
            'cwetext' => 'τάσεων',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 9,
            'lang' => 'el',
            'timecreated' => $time,
            'cwetitle' => 'Διαφορετικές απόψεις',
            'cwetext' => 'διαφορετικών απόψεων',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 10,
            'lang' => 'el',
            'timecreated' => $time,
            'cwetitle' => 'Αλλαγή με την πάροδο του χρόνου',
            'cwetext' => 'αλλαγής με την πάροδο του χρόνου',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 11,
            'lang' => 'el',
            'timecreated' => $time,
            'cwetitle' => 'Διαθεματικά',
            'cwetext' => 'διαθεματικά',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 12,
            'lang' => 'el',
            'timecreated' => $time,
            'cwetitle' => 'Προέλευση',
            'cwetext' => 'μιας προέλευσης',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 13,
            'lang' => 'el',
            'timecreated' => $time,
            'cwetitle' => 'Σύγκλιση',
            'cwetext' => 'μιας σύγκλισης',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 14,
            'lang' => 'el',
            'timecreated' => $time,
            'cwetitle' => 'Παραλληλισμός',
            'cwetext' => 'ενός παραλληλισμού',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 15,
            'lang' => 'el',
            'timecreated' => $time,
            'cwetitle' => 'Παράδοξο',
            'cwetext' => 'ενός παραδόξου',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 16,
            'lang' => 'el',
            'timecreated' => $time,
            'cwetitle' => 'Συνεισφορά',
            'cwetext' => 'μιας συνεισφοράς',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 17,
            'lang' => 'el',
            'timecreated' => $time,
            'cwetitle' => 'Συνέπειες',
            'cwetext' => 'συνεπειών',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 18,
            'lang' => 'el',
            'timecreated' => $time,
            'cwetitle' => 'Κίνητρα',
            'cwetext' => 'κινήτρων',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwid' => 19,
            'lang' => 'el',
            'timecreated' => $time,
            'cwetitle' => 'Επιπτώσεις',
            'cwetext' => 'επιπτώσεων',
        ]);
        $DB->insert_record('local_differentiator_cwe', [
            'cwcid' => 20,
            'lang' => 'el',
            'timecreated' => $time,
            'cwetitle' => 'Σημασία',
            'cwetext' => 'μιας σημασίας',
        ]);

        // Table local_differentiator_gwce.
        $DB->insert_record('local_differentiator_gwce', [
            'gwcid' => 1,
            'lang' => 'el',
            'timecreated' => $time,
            'gwcetitle' => 'Μέγεθος ομάδας',
            'gwcetext' => 'Μέγεθος ομάδας',
        ]);

        // Table local_differentiator_gwe.
        $DB->insert_record('local_differentiator_gwe', [
            'gwid' => 1,
            'lang' => 'el',
            'timecreated' => $time,
            'gwetitle' => 'Ένα',
            'gwetext' => 'Ένα',
        ]);
        $DB->insert_record('local_differentiator_gwe', [
            'gwid' => 2,
            'lang' => 'el',
            'timecreated' => $time,
            'gwetitle' => 'Δύο',
            'gwetext' => 'Δύο',
        ]);
        $DB->insert_record('local_differentiator_gwe', [
            'gwid' => 3,
            'lang' => 'el',
            'timecreated' => $time,
            'gwetitle' => 'Τρία',
            'gwetext' => 'Τρία',
        ]);
        $DB->insert_record('local_differentiator_gwe', [
            'gwid' => 4,
            'lang' => 'el',
            'timecreated' => $time,
            'gwetitle' => 'Τέσσερα',
            'gwetext' => 'Τέσσερα',
        ]);

        // Table local_differentiator_pwce.
        $DB->insert_record('local_differentiator_pwce', [
            'pwcid' => 1,
            'lang' => 'el',
            'timecreated' => $time,
            'pwcetitle' => 'Οπτικός',
            'pwcetext' => 'Οπτικός',
        ]);
        $DB->insert_record('local_differentiator_pwce', [
            'pwcid' => 2,
            'lang' => 'el',
            'timecreated' => $time,
            'pwcetitle' => 'Κατασκευή',
            'pwcetext' => 'Κατασκευή',
        ]);
        $DB->insert_record('local_differentiator_pwce', [
            'pwcid' => 3,
            'lang' => 'el',
            'timecreated' => $time,
            'pwcetitle' => 'Προφορικός',
            'pwcetext' => 'Προφορικός',
        ]);
        $DB->insert_record('local_differentiator_pwce', [
            'pwcid' => 4,
            'lang' => 'el',
            'timecreated' => $time,
            'pwcetitle' => 'Πολυμέσα',
            'pwcetext' => 'Πολυμέσα',
        ]);
        $DB->insert_record('local_differentiator_pwce', [
            'pwcid' => 5,
            'lang' => 'el',
            'timecreated' => $time,
            'pwcetitle' => 'Γραπτός',
            'pwcetext' => 'Γραπτός',
        ]);

        // Table local_differentiator_pwe.
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 1,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Γράφημα',
            'pwetext' => 'ενός γραφήματος',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 2,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Σχέδιο',
            'pwetext' => 'ενός σχεδίου',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 3,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Χρονολόγιο',
            'pwetext' => 'ενός χρονολογίου',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 4,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Διάγραμμα',
            'pwetext' => 'ενός διαγράμματος',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 5,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Μια σχηματική αναπαράσταση',
            'pwetext' => 'μιας σχηματικής αναπαράστασης',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 6,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Χάρτης',
            'pwetext' => 'ενός χάρτη',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 7,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Κόμικς',
            'pwetext' => 'ενός κόμικ',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 8,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Εξώφυλλο βιβλίου',
            'pwetext' => 'ενός εξωφύλλου βιβλίου',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 9,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Αφίσα',
            'pwetext' => 'μιας αφίσας',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 10,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Μοντέλο',
            'pwetext' => 'ενός μοντέλου',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 11,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Γλυπτική',
            'pwetext' => 'γλυπτικής',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 12,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Διόραμα',
            'pwetext' => 'ενός διοράματος',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 13,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Μινιατούρα',
            'pwetext' => 'μιας μινιατούρας',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 14,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Έκθεση τέχνης',
            'pwetext' => 'μιας έκθεσης τέχνης',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 15,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Έκθεση μουσείου',
            'pwetext' => 'μιας έκθεσης μουσείου',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 16,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Κινητό',
            'pwetext' => 'ενός κινητού',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 17,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Λογομαχία',
            'pwetext' => 'μιας λογομαχίας',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 18,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Συζήτηση πάνελ',
            'pwetext' => 'μιας συζήτησης πάνελ',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 19,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Διδασκαλία',
            'pwetext' => 'μιας διδασκαλίας',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 20,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Αναφορά',
            'pwetext' => 'μιας αναφοράς',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 21,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Παιχνίδι ρόλων',
            'pwetext' => 'παιχνιδιού ρόλων',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 22,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Θέατρο αναγνωστών',
            'pwetext' => 'ενός θεάτρου αναγνωστών',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 23,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Συνέντευξη τύπου',
            'pwetext' => 'μιας συνέντευξης τύπου',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 24,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Εκπομπή διαλόγου',
            'pwetext' => 'μιας εκπομπής διαλόγου',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 25,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Μονόλογος',
            'pwetext' => 'ενός μονολόγου',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 26,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Κριτική ταινίας',
            'pwetext' => 'μιας κριτικής ταινίας',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 27,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Τραγούδι',
            'pwetext' => 'ενός τραγουδιού',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 28,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Εικονογραφημένο βιβλίο',
            'pwetext' => 'ενός εικονογραφημένου βιβλίου',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 29,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Εφημερίδα',
            'pwetext' => 'μιας εφημερίδας',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 30,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Τηλεοπτική εκπομπή',
            'pwetext' => 'μιας τηλεοπτικής εκπομπής',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 31,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Παρουσίαση',
            'pwetext' => 'μιας παρουσίασης',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 32,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Βιντεο-ρεπορτάζ',
            'pwetext' => 'ενός βιντεο-ρεπορτάζ',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 33,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Έκθεση φωτογραφιών',
            'pwetext' => 'μιας έκθεσης φωτογραφιών',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 34,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Βίντεο οδοιπορικό',
            'pwetext' => 'ενός βίντεο οδοιπορικού',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 35,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Δελτίο ειδήσεων',
            'pwetext' => 'ενός δελτίου ειδήσεων',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 36,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Ιστοσελίδα',
            'pwetext' => 'μιας ιστοσελίδας',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 37,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Δοκίμιο',
            'pwetext' => 'ενός δοκιμίου',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 38,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Λογοτεχνική ανάλυση',
            'pwetext' => 'μιας λογοτεχνικής ανάλυσης',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 39,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Αναφορά',
            'pwetext' => 'μιας αναφοράς',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 40,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Άρθρο',
            'pwetext' => 'ενός άρθρου',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 41,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Αποδεικτικό δοκίμιο',
            'pwetext' => 'ενός αποδεικτικού δοκιμίου',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 42,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Συνέχεια',
            'pwetext' => 'μιας συνέχειας',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 43,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Επιστολή',
            'pwetext' => 'μιας επιστολής',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 44,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Παραμύθι για παιδιά',
            'pwetext' => 'ενός παραμυθιού για παιδιά',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 45,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Ποίημα/Τραγούδι',
            'pwetext' => 'ενός ποιήματος/τραγουδιού',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 46,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Εγκώμιο',
            'pwetext' => 'ενός εγκωμίου',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 47,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Ημερολόγιο',
            'pwetext' => 'ενός ημερολογίου',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 48,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Ανασκόπηση',
            'pwetext' => 'μιας ανασκόπησης',
        ]);
        $DB->insert_record('local_differentiator_pwe', [
            'pwid' => 49,
            'lang' => 'el',
            'timecreated' => $time,
            'pwetitle' => 'Ιστορία ενός νέου είδους',
            'pwetext' => 'μιας ιστορίας ενός νέου είδους',
        ]);

        // Table local_differentiator_rwce.
        $DB->insert_record('local_differentiator_rwce', [
            'rwcid' => 1,
            'lang' => 'el',
            'timecreated' => $time,
            'rwcetitle' => 'Χωρίς σύνδεση',
            'rwcetext' => 'Χωρίς σύνδεση',
        ]);
        $DB->insert_record('local_differentiator_rwce', [
            'rwcid' => 2,
            'lang' => 'el',
            'timecreated' => $time,
            'rwcetitle' => 'Σε σύνδεση',
            'rwcetext' => 'Σε σύνδεση',
        ]);

        // Table local_differentiator_rwe.
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 1,
            'lang' => 'el',
            'timecreated' => $time,
            'rwetitle' => 'Κείμενο',
            'rwetext' => 'ενός κειμένου',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 2,
            'lang' => 'el',
            'timecreated' => $time,
            'rwetitle' => 'Βιβλίο',
            'rwetext' => 'ενός βιβλίου',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 3,
            'lang' => 'el',
            'timecreated' => $time,
            'rwetitle' => 'Περιοδικό',
            'rwetext' => 'ενός περιοδικού',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 4,
            'lang' => 'el',
            'timecreated' => $time,
            'rwetitle' => 'Εφημερίδα',
            'rwetext' => 'μιας εφημερίδας',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 5,
            'lang' => 'el',
            'timecreated' => $time,
            'rwetitle' => 'Συνέντευξη',
            'rwetext' => 'μιας συνέντευξης',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 6,
            'lang' => 'el',
            'timecreated' => $time,
            'rwetitle' => 'Εγκυκλοπαίδεια',
            'rwetext' => 'μιας εγκυκλοπαίδειας',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 7,
            'lang' => 'el',
            'timecreated' => $time,
            'rwetitle' => 'Εμπειρογνώμονες',
            'rwetext' => 'εμπειρογνωμόνων',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 8,
            'lang' => 'el',
            'timecreated' => $time,
            'rwetitle' => 'Ιστότοπος',
            'rwetext' => 'ενός ιστοτόπου',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 9,
            'lang' => 'el',
            'timecreated' => $time,
            'rwetitle' => 'Βικιπαίδεια',
            'rwetext' => 'Βικιπαίδεια',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 10,
            'lang' => 'el',
            'timecreated' => $time,
            'rwetitle' => 'Εγκυκλοπαίδεια σε σύνδεση',
            'rwetext' => 'μιας εγκυκλοπαίδειας σε σύνδεση',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 11,
            'lang' => 'el',
            'timecreated' => $time,
            'rwetitle' => 'Χρονικά',
            'rwetext' => 'ενός χρονικού',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 12,
            'lang' => 'el',
            'timecreated' => $time,
            'rwetitle' => 'Άρθρο',
            'rwetext' => 'ενός άρθρου',
        ]);
        $DB->insert_record('local_differentiator_rwe', [
            'rwid' => 13,
            'lang' => 'el',
            'timecreated' => $time,
            'rwetitle' => 'Εμπειρογνωμόνων',
            'rwetext' => 'εμπειρογνωμόνων',
        ]);

        // Table local_differentiator_tswce.
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 1,
            'lang' => 'el',
            'timecreated' => $time,
            'tswcetitle' => 'Ενθυμούμενος',
            'tswcetext' => 'Ενθυμούμενος',
        ]);
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 2,
            'lang' => 'el',
            'timecreated' => $time,
            'tswcetitle' => 'Κατανοώντας',
            'tswcetext' => 'Κατανοώντας',
        ]);
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 3,
            'lang' => 'el',
            'timecreated' => $time,
            'tswcetitle' => 'Εφαρμόζοντας',
            'tswcetext' => 'Εφαρμόζοντας',
        ]);
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 4,
            'lang' => 'el',
            'timecreated' => $time,
            'tswcetitle' => 'Αναλύοντας',
            'tswcetext' => 'Αναλύοντας',
        ]);
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 5,
            'lang' => 'el',
            'timecreated' => $time,
            'tswcetitle' => 'Αξιολογώντας',
            'tswcetext' => 'Αξιολογώντας',
        ]);
        $DB->insert_record('local_differentiator_tswce', [
            'tswcid' => 6,
            'lang' => 'el',
            'timecreated' => $time,
            'tswcetitle' => 'Δημιουργώντας',
            'tswcetext' => 'Δημιουργώντας',
        ]);

        // Table local_differentiator_tswe.
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 1,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Θυμάμαι',
            'tswetext' => 'θυμάμαι',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 2,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Επαναλαμβάνω',
            'tswetext' => 'επαναλαμβάνω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 3,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Όνομα',
            'tswetext' => 'όνομα',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 4,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Αναφορά',
            'tswetext' => 'αναφορά',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 5,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Αναφέρω',
            'tswetext' => 'αναφέρω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 6,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Εκφράζω',
            'tswetext' => 'εκφράζω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 7,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Ορίζω',
            'tswetext' => 'ορίζω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 8,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Διευκρινίζω',
            'tswetext' => 'διευκρινίζω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 9,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Αναγνωρίζω',
            'tswetext' => 'αναγνωρίζω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 10,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Συγκρίνω',
            'tswetext' => 'συγκρίνω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 11,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Εμφανίζω',
            'tswetext' => 'εμφανίζω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 12,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Εξηγώ',
            'tswetext' => 'εξηγώ',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 13,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Επιλέγω',
            'tswetext' => 'επιλέγω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 14,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Περιγράφω',
            'tswetext' => 'περιγράφω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 15,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Καταχωρίζω',
            'tswetext' => 'καταχωρίζω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 16,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Στηρίζω',
            'tswetext' => 'στηρίζω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 17,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Συνοψίζω',
            'tswetext' => 'συνοψίζω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 18,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Διακρίνω',
            'tswetext' => 'διακρίνω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 19,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Ερμηνεύω',
            'tswetext' => 'ερμηνεύω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 20,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Επιλύω',
            'tswetext' => 'επιλύω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 21,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Απεικονίζω',
            'tswetext' => 'απεικονίζω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 22,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Κρίνω',
            'tswetext' => 'κρίνω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 23,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Μετρώ',
            'tswetext' => 'μετρώ',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 24,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Περιγράφω',
            'tswetext' => 'περιγράφω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 25,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Υλοποιώ',
            'tswetext' => 'υλοποιώ',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 26,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Υπολογίζω',
            'tswetext' => 'υπολογίζω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 27,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Εκτελώ',
            'tswetext' => 'εκτελώ',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 28,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Εξετάζω',
            'tswetext' => 'εξετάζω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 29,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Ερωτώ',
            'tswetext' => 'ερωτώ',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 30,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Παρουσιάζω',
            'tswetext' => 'παρουσιάζω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 31,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Αντιπαρατίθεμαι',
            'tswetext' => 'αντιπαρατίθεμαι',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 32,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Κριτικάρω',
            'tswetext' => 'κριτικάρω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 33,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Αναλύω',
            'tswetext' => 'αναλύω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 34,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Κάνω διάγνωση',
            'tswetext' => 'κάνω διάγνωση',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 35,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Αντανακλώ',
            'tswetext' => 'αντανακλώ',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 36,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Συμπεραίνω',
            'tswetext' => 'συμπεραίνω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 37,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Επιλέγω',
            'tswetext' => 'επιλέγω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 38,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Προτείνω',
            'tswetext' => 'προτείνω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 39,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Αξιολογώ',
            'tswetext' => 'αξιολογώ',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 40,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Αποτιμώ',
            'tswetext' => 'αποτιμώ',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 41,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Αποφασίζω',
            'tswetext' => 'αποφασίζω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 42,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Δικαιολογώ',
            'tswetext' => 'δικαιολογώ',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 43,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Επιβραβεύω',
            'tswetext' => 'επιβραβεύω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 44,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Συνθέτω',
            'tswetext' => 'συνθέτω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 45,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Διανοούμαι',
            'tswetext' => 'διανοούμαι',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 46,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Επεκτείνω',
            'tswetext' => 'επεκτείνω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 47,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Αναπτύσσω',
            'tswetext' => 'αναπτύσσω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 48,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Σχεδιάζω',
            'tswetext' => 'σχεδιάζω',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 49,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Δημιουργώ',
            'tswetext' => 'δημιουργώ',
        ]);
        $DB->insert_record('local_differentiator_tswe', [
            'tswid' => 50,
            'lang' => 'el',
            'timecreated' => $time,
            'tswetitle' => 'Χτίζω',
            'tswetext' => 'χτίζω',
        ]);

        // Plugin savepoint reached.
        upgrade_plugin_savepoint(true, 2020020100, 'local', 'differentiator');
    }
    return true;
}
