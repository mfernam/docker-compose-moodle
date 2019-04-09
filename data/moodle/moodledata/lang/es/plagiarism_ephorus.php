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
 * Strings for component 'plagiarism_ephorus', language 'es', branch 'MOODLE_35_STABLE'
 *
 * @package   plagiarism_ephorus
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_connection'] = 'Compruebe la conexión';
$string['default'] = 'Predeterminado';
$string['default_processtype'] = 'Tipo de proceso predeterminado';
$string['default_processtype_help'] = '<p>Existen dos formas predefinidas de envío de documentos a Ephorus:</p>
<ul>
<li>Predeterminado: los documentos que envíe serán analizados en busca de plagio y se usarán como material de referencia en el futuro. </li>
<li>Privado: el documento será analizado en busca de plagio, pero no se usará como material de referencia.</li>
</ul>';
$string['detailed'] = 'Detallado';
$string['document'] = 'Documento';
$string['document_information'] = 'Información del documento';
$string['document_not_found'] = 'Documento no encontrado.';
$string['document_not_found_msg'] = 'No se pudo encontrar el documento.';
$string['document_protected'] = 'Documento protegido';
$string['document_protected_msg'] = 'El documento está protegido con contraseña y no ha podido ser analizado.';
$string['document_written_by'] = 'Documento escrito por %s (%s)';
$string['duplicate_document'] = 'Documento duplicado';
$string['duplicate_document_download'] = 'Descargar el documento';
$string['duplicate_document_msg'] = 'Este documento ha sido entregado anteriormente.';
$string['ephorus'] = 'Ephorus';
$string['ephorus_logging'] = 'Registro de Ephorus';
$string['ephorus_logging_help'] = '<p>Registro de Ephorus activa registro adicional</p>';
$string['ephorus_report'] = 'Informe de Ephorus';
$string['ephorus_settings'] = 'Ajustes de Ephorus';
$string['ephorus_status'] = 'Estado de Ephorus';
$string['found_by_ephorus'] = 'Encontrado';
$string['handin_address'] = 'Dirección de entrega';
$string['handin_code'] = 'Código de entrega';
$string['handin_index_not_okay'] = 'La dirección del índice y la dirección de entrega no tienen conexión';
$string['handin_index_okay'] = 'La dirección del índice y la dirección de entrega tienen conexión';
$string['handin_not_okay'] = 'La dirección de entrega no tiene conexión';
$string['handin_okay'] = 'La dirección de entrega tiene conexión';
$string['index_address'] = 'Dirección del índice';
$string['index_not_okay'] = 'La dirección del índice no tiene conexión';
$string['index_okay'] = 'La dirección del índice tiene conexión';
$string['link_original_report'] = 'Ver informe original';
$string['no_results_found'] = 'No se han encontrado resultados para este documento.';
$string['not_enough_text'] = 'Texto insuficiente';
$string['not_enough_text_msg'] = 'El documento no contiene suficiente texto para poder realizar un análisis de plagio fiable.';
$string['no_text'] = 'No hay texto';
$string['no_text_msg'] = 'El documento no contiene ningún texto y no se ha podido realizar análisis de plagio.';
$string['original_document_by'] = 'El documento original fue entregado por %s (%s) el %s';
$string['original_document_by_no_date'] = 'El documento original fue entregado por %s (%s)';
$string['original_report'] = 'Informe original';
$string['original_text'] = 'Original';
$string['pluginname'] = 'Prevención de plagio de Ephorus';
$string['private'] = 'Privado';
$string['processing'] = 'Procesando';
$string['processing_msg'] = 'Ephorus está realizando un análisis de plagio del documento y en breve estará disponible el informe.';
$string['processtype'] = 'Tipo de proceso';
$string['processtype_help'] = '<p>Hay tres posibles tipos de proceso para los archivos enviados a Ephorus:</p>
<ul>
<li>Predeterminado: los documentos que envíe serán analizados en busca de plagio y se usarán como material de referencia en el futuro. </li>
<li>Referencia: el documento no será analizado en busca de plagio, pero se usará como material de referencia.</li>
<li>Privado: el documento será analizado en busca de plagio, pero no se usará como material de referencia.</li>
</ul>';
$string['reference'] = 'Referencia';
$string['saved_settings'] = 'Ajustes de Ephorus guardados';
$string['send_document_manually'] = 'Enviar manualmente el archivo a Ephorus.';
$string['student'] = 'Estudiante';
$string['student_disclosure'] = 'Declaración a los estudiantes';
$string['student_disclosure_help'] = '<p>Este texto se mostrará a todos los estudiantes en la página de entrega de archivos.</p>';
$string['submission_date'] = 'Fecha de entrega';
$string['summary'] = 'Resumen';
$string['total_score'] = 'Puntuación total';
$string['unfinalized_file'] = 'Archivo no finalizado';
$string['unknown_error'] = 'Error desconocido';
$string['unknown_error_msg'] = 'Se ha producido un error desconocido.';
$string['unknown_file_error'] = 'No se ha podido enviar el archivo';
$string['unknown_file_error_msg'] = 'No se ha podido enviar el archivo';
$string['unsupported_file_type'] = 'Tipo de archivo no soportado';
$string['unsupported_file_type_msg'] = 'Ephorus no soporta este tipo de archivo';
$string['update_sources'] = 'Actualizar fuentes';
$string['use_cron'] = 'Usar Ephorus en el cron de Moodle';
$string['use_cron_help'] = '<p>Normalmente el script de entrega es invocado desde el cron (programador de tareas) de Moodle, desmarque esta casilla para desactivar esta funcionalidad.</p>
<p>Será necesario establecer otra tarea programada para el script de entrega.</p>';
$string['use_ephorus'] = 'Activar Ephorus';
$string['wait_for_sending'] = 'En espera de envío';
$string['wait_for_sending_msg'] = 'Esperando para enviar el documento a Ephorus';
$string['xsl_not_enabled'] = 'La extensión XSL no está activada. Se necesita para poder mostrar los informes.';
