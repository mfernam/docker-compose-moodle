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
 * Strings for component 'format_periods', language 'es', branch 'MOODLE_34_STABLE'
 *
 * @package   format_periods
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['currentsection'] = 'Este periodo';
$string['customdatesformat'] = 'Por defecto';
$string['datesformat'] = 'Formato de fecha';
$string['datesformatcustom'] = 'Formato de fecha por defecto';
$string['datesformatcustom_help'] = 'Especifica un formato de fecha por defecto. Consulte <a href="http://php.net/manual/en/function.strftime.php" target="_blank">php manual</a> para la sintaxis';
$string['datesformat_help'] = 'Seleccione el formato de las fechas que se muestra en el nombre de periodo por defecto';
$string['deletesection'] = 'Borrar periodo';
$string['editsection'] = 'Editar periodo';
$string['editsectionname'] = 'Editar nombre de periodo';
$string['futuresneakpeek_help'] = 'Tratar los periodos que empiezan antes de este intervalo como si fuera el que está en curso (por ejemplo, esto podría permitir a los estudiantes ver los primeros dos días de la próxima semana antes de que termine la semana en curso)';
$string['hidecompletely'] = 'Ocultar completamente';
$string['hidefromcourseview'] = 'Ocultar en la página del curso';
$string['hidefromothers'] = 'Ocultar periodo';
$string['newsectionname'] = 'Nuevo nombre para el periodo {$a}';
$string['notavailable'] = 'Aún no disponible';
$string['numberperiods'] = 'Número de periodos';
$string['page-course-view-periods'] = 'Cualquier página principal del curso en formato de periodos';
$string['page-course-view-periods-x'] = 'Cualquier página del curso en formato de periodos';
$string['perioddurationdefault'] = 'Duración del periodo por defecto';
$string['perioddurationdefault_help'] = 'Establezca la duración de un periodo. Esta puede ser modificada para periodos individuales';
$string['perioddurationoverride'] = 'Modificar la duración del periodo';
$string['perioddurationoverride_help'] = 'Establezca la duración para este periodo. Si no se hace, se aplicará el valor por defecto del curso';
$string['pluginname'] = 'Formato de periodos';
$string['sameascurrent'] = 'Lo mismo que en los periodos en curso';
$string['sameaspast'] = 'Lo mismo que en los periodos pasados';
$string['section0name'] = 'General';
$string['sectiondates'] = 'Fechas del periodo:  <b>{$a->dates}</b>';
$string['sectiondatesduration'] = 'Fechas del periodo: <b>{$a->dates}</b>; Duración del periodo: <b>{$a->duration}</b>';
$string['sectionduration'] = 'Duración del periodo: <b>{$a->duration}</b>';
$string['sectionname'] = 'Periodo';
$string['showcollapsed'] = 'Mostrar cada periodo como un enlace a su propia página';
$string['showexpanded'] = 'Mostrar todos los periodos en una página';
$string['showfromothers'] = 'Mostrar periodo';
$string['showfutureperiods'] = 'Mostrar futuros periodos';
$string['showfutureperiods_help'] = 'Permitir que se muestren automáticamente los periodos futuros como enlaces o como no disponibles, o esconderlos completamente';
$string['shownotavailable'] = 'Mostrar como no disponible';
$string['showpastcompleted'] = 'Mostrar periodos pasados completados';
$string['showpastcompleted_help'] = 'Define cómo mostrar periodos pasados cuando todas las actividades se hayan completado.';
$string['showpastperiods'] = 'Mostrar periodos pasados';
$string['showpastperiods_help'] = 'Define si mostrar o esconder los periodos que tienen una fecha final en el pasado. "Esconder en la página del curso" significa que las actividades no se mostrarán en la página del curso, pero sí estarán visibles en el informe de calificaciones y en otros.';
$string['showperiods'] = 'Mostrar periodos en curso';
$string['showperiods_help'] = 'Define cómo mostrar los periodos por defecto. Esto puede ser modificado para periodos pasados o futuros afectados';
