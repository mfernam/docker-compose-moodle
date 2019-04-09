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
 * Strings for component 'plagiarism_unplag', language 'es', branch 'MOODLE_33_STABLE'
 *
 * @package   plagiarism_unplag
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attempts'] = 'Intentos realizados';
$string['check_all_submitted_assignments'] = 'Revisar todos los trabajos entregados';
$string['check_confirm'] = '¿Está seguro de que quiere empezar la comprobación con el plugin de prevención de plagio UNPLAG?';
$string['check_file'] = 'Iniciar escaneo';
$string['check_start'] = 'Calculando grado de originalidad de Unplag';
$string['check_type'] = 'Modo de detección de plagio';
$string['cronwarning'] = 'El script de mantenimiento <a href="../../admin/cron.php">cron.php</a> no ha sido ejecutado durante al menos 30 minutos – Cron debe estar configurado para permitir a UNPLAG funcionar correctamente.';
$string['defaultsdesc'] = 'Los siguientes ajustes son los predeterminados cuando se activa UNPLAG dentro de un Módulo de Actividad';
$string['defaultupdated'] = 'Valores por defecto actualizados';
$string['delete'] = 'Eliminar';
$string['deletedwarning'] = 'No se pudo encontrar este archivo; es posible que el usuario lo haya eliminado.';
$string['exclude_citations'] = 'Excluir automáticamente citas y referencias';
$string['exclude_self_plagiarism'] = 'Excluir autoplagio';
$string['explainerrors'] = 'Esta página muestra todos los archivos que se encuentran en estado de error. <br/> Cuando los archivos son eliminados en esta página, no podrán ser reenviados para comprobarlos y los errores no se mostrarán a los profesores o estudiantes';
$string['file'] = 'Archivo';
$string['filedeleted'] = 'Archivo eliminado de la lista';
$string['filereset'] = 'Se ha restablecido un archivo para volver a comprobarlo con UNPLAG';
$string['fileresubmitted'] = 'Archivo puesto en cola para reenvío';
$string['generalinfo'] = 'Información general';
$string['getscore'] = 'Obtener la puntuación';
$string['heldevents'] = 'Eventos realizados';
$string['heldeventsdescription'] = 'Se trata de comprobaciones que no se completaron en el primer intento y se colocaron en la lista, para volver a ser comprobados, lo que impide que los sucesos posteriores se completen y pueden necesitar más información. Algunas de estas comprobaciones pueden no ser relevantes para UNPLAG.';
$string['id'] = 'ID';
$string['identifier'] = 'Identificador';
$string['max_100000_words'] = 'El(los) archivo(s) no pueden contener más de 100 000 palabras ni tener un tamaño superior a 70MB';
$string['min_30_words'] = 'Se requieren al menos 30 palabras';
$string['module'] = 'Módulo';
$string['my_library'] = 'Doc vs Biblioteca';
$string['name'] = 'Nombre';
$string['no_index_files'] = 'Excluir trabajos enviados de la Biblioteca de la Institución';
$string['noreceiver'] = 'No se ha especificado la dirección del receptor';
$string['pending'] = 'Archivo pendiente para su comprobación por UNPLAG';
$string['plagiarism'] = 'Plagio potencial';
$string['plagiarism_run_success'] = 'Archivo enviado para la detección del plagio';
$string['pluginname'] = 'Plugin de detección de plagio UNPLAG';
$string['previouslysubmitted'] = 'Previamente presentado como';
$string['processing'] = 'Este archivo ha sido enviado a UNPLAG, ahora se encuentra a la espera de que el análisis esté disponible';
$string['progress'] = 'Escaneando';
$string['receivernotvalid'] = 'La dirección de destinatario no válida.';
$string['refresh'] = 'Actualice la página para ver los resultados';
$string['report'] = 'Ver el Informe completo';
$string['reportready'] = 'El Informe está preparado';
$string['resubmit'] = 'Reenviar';
$string['savedconfigfailed'] = 'Se ha introducido una combinación ID de Cliente / API Secreta incorrecta. UNPLAG ha sido desactivado, por favor inténtelo de nuevo.';
$string['savedconfigsuccess'] = 'Ajustes de detección de plagio guardados';
$string['scoreavailable'] = 'Este archivo fue procesado por UNPLAG y el Informe está disponible.';
$string['scorenotavailableyet'] = 'UNPLAG aún no ha procesado este archivo.';
$string['showwhenclosed'] = 'Cuando la Actividad está cerrada';
$string['similarity'] = 'Similitud';
$string['similarity_sensitivity'] = 'Omitir fuentes con el porcentaje de similitud inferior a (%)';
$string['status'] = 'Estado';
$string['studentdisclosure'] = 'Notificar al estudiante sobre la Política de Privacidad de UNPLAG';
$string['studentdisclosuredefault'] = 'Todos los archivos subidos serán sometidos al sistema de detección de plagio UNPLAG.';
$string['studentdisclosure_help'] = 'Este texto se mostrará a todos los estudiantes en la página de carga del archivo.';
$string['studentemailcontent'] = 'El archivo que envió a {$a->modulename} en {$a->coursename} ya ha sido procesado por el sistema de detección de plagios UNPLAG {$a->modulelink}';
$string['studentemailsubject'] = 'Archivo procesado por UNPLAG';
$string['submitondraft'] = 'Comprobar el archivo cuando se sube por primera vez';
$string['submitonfinal'] = 'Comprobar el archivo cuando el estudiante lo envía para evaluación';
$string['toolarge'] = 'Este archivo es muy grande para procesarlo con UNPLAG';
$string['unknownwarning'] = 'Se ha producido un error al enviar este archivo al UNPLAG';
$string['unplag'] = 'Plugin de detección de plagio UNPLAG';
$string['unplag_api_secret'] = 'API Secreta';
$string['unplag_api_secret_help'] = 'API Secreta proporcionada por UNPLAG para acceder a la API. Puede encontrarla en <a href="https://unplag.com/profile/apisettings">https://unplag.com/profile/apisettings</a>';
$string['unplag_client_id'] = 'ID de Cliente';
$string['unplag_client_id_help'] = 'ID de cliente proporcionada por UNPLAG para acceder a API. Puede encontrarla en <a href="https://unplag.com/profile/apisettings">https://unplag.com/profile/apisettings</a>';
$string['unplagdebug'] = 'Depuración';
$string['unplagdefaults'] = 'Ajustes predeterminados de UNPLAG';
$string['unplag_draft_submit'] = 'Cuando debe enviarse el archivo a UNPLAG';
$string['unplag:enable'] = 'Permitir a los profesores activar/desactivar UNPLAG dentro de una actividad';
$string['unplag_enableplugin'] = 'UNPLAG activado para {$a}';
$string['unplagfiles'] = 'Archivos de UNPLAG';
$string['unplag_lang'] = 'Idioma';
$string['unplag_lang_help'] = 'Código de idioma suministrado por UNPLAG';
$string['unplag:resetfile'] = 'Permitir al profesor volver a comprobar un archivo con UNPLAG después de producirse un error';
$string['unplag_settings_url_text'] = 'Abra la cuenta del Administrador en unplag.com para ver/copiar ID del Cliente/ API Secreta';
$string['unplag_show_student_report'] = 'Mostrar el informe de similitud al estudiante';
$string['unplag_show_student_report_help'] = 'El informe de similitud proporciona la lista de las partes del envío plagiadas y las fuentes donde UNPLAG ha encontrado este contenido';
$string['unplag_show_student_score'] = 'Mostrar grado de similitud al estudiante';
$string['unplag_show_student_score_help'] = 'El porcentaje de similitud es el porcentaje del texto que coincide con el contenido de otras fuentes.';
$string['unplag_studentemail'] = 'Enviar un mensaje al estudiante';
$string['unplag_studentemail_help'] = 'Se le enviará un correo electrónico al estudiante cuando se haya procesado su archivo para hacerle saber que su informe está disponible.';
$string['unplag:vieweditreport'] = 'Permitir al Profesor ver y modificar el informe completo de Unplag';
$string['unplag:viewreport'] = 'Permitir al profesor ver el informe completo de UNPLAG';
$string['unsupportedfiletype'] = 'UNPLAG no soporta este tipo de archivo';
$string['use_unplag'] = 'Activar UNPLAG';
$string['useunplag_assign_desc_param'] = 'Para desbloquear los ajustes de Unplag';
$string['useunplag_assign_desc_value'] = 'Establecer ajustes de entrega →  Requerir que los estudiantes hagan clic en Entregar = Sí';
$string['use_unplag_help'] = 'Para utilizar el plugin de Unplag, active la opción "Requerir que los estudiantes hagan clic en Entregar", poniendo Sí (Configuración de entrega)';
$string['waitingevents'] = 'Hay {$a->countallevents} eventos en espera del cron y {$a->countheld} eventos que están retenidos para volver a ser comprobados';
$string['web'] = 'Doc vs Internet';
$string['web_and_my_library'] = 'Doc vs Internet + Biblioteca';
