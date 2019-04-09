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
 * Strings for component 'local_onenote', language 'es', branch 'MOODLE_35_STABLE'
 *
 * @package   local_onenote
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connction_error'] = 'No se puede abrir la página de OneNote debido a un error de conexión. Por favor, inténtelo nuevamente tras unos minutos.';
$string['errorfeedbackinstudentcontext'] = 'Se intentó crear retroalimentación en el contexto del envío del estudiante.';
$string['error_noapiavailable'] = 'No está disponible la API de OneNote. Si está usando la extensión de Office 365, no podemos contactar con OneNote. De lo contrario, por favor instale local_msaccount.';
$string['errornopostdata'] = 'No se pudieron crear datos de página para enviar a OneNote.';
$string['erroronenoteapibadcall'] = 'Error en la llamada de la API.';
$string['erroronenoteapibadcall_message'] = 'Error en la llamada de la API: {$a}';
$string['errorsubmissioninteachercontext'] = 'Se intentó crear un envío en el contexto de un profesor calificando.';
$string['feedbacktitle'] = 'Retroalimentación: {$a->assign_name} [{$a->student_firstname} {$a->student_lastname}]';
$string['onenote_page_error'] = 'No se pudo abrir la página de OneNote para esta entrega o retroalimentación.';
$string['pluginname'] = 'Microsoft OneNote';
$string['submissiontitle'] = 'Entrega: {$a->assign_name} [{$a->student_firstname} {$a->student_lastname}]';
