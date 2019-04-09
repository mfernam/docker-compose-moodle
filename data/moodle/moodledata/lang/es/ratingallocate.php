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
 * Strings for component 'ratingallocate', language 'es', branch 'MOODLE_35_STABLE'
 *
 * @package   ratingallocate
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['choice_added_notification'] = 'Opción guardada.';
$string['choice_deleted_notification'] = 'Opción "{$a}" fue borrada.';
$string['choice_explanation'] = 'Descripción (opcional)';
$string['choice_maxsize'] = 'Número máximo de participantes';
$string['choice_maxsize_display'] = 'Número máximo de alumnos';
$string['choicestatusheading'] = 'Estado';
$string['choice_table_active'] = 'Activo';
$string['choice_table_explanation'] = 'Descripción';
$string['choice_table_maxsize'] = 'Tamaño máximo';
$string['choice_table_title'] = 'Título';
$string['choice_table_tools'] = 'Editar';
$string['choice_title'] = 'Título';
$string['choice_title_help'] = 'Título de la opción. *Atención* todas las opciones activas se mostrarán mientras se ordene por título.';
$string['configalgorithmtimeout'] = 'El tiempo en segundos tras el cual se supone que el algoritmo se ha atascado.
La ejecución actual se finaliza y se marca como fallida.';
$string['confirm_start_distribution'] = 'Ejecutar el algoritmo borrará todas las asignaciones actuales si las hubiera. ¿Está seguro de querer continuar?';
$string['create_moodle_groups'] = 'Crear grupos a partir de la asignación';
$string['crontask'] = 'Asignación automática para la Asignación Justa';
$string['deletechoice'] = 'Suprimir opción';
$string['delete_choice'] = 'Suprimir opción';
$string['deleteconfirm'] = '¿Realmente desea suprimir la opción "{$a}"?';
$string['distribution_algorithm'] = 'Algoritmo de distribución';
$string['distribution_published'] = 'La asignación se ha publicado.';
$string['distribution_saved'] = 'Distribución guardada (en {$a}s).';
$string['distribution_table'] = 'Tabla de distribución';
$string['download_problem_mps_format'] = 'Descargar ecuación (mps/txt)';
$string['edit_choice'] = 'Editar opción';
$string['edit_rating'] = 'Editar puntuación';
$string['err_maximum'] = 'El valor máximo para este campo es {$a}.';
$string['err_minimum'] = 'El valor mínimo para este campo es {$a}.';
$string['err_positivnumber'] = 'Debe proporcionar un número positivo aquí.';
$string['err_required'] = 'Tiene que proporcionar un valor para este campo.';
$string['export_choice_text_suffix'] = '- Texto';
$string['export_options'] = 'Opciones de exportación';
$string['groupingname'] = 'Creado desde Asignación Justa "{$a}"';
$string['invalid_dates'] = 'Los datos no son válidos. La fecha de inicio debe ser anterior a la fecha de fin.';
$string['invalid_publishdate'] = 'La fecha de publicación no es válida. La fecha de publicación debe ser posterior a la finalización de la puntuación.';
$string['last_algorithm_run_date'] = 'Último algoritmo ejecutado en';
$string['last_algorithm_run_date_none'] = '-';
$string['last_algorithm_run_status'] = 'Estado de la última ejecución';
$string['last_algorithm_run_status_0'] = 'Sin empezar';
$string['last_algorithm_run_status_1'] = 'Ejecutando';
$string['last_algorithm_run_status_-1'] = 'Fallido';
$string['last_algorithm_run_status_2'] = 'Exitoso';
$string['log_allocation_published'] = 'Asignación publicada';
$string['log_allocation_published_description'] = 'El usuario con identificador "{$a->userid}" publicó el reparto para la Asignación Justa con el identificador "{$a->ratingallocateid}".';
$string['log_allocation_statistics_viewed'] = 'Estadísticas de reparto vistas';
$string['log_allocation_statistics_viewed_description'] = 'El usuario con identificador "{$a->userid}" vió el reparto para la Asignación Justa con el identificador "{$a->ratingallocateid}".';
$string['log_allocation_table_viewed'] = 'Tabla de reparto vista';
$string['log_allocation_table_viewed_description'] = 'El usuario con identificador "{$a->userid}" vió la tabla de reparto para la Asignación Justa con el identificador "{$a->ratingallocateid}".';
$string['log_distribution_triggered'] = 'Distribución activada';
$string['log_distribution_triggered_description'] = 'El usuario con identificador "{$a->userid}" activó la distribución para la Asignación Justa con el identificador "{$a->ratingallocateid}". El algoritmo necesitó {$a->time_needed} segundos.';
$string['log_manual_allocation_saved'] = 'Reparto manual guardado';
$string['log_manual_allocation_saved_description'] = 'El usuario con identificador "{$a->userid}" guardó el reparto manual para la Asignación Justa con el identificador "{$a->ratingallocateid}".';
$string['strategy_order_name'] = 'Opciones del ranking';
