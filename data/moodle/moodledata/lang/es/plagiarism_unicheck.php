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
 * Strings for component 'plagiarism_unicheck', language 'es', branch 'MOODLE_35_STABLE'
 *
 * @package   plagiarism_unicheck
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['api_secret'] = 'Secreto de API';
$string['api_secret_help'] = 'El Secreto de API proporcionado por Unicheck para activar el plugin de Moodle. Puede encontrarlo en <a href="https://corp.unicheck.com/profile/apisettings">https://corp.unicheck.com/profile/apisettings</a>';
$string['archive:limitreachedfulldescription'] = 'Hay más documentos en el archivo "{$a->filename}", pero no han sido analizados ya que el máximo de documentos a analizar dentro de un archivo zip es {$a->max_supported_count}. Para modificar este valor, póngase en contacto con el administrador de esta instalación de Moodle';
$string['archive:limitreachedshortdescripton'] = 'No todos los documentos han sido analizados';
$string['attempts'] = 'Intentos realizados';
$string['check_all_submitted_assignments'] = 'Verificar los trabajos ya entregados';
$string['check_all_submitted_assignments_help'] = 'En el caso de que Unicheck haya sido desactivado o si quiere generar informes para las entregas anteriores, active esta opción y guarde los ajustes de la tarea. Esto iniciará la revisión masiva de todos los trabajos (archivos y/o textos) enviados para la revisión. La revisión empezará en unos minutos después de activar esta opción.';
$string['check_confirm'] = '¿Está seguro de que quiere empezar la verificación con el plugin de detección de plagio Unicheck?';
$string['check_file'] = 'Comenzar escaneo';
$string['check_start'] = 'Calculando el porcentaje de originalidad';
$string['check_type'] = 'Fuentes para comparar';
$string['check_type_help'] = 'a) Internet - una colección de internet de miles de millones de recursos en línea (artículos, páginas web, publicaciones de blog, noticias, archivos, etc.). Esta fuente incluye las publicaciones de libre acceso en repositorios, revistas y las publicaciones en las páginas personales de autores.
<br>b) Biblioteca Institucional de Unicheck - colección de los trabajos estudiantiles en la cuenta de esta institución. Los archivos se añaden a la colección sólo cuando la opción "Añadir a la Biblioteca Institucional de Unicheck" esté activada.
<br>c) Base de datos externa - fuentes de datos de texto adicionales en la cuenta de esta institución (por ejemplo, trabajos anteriores de los alumnos)';
$string['client_id'] = 'ID de Cliente';
$string['client_id_help'] = 'ID de Cliente proporcionado por Unicheck para identificar la cuenta de Unicheck. Puede encontrarlo en <a href="https://corp.unicheck.com/profile/apisettings">https://corp.unicheck.com/profile/apisettings</a>';
$string['cronwarning'] = 'El script de mantenimiento <a href="../../admin/cron.php">cron.php</a> no se ejecutó durante 30 minutos - Cron debe estar configurado para permitir que Unicheck funcione correctamente.';
$string['defaultsdesc'] = 'Configuración predeterminada para nuevas tareas: Elija entre las opciones junto a los siguientes ítems para configurar los ajustes predeterminados para nuevas tareas. Los docentes pueden ajustar las configuraciones disponibles en las tareas';
$string['defaultupdated'] = 'Valores predeterminados actualizados';
$string['delete'] = 'Eliminar';
$string['deletedwarning'] = 'Archivo no encontrado - puede que lo haya eliminado el usuario';
$string['draft_submit'] = '¿Cuándo debería enviarse el archivo a Unicheck?';
$string['enable_api_logging'] = 'Activar el registro por API';
$string['enable_api_logging_help'] = 'Marque esta casilla para activar el registro por API en esta instancia de Moodle. Esta opción muestra los datos brutos de solicitud/respuesta de API de Unicheck';
$string['enable_mod_assign'] = 'Activar Unicheck en la actividad Tarea';
$string['enable_mod_assign_help'] = 'Activar el Servicio de detección de plagio Unicheck para la actividad Tarea (textos en línea y envío de archivos disponibles)';
$string['enable_mod_forum'] = 'Activar Unicheck en la actividad Foro';
$string['enable_mod_forum_help'] = 'Activar el Servicio de detección de plagio Unicheck para la actividad Foro (respuestas de texto y entregas de archivos disponibles)';
$string['enable_mod_workshop'] = 'Activar Unicheck en la actividad Taller';
$string['enable_mod_workshop_help'] = 'Activar el Servicio de detección de plagio Unicheck para la actividad Taller (entregas de textos y archivos disponibles)';
$string['enable_plugin'] = 'Activar el Servicio de detección de plagio Unicheck';
$string['enable_plugin_help'] = 'Marque esta casilla para activar el Servicio de detección de plagio Unicheck en esta instancia de Moodle.';
$string['event:api_called'] = 'Solicitud de API';
$string['event:api_user_created'] = 'Usuario creado';
$string['event:archive_files_checked'] = 'Ficheros del archivo revisados';
$string['event:archive_files_unpacked'] = 'Ficheros del archivo desempaquetados y listos para la comprobación de similitud';
$string['event:archive_files_uploaded'] = 'Ficheros del archivo subidos';
$string['event:callback_accepted'] = 'Callback aceptado';
$string['event:error_handled'] = 'Error resuelto';
$string['event:file_similarity_check_completed'] = 'Comprobación de similitud completada';
$string['event:file_similarity_check_failed'] = 'Comprobación de similitud fallida';
$string['event:file_similarity_check_started'] = 'Comprobación de similitud empezada';
$string['event:file_upload_completed'] = 'Carga de archivos completada';
$string['event:file_upload_failed'] = 'Carga de archivos fallida';
$string['event:file_upload_started'] = 'Carga de archivos empezada';
$string['exclude_citations'] = 'Excluir referencias y citas';
$string['exclude_citations_help'] = 'Active esta opción para identificar y excluir referencias y citas. Unicheck identifica citas según las normas descritas en las guías de APA, MLA, Chicago, Turabian, Harvard. Las citas se resaltarán en azul y las referencias se marcarán en morado. Estos ítems serán excluidos de la calificación total de similitud.';
$string['exclude_self_plagiarism'] = 'Excluir autoplagio';
$string['exclude_self_plagiarism_help'] = 'Activa esta opción para excluir el autoplagio en el mismo curso. Las similitudes con las tareas de otros cursos serán igualmente reportados. <br> Esta opción tiene que ser activada antes de la entrega y no debe modificarse posteriormente.';
$string['explainerrors'] = 'Esta página enumera los archivos que se encuentran actualmente en un estado de error. <br/> Cuando se eliminen los archivos en esta página, no podrán ser reenviados, y los errores ya no se mostrarán a los profesores o estudiantes';
$string['external_database'] = 'Base de datos externa';
$string['file'] = 'Archivo';
$string['filedeleted'] = 'Archivo borrado de la cola';
$string['filereset'] = 'Un archivo se ha restablecido para su reenvío a Unicheck';
$string['fileresubmitted'] = 'Archivo puesto en cola para el reenvío';
$string['generalinfo'] = 'Información general';
$string['getscore'] = 'Obtener resultado';
$string['heldevents'] = 'Eventos realizados';
$string['heldeventsdescription'] = 'Estos son eventos que no se completaron en el primer intento y se pusieron en cola para su reenvío; esto evita que los eventos posteriores se completen y es posible que necesiten una investigación adicional. Algunos de estos eventos pueden no ser relevantes para Unicheck.';
$string['id'] = 'ID';
$string['identifier'] = 'Identificador';
$string['max_100000_words'] = 'El(los) archivo(s) no puede(n) contener más de 100 000 palabras y tener un tamaño superior a 70 MB';
$string['max_supported_archive_files_count'] = 'Número máximo de archivo a revisar en un archivo comprimido';
$string['max_supported_archive_files_count_help'] = 'Especifique el número máximo de archivos a ser revisados por Unicheck. El sistema elegirá sólo aquellos tipos de archivo que son admitidos por Unicheck y procesará archivos uno por uno. Los formatos admitidos son ZIP, RAR.';
$string['min_30_words'] = 'Se requieren al menos 30 palabras';
$string['module'] = 'Módulo';
$string['my_library'] = 'Biblioteca';
$string['name'] = 'Nombre';
$string['no_index_files'] = 'Añadir trabajos a la Biblioteca Institucional';
$string['no_index_files_help'] = 'Los trabajos de los alumnos se añaden a la Biblioteca Institucional privada sólo cuando esta opción esté activada. Los nuevos envíos se comparan con los trabajos almacenados en la Biblioteca Institucional, además de internet. Esta biblioteca sólo incluye trabajos entregados por los estudiantes de esta institución y no se comparte con otras instituciones.';
$string['noreceiver'] = 'Dirección del destinatario no especificada';
$string['pending'] = 'Este archivo está pendiente de envío a Unicheck';
$string['plagiarism'] = 'Posible plagio';
$string['plagiarismcheckerid'] = 'ID de Unicheck: {$a->id}';
$string['plagiarism_run_success'] = 'Archivo enviado para su revisión por plagio';
$string['pluginname'] = 'Detector de plagio Unicheck';
$string['previouslysubmitted'] = 'Enviado previamente como';
$string['privacy:export:plagiarism_unicheck:plagiarismpath'] = 'Detectando el plagio';
$string['privacy:export:plagiarism_unicheck:reportcontentdescription'] = 'Los resultados de detección de similitudes por Unicheck para textos en línea';
$string['privacy:export:plagiarism_unicheck:reportfiledescription'] = 'Los resultados de detección de similitudes por Unicheck para el archivo subido con pathnamehash {$a}';
$string['privacy:metadata:core_files'] = 'Archivos o textos en línea adjuntados a los formularios de los módulos de actividad donde el plugin de Unicheck está habilitado.';
$string['privacy:metadata:core_plagiarism'] = 'Este plugin recibe la llamada del subsistema antiplagio de Moodle.';
$string['privacy:metadata:plagiarism_external_unicheck_api'] = 'API de Unicheck';
$string['privacy:metadata:plagiarism_external_unicheck_api:domain'] = 'Dominio de servidor de Moodle';
$string['privacy:metadata:plagiarism_external_unicheck_api:filedata'] = 'Contenido del archivo subido';
$string['privacy:metadata:plagiarism_external_unicheck_api:fileformat'] = 'Extensión del archivo subido';
$string['privacy:metadata:plagiarism_external_unicheck_api:filename'] = 'Nombre de archivo subido';
$string['privacy:metadata:plagiarism_external_unicheck_api:submissionid'] = 'ID del contexto donde se sube el archivo';
$string['privacy:metadata:plagiarism_external_unicheck_api:useremail'] = 'Correo electrónico de usuario';
$string['privacy:metadata:plagiarism_external_unicheck_api:userfirstname'] = 'Nombre de Usuario';
$string['privacy:metadata:plagiarism_external_unicheck_api:userid'] = 'ID de Usuario';
$string['privacy:metadata:plagiarism_external_unicheck_api:userlastname'] = 'Apellido de Usuario';
$string['privacy:metadata:plagiarism_external_unicheck_api:userscope'] = 'Alcance de permisos de usuarios: profesor o estudiante';
$string['privacy:metadata:plagiarism_unicheck_files'] = 'Acumula la información sobre los archivos con plagio.';
$string['privacy:metadata:plagiarism_unicheck_files:attempt'] = 'Número de las comprobaciones de similitud de archivos';
$string['privacy:metadata:plagiarism_unicheck_files:check_id'] = 'ID de la comprobación de similitudes por Unicheck.';
$string['privacy:metadata:plagiarism_unicheck_files:errorresponse'] = 'La información sobre los errores que ocurrieron tras la comprobación de similitudes por Unicheck o a la hora de subir un archivo al servicio de Unicheck';
$string['privacy:metadata:plagiarism_unicheck_files:external_file_id'] = 'ID de archivo en el servicio de Unicheck.';
$string['privacy:metadata:plagiarism_unicheck_files:external_file_uuid'] = 'Token del archivo en el servicio Unicheck.';
$string['privacy:metadata:plagiarism_unicheck_files:filename'] = 'El nombre de archivo guardado.';
$string['privacy:metadata:plagiarism_unicheck_files:identifier'] = 'Pathnamehash del archivo guardado.';
$string['privacy:metadata:plagiarism_unicheck_files:metadata'] = 'Información adicional como el número de símbolos con plagio o el número de ficheros en el archivo que han sido omitidos';
$string['privacy:metadata:plagiarism_unicheck_files:similarityscore'] = 'El índice de similitud para el archivo subido.';
$string['privacy:metadata:plagiarism_unicheck_files:state'] = 'El estado de la detección de similitud del archivo.';
$string['privacy:metadata:plagiarism_unicheck_files:timesubmitted'] = 'Fecha de la subida del archivo.';
$string['privacy:metadata:plagiarism_unicheck_files:type'] = 'Tipo de fichero guardado: archivo o documento.';
$string['privacy:metadata:plagiarism_unicheck_files:userid'] = 'ID de estudiante.';
$string['privacy:metadata:plagiarism_unicheck_users'] = 'Guarda la información de usuarios';
$string['privacy:metadata:plagiarism_unicheck_users:external_token'] = 'Token de usuario en el servicio Unicheck';
$string['privacy:metadata:plagiarism_unicheck_users:external_user_id'] = 'ID de Usuario en el servicio Unicheck';
$string['privacy:metadata:plagiarism_unicheck_users:user_id'] = 'ID de estudiante o de profesor';
$string['processing'] = 'Este archivo fue enviado a Unicheck, ahora se está esperando a que el análisis esté disponible';
$string['progress'] = 'Unicheck está escaneando';
$string['receivernotvalid'] = 'La dirección del destinatario no es válida.';
$string['refresh'] = 'Actualice la página para ver los resultados';
$string['report'] = 'Ver el informe completo';
$string['reportready'] = 'El informe está preparado';
$string['resubmit'] = 'Reenviar';
$string['savedconfigfailed'] = 'Se ha introducido una combinación de ID de Cliente/Secreto de API incorrecta. Unicheck fue desactivado, por favor, inténtelo de nuevo.';
$string['savedconfigsuccess'] = 'Ajustes de detección de plagio guardados';
$string['scoreavailable'] = 'Este archivo ha sido analizado por Unicheck y el informe ya está disponible.';
$string['scorenotavailableyet'] = 'Este archivo todavía no ha sido analizado por Unicheck.';
$string['sent_student_report'] = 'Notificar a los estudiantes por correo electrónico';
$string['sent_student_report_help'] = 'Los estudiantes recibirán la información sobre los resultados de comprobación por correo electrónico.';
$string['show_student_report'] = 'Mostrar informes de similitud a los alumnos';
$string['show_student_report_help'] = 'Los estudiantes sólo ven los informes de similitud de sus propios trabajos y no ven los informes de otros estudiantes.';
$string['show_student_score'] = 'Mostrar calificaciones de similitud a los alumnos';
$string['show_student_score_help'] = 'Los estudiantes sólo ven los porcentajes de similitud de sus propios trabajos y no ven los porcentajes de otros estudiantes.';
$string['showwhenclosed'] = 'Cuando la Actividad esté cerrada';
$string['similarity'] = 'Similitud';
$string['similarity_sensitivity'] = 'Excluir fuentes con coincidencias inferiores a (%)';
$string['similarity_sensitivity_help'] = 'Las fuentes con el % de similitud inferior al especificado no se incluirán en la calificación total de similitud.';
$string['similarity_words_sensitivity'] = 'Excluir fuentes con coincidencias inferiores a (palabras)';
$string['similarity_words_sensitivity_help'] = 'Las fuentes con el número de palabras inferior al especificado (8 como mínimo) no se incluirán en la calificación total de similitud.';
$string['status'] = 'Estado';
$string['studentdisclosure'] = 'Familiarizar a los estudiantes con el Servicio de Plagio Unicheck';
$string['studentdisclosuredefault'] = 'Todos los archivos subidos serán enviados al sistema de detección de plagio de Unicheck.';
$string['studentdisclosure_help'] = 'Los alumnos verán este mensaje a la hora de cargar un archivo en una tarea en la que Unicheck esté activado.';
$string['studentemailcontent'] = 'El archivo enviado a {$a->modulename} en {$a->coursename} ya ha sido procesado por el sistema de detección de plagio de Unicheck {$a->modulelink}';
$string['studentemailsubject'] = 'Archivo analizado por Unicheck';
$string['submitondraft'] = 'Enviar el archivo cuando se cargue por primera vez';
$string['submitonfinal'] = 'Enviar el archivo cuando el estudiante lo envía para su calificación';
$string['sync_failed'] = 'Intentar sincronizar los archivos no procesados';
$string['toolarge'] = 'Este archivo es demasiado grande para ser analizado por Unicheck';
$string['ufiles'] = 'Archivos de Unicheck';
$string['ui:possiblecheating'] = 'Posible intento de trampa';
$string['ui:reportlink'] = '<span class="only-xxl-width">Abrir&nbsp;</span>Informe';
$string['unicheck'] = 'Detector de plagio Unicheck';
$string['unicheck:changeaddsubmissiontolibrarysetting'] = 'Permitir activar/desactivar la agregación de trabajos a la Biblioteca Institucional';
$string['unicheck:changecheckalreadysubmittedassignmentsetting'] = 'Permitir activar/desactivar la verificación de los trabajos de tareas ya completadas';
$string['unicheck:changeenableunichecksetting'] = 'Permitir activar/desactivar el Servicio de detección de plagio Unicheck en actividades';
$string['unicheck:changeexcludecitationssetting'] = 'Permitir activar/desactivar la exclusión de referencias y citas';
$string['unicheck:changeexcludeselfplagiarismsetting'] = 'Permitir activar/desactivar excluir el autoplagio en el curso';
$string['unicheck:changemaxsupportedarchivefilescountsetting'] = 'Permitir cambiar el número máximo de archivos a revisar en un archivo comprimido';
$string['unicheck:changesensitivitypercentagesetting'] = 'Permitir cambiar la exclusión de fuentes con coincidencia inferior a (%)';
$string['unicheck:changesentstudentreportsetting'] = 'Permitir activar/desactivar el envío del informe de estudiantes por correo electrónico';
$string['unicheck:changeshowstudentreportsetting'] = 'Permitir activar/desactivar la característica para mostrar los informes de similitud a los alumnos';
$string['unicheck:changeshowstudentscoresetting'] = 'Permitir activar/desactivar la característica para mostrar las calificaciones de similitud a los alumnos';
$string['unicheck:changesourcesforcomparisonsetting'] = 'Permitir cambiar fuentes para la comparación';
$string['unicheck:changewordsensitivitysetting'] = 'Permitir cambiar la exclusión de fuentes con coincidencia inferior a (palabras)';
$string['unicheck:checkfile'] = 'Permitir la verificación de un archivo por similitud';
$string['unicheckdebug'] = 'Depuración';
$string['unicheckdefaults'] = 'Ajustes predeterminados de Unicheck';
$string['unicheck_enable'] = 'Activar el plugin de Unicheck';
$string['unicheck:enable'] = 'Permitir activar/desactivar Unicheck dentro de una actividad';
$string['unicheck_lang'] = 'Idioma';
$string['unicheck_lang_help'] = 'Código del idioma proporcionado por Unicheck';
$string['unicheck:resetfile'] = 'Permitir el reenvío del archivo a Unicheck después de producirse un error';
$string['unicheck_settings_url_text'] = 'Abra la cuenta del administrador en unicheck.com para ver/copiar ID del Cliente/Secreto de API';
$string['unicheck:vieweditreport'] = 'Permitir ver y editar el informe completo de Unicheck';
$string['unicheck:viewreport'] = 'Permitir ver el informe completo de Unicheck';
$string['unicheck:viewsimilarity'] = 'Permitir ver el valor de similitud de Unicheck';
$string['unknownwarning'] = 'Se ha producido un error al intentar enviar este archivo a Unicheck';
$string['unsupportedfiletype'] = 'Unicheck no soporta este tipo de archivo';
$string['upload_error'] = 'Error al subir el archivo';
$string['uploading'] = 'Cargando';
$string['use_assign_desc_param'] = 'Para desbloquear los ajustes de Unicheck';
$string['use_assign_desc_value'] = 'Establecer configuración de envío → Requerir que los estudiantes hagan clic en el botón Enviar = Sí';
$string['use_unicheck'] = 'Activar el Servicio de Plagio de Unicheck';
$string['use_unicheck_help'] = 'Los nuevos envíos se revisarán en busca de similitudes automáticamente justo después del envío.';
$string['validation:min_numeric_value'] = 'El número no puede ser menos de {$a}';
$string['waitingevents'] = 'Hay {$a->countallevents} eventos esperando al cron y {$a->countheld} eventos retenidos para reenviarlos';
$string['web'] = 'Internet';
$string['web_and_my_lib_and_external_db'] = 'Internet + Biblioteca + Base de datos externa';
$string['web_and_my_library'] = 'Internet + Biblioteca';
