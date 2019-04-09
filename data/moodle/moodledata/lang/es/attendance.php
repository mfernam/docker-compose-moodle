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
 * Strings for component 'attendance', language 'es', branch 'MOODLE_35_STABLE'
 *
 * @package   attendance
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Aacronym'] = 'Un';
$string['absenteereport'] = 'Informe de absentismo';
$string['acronym'] = 'Acrónimo';
$string['add'] = 'Añadir';
$string['addmultiplesessions'] = 'Añadir varias sesiones';
$string['addsession'] = 'Añadir sesión';
$string['adduser'] = 'Añadir usuario';
$string['addwarning'] = 'Añadir aviso';
$string['Afull'] = 'Falta injustificada';
$string['all'] = 'Todas';
$string['allcourses'] = 'Todos los cursos';
$string['allpast'] = 'Hasta hoy';
$string['allsessions'] = 'Todas las sesiones';
$string['attendance:addinstance'] = 'Añadir una nueva actividad de asistencia';
$string['attendance_already_submitted'] = 'Usted no puede cambiar una asistencia que ya ha sido registrada.';
$string['attendance:canbelisted'] = 'Aparecer en la lista';
$string['attendance:changeattendances'] = 'Cambiar asistencias';
$string['attendance:changepreferences'] = 'Cambiar preferencias';
$string['attendancedata'] = 'Datos de asistencia';
$string['attendance:export'] = 'Exportar Informes';
$string['attendanceforthecourse'] = 'Asistencia para el Curso/Asignatura';
$string['attendancegrade'] = 'Puntuación Asistencia';
$string['attendance:manageattendances'] = 'Gestionar asistencias';
$string['attendance:managetemporaryusers'] = 'Gestionar usuarios temporales';
$string['attendance_no_status'] = 'No se dispone de un estado válido; es posible que sea demasiado tarde para registrar la asistencia.';
$string['attendancenotset'] = 'Debe indicar su asistencia';
$string['attendancenotstarted'] = 'La asistencia todavía no ha sido iniciada para este curso';
$string['attendancepercent'] = 'Porcentaje';
$string['attendancereport'] = 'Informe de Asistencia';
$string['attendanceslogged'] = 'Asistencia registradas';
$string['attendancestaken'] = 'Asistencia tomadas';
$string['attendancesuccess'] = 'Asistencia tomada con éxito';
$string['attendance:takeattendances'] = 'Tomar asistencias';
$string['attendanceupdated'] = 'Asistencia actualizada con éxito';
$string['attendance:view'] = 'Ver asistencias';
$string['attendance:viewreports'] = 'Ver informes';
$string['attendance:viewsummaryreports'] = 'Ver informes de resumen de cursos';
$string['attforblockdirstillexists'] = 'el viejo directorio mod/attforblock todavía existe - debe eliminarlo antes de ejecutar esta actualización.';
$string['attrecords'] = 'Asistencias tomadas';
$string['autoassignstatus'] = 'Selecciona automáticamente el estado más alto disponible';
$string['autoassignstatus_help'] = 'Si se selecciona esta opción, a los estudiantes se les asignará automáticamente la calificación más alta disponible.';
$string['automark'] = 'Marcado automático';
$string['automarkall'] = 'Sí';
$string['automarkclose'] = 'Establecer sin marcar al final de la sesión';
$string['automark_help'] = 'Permite que el marcado se complete automáticamente.
Si la respuesta es "Sí", los alumnos se marcarán automáticamente en función de su primer acceso al curso.
Si la respuesta es "Establecer sin marcar al final de la sesión", a los estudiantes que no hayan marcado su asistencia se les asignará el estado de no seleccionado.';
$string['averageattendance'] = 'Asistencia media';
$string['calclose'] = 'Cerrar';
$string['calmonths'] = 'Enero,Febrero,Marzo,Abril,Mayo,Junio,Julio,Agosto,Septiembre,Octubre,Noviembre,Diciembre';
$string['calshow'] = 'Seleccione fecha';
$string['caltoday'] = 'Hoy';
$string['calweekdays'] = 'Do,Lu,Ma,Mi,Ju,Vi,Sá';
$string['cannottakeforgroup'] = 'No puede tomar asistencia para el grupo"{$a}"';
$string['changeattendance'] = 'Cambiar asistencia';
$string['changeduration'] = 'Cambiar duración';
$string['changesession'] = 'Cambiar Sesión';
$string['checkweekdays'] = 'Seleccione los días de la semana que se encuentren dentro del intervalo de fechas de sesión seleccionado.';
$string['closed'] = 'Esta sesión actualmente no está disponible para auto-marcado';
$string['column'] = 'columna';
$string['columns'] = 'columnas';
$string['commonsession'] = 'Común';
$string['commonsessions'] = 'Comunes';
$string['confirmdeletehiddensessions'] = '¿Está seguro de que quiere eliminar {$a->count} sesiones programadas antes de la fecha de inicio del curso ({$a->date})?';
$string['confirmdeleteuser'] = '¿Está seguro de que quiere eliminar al usuario \'{$a->fullname}\' ({$a->email})?<br/>Todos los registros de asistencia serán eliminados permanentemente.';
$string['copyfrom'] = 'Copiar asistencia desde';
$string['countofselected'] = 'Recuento de selección';
$string['createmultiplesessions'] = 'Crear varias sesiones';
$string['createmultiplesessions_help'] = 'Esta función permite crear sesiones múltiples en un sólo paso.

  * <strong>Fecha de inicio de sesión</strong>: Seleccione la fecha de inicio de su curso (el primer día de clases)
  * <strong>Fecha de finalización de sesión</strong>: Seleccione el último día de clases (el último día en el que quiera tomar asistencia).
  * <strong>Días de la sesión</strong>: Seleccione los días de la semana en los que se dictará clase (por ejemplo, lunes/miércoles/viernes).
  * <strong>Frecuencia</strong>: Permite configurar la frecuencia. Si su clase se dicta una vez por semana, seleccione 1; si será cada dos semanas, seleccione 2; cada tres semanas, seleccione 3, etc.';
$string['createonesession'] = 'Crear una sesión para el curso';
$string['days'] = 'Hoy';
$string['defaultdisplaymode'] = 'Visualización por defecto';
$string['defaults'] = 'Por Defecto';
$string['delete'] = 'Eliminar';
$string['deletedgroup'] = 'El grupo asociado a esta sesión ha sido eliminado';
$string['deletehiddensessions'] = 'Eliminar todas las sesiones ocultas';
$string['deletelogs'] = 'Eliminar datos de asistencia';
$string['deleteselected'] = 'Eliminar selección';
$string['deletesession'] = 'Eliminar Sesión';
$string['deletesessions'] = 'Eliminar todas las sesiones';
$string['deleteuser'] = 'Borrar usuario';
$string['deletingsession'] = 'Eliminando Sesión para el Curso/Asignatura';
$string['deletingstatus'] = 'Eliminando estado del curso';
$string['description'] = 'Descripción';
$string['display'] = 'Mostrar';
$string['displaymode'] = 'Modo de visualización';
$string['donotusepaging'] = 'No usar paginación';
$string['downloadexcel'] = 'Descargar en Formato Excel';
$string['downloadooo'] = 'Descargar en Formato OpenOffice';
$string['downloadtext'] = 'Descargar en Formato de Texto';
$string['duration'] = 'Duración';
$string['Eacronym'] = 'J';
$string['editsession'] = 'Editar Sesión';
$string['edituser'] = 'Editar usuario';
$string['Efull'] = 'Falta justificada';
$string['emptyacronym'] = 'El campo acrónimo no puede estar vacío. El registro de estado no ha sido actualizado.';
$string['emptydescription'] = 'El campo descripción no puede estar vacío. El registro de estado no ha sido actualizado.';
$string['enablecalendar'] = 'Crear eventos de calendario';
$string['endofperiod'] = 'Fecha final';
$string['endtime'] = 'Hora de finalización';
$string['enrolmentend'] = 'La matriculación del usuario finaliza {$a}';
$string['enrolmentstart'] = 'La matriculación del usuario comienza {$a}';
$string['enrolmentsuspended'] = 'Matriculación suspendida';
$string['errorgroupsnotselected'] = 'Elija uno o más grupos';
$string['errorinaddingsession'] = 'Error añadiendo Sesión';
$string['erroringeneratingsessions'] = 'Error generando sesión';
$string['eventdurationupdated'] = 'Duración de la sesión actualizada';
$string['eventreportviewed'] = 'Informe de asistencia visto';
$string['eventscreated'] = 'Eventos de calendario creados';
$string['eventsdeleted'] = 'Eliminar eventos de calendario';
$string['eventsessionadded'] = 'Sesión añadida';
$string['eventsessiondeleted'] = 'Sesión eliminada';
$string['eventsessionupdated'] = 'Sesión actualizada';
$string['eventstatusadded'] = 'Estado añadido';
$string['eventstatusupdated'] = 'Estado actualizado';
$string['eventtaken'] = 'Asistencia confirmada';
$string['eventtakenbystudent'] = 'Asistencia confirmada por el alumno';
$string['export'] = 'Exportar';
$string['extrarestrictions'] = 'Restricciones extra';
$string['from'] = 'desde:';
$string['gradebookexplanation'] = 'Calificación en libro de calificaciones';
$string['gradebookexplanation_help'] = 'El módulo de asistencia muestra su calificación actual de asistencia basado en el número de puntos que ha conseguido hasta la fecha y el número de puntos que pudo haber obtenido hasta la fecha; no incluye periodos de clase futuros. En el libro de calificaciones, su asistencia está basada en su porcentaje actual de asistencia y el número de puntos que puede conseguir en la duración total del curso, incluyendo clases futuras. De este modo, su calificación de asistencia mostrado en el módulo de asistencia y en el libro de calificaciones puede no tener el mismo número de puntos pero sí el mismo porcentaje.

Por ejemplo, si ha conseguido 8 de 10 puntos a la fecha (80% de asistencia) y la asistencia por todo el curso es de 50 puntos, el módulo de asistencia mostrará 8/10 y el libro de calificaciones mostrará 40/50. No ha conseguido 40 puntos todavía pero 40 es el puntaje equivalente a su actual porcentaje de asistencia de 80%. El puntaje que ha obtenido en el módulo de asistencia no puede disminuir, ya que está basado en la asistencia al día de la fecha; de todos modos, el puntaje de asistencia mostrado en el libro de calificaciones puede aumentar o disminuir dependiendo en su asistencia futura, ya que está basado en la asistencia al curso entero.';
$string['gridcolumns'] = 'Columnas de la grilla';
$string['groupsession'] = 'Grupal';
$string['hiddensessions'] = 'Sesiones ocultas';
$string['hiddensessionsdeleted'] = 'Todas las sesiones ocultas han sido eliminadas';
$string['hiddensessions_help'] = 'Las sesiones se ocultan si la fecha de inicio de los cursos es posterior a su fecha. Cambie la fecha de inicio del curso y las sesiones ocultas se mostrarán.

Puede usar esta característica para ocultar sesiones antiguas en lugar de eliminarlas. Recuerde que sólo sesiones visibles se usan en el libro de calificaciones.';
$string['identifyby'] = 'Identificar estudiantes por';
$string['includeall'] = 'Seleccionar todas las sesiones';
$string['includenottaken'] = 'Incluir sesiones no registradas';
$string['includeremarks'] = 'Incluir comentarios';
$string['indetail'] = 'En detalle...';
$string['invalidaction'] = 'Debe seleccionar una acción';
$string['invalidsessionenddate'] = 'La fecha de finalización no puede ser anterior a la fecha de inicio';
$string['invalidsessionendtime'] = 'La hora de finalización debe ser mayor que la hora de comienzo';
$string['jumpto'] = 'Saltar a';
$string['Lacronym'] = 'R';
$string['Lfull'] = 'Retraso';
$string['maxpossiblepercentage'] = 'Porcentaje máximo posible';
$string['maxpossiblepoints'] = 'Puntos máximos posibles';
$string['mergeuser'] = 'Unir usuario';
$string['modulename'] = 'Asistencia';
$string['modulename_help'] = 'El módulo de actividad de asistencia permite a un profesor tomar asistencia en clase y a los estudiantes ver su propio registro de asistencia.

El profesor puede crear múltiples sesiones y marcar el estado de asistencia como "Presente", "Ausente", "Retraso", o "Falta Justificada", o modificar dichos estados para que se ajusten a sus necesidades.

Los reportes están disponibles para toda la clase o individualmente por estudiante.';
$string['modulenameplural'] = 'Asistencias';
$string['months'] = 'Mensual';
$string['moreattendance'] = 'La asistencia ha sido completada correctamente para esta página';
$string['mustselectusers'] = 'Debe seleccionar algún usuario para poder exportar';
$string['newdate'] = 'Nueva Fecha';
$string['newduration'] = 'Nueva duración';
$string['newstatusset'] = 'Nuevo conjunto de estados';
$string['noattendanceusers'] = 'No es posible exportar ningún dato si no hay estudiantes matriculados en el curso.';
$string['noattforuser'] = 'No existen registros de asistencia para el usuario';
$string['nodescription'] = 'Sesión de Clase Normal';
$string['nogroups'] = 'No puede incluir sesiones grupales. No existen grupos en este curso.';
$string['noguest'] = 'Los invitados no pueden ver la asistencia';
$string['noofdaysabsent'] = 'Nº de días de ausencia';
$string['noofdaysexcused'] = 'Nº de días con faltas justificadas';
$string['noofdayslate'] = 'Nº de días de retrasos';
$string['noofdayspresent'] = 'Nº de días de asistencia';
$string['nosessiondayselected'] = 'No se ha seleccionado día de Sesión';
$string['nosessionexists'] = 'No existen sesiones para este curso';
$string['nosessionsselected'] = 'No hay sesiones seleccionadas.';
$string['notfound'] = 'No se ha encontrado ninguna actividad de Asistencia en este curso';
$string['notmember'] = 'No&nbsp;miembro';
$string['noupgradefromthisversion'] = 'El módulo de asistencia no puede actualizarse desde la versión de attforblock que tiene instalada. - por favor elimine attforblock o actualícelo a la última versión antes de instalar el nuevo módulo de asistencia';
$string['olddate'] = 'Fecha Anterior';
$string['onlyselectedusers'] = 'Exportar usuarios seleccionados';
$string['Pacronym'] = 'P';
$string['participant'] = 'Participante';
$string['percentage'] = 'Porcentaje';
$string['percentageallsessions'] = 'Porcentaje sobre todas las sesiones';
$string['percentagesessionscompleted'] = 'Porcentaje sobre las sesiones completadas';
$string['Pfull'] = 'Presente';
$string['pluginadministration'] = 'Administración de asistencia';
$string['pluginname'] = 'Asistencia';
$string['points'] = 'Puntuación';
$string['pointsallsessions'] = 'Puntos sobre todas las sesiones';
$string['pointssessionscompleted'] = 'Puntos sobre las sesiones completadas';
$string['priorto'] = 'La fecha de la sesión es anterior a la fecha de inicio del curso ({$ a}) para que las nuevas sesiones programadas antes de esta fecha se oculten (no accesibles). Puede cambiar la fecha de inicio del curso en cualquier momento (consulte la configuración del curso) para tener acceso a las sesiones anteriores. <br> <br> Por favor cambie la fecha de la sesión o simplemente haga clic en el botón "Añadir sesión" de nuevo para confirmar.';
$string['remark'] = 'Comentario para: {$a}';
$string['remarks'] = 'Observaciones';
$string['repeatasfollows'] = 'Repetir la sesión como se indica a continuación';
$string['repeatevery'] = 'Repetir cada';
$string['repeaton'] = 'Repetir los';
$string['repeatuntil'] = 'Repetir hasta';
$string['report'] = 'Informe';
$string['required'] = 'Obligatorio*';
$string['requiredentries'] = 'Los registros temporales sobrepasan los registros de asistencia de los participantes';
$string['requiredentry'] = 'Guía de ayuda de combinación temporal de usuarios';
$string['requiredentry_help'] = '<p align = "center"> <b> Asistencia </b> </p>
<p align = "left"> <strong> Combinar cuentas </strong> </p>
<p align = "left">
<table border = "2" cellpadding = "4">
<tr>
<th> Usuario de Moodle </th>
<th> Usuario temporal </th>
<th> Acción </th>
</tr>
<tr>
<td> Datos de asistencia </td>
<td> Datos de asistencia </td>
<td> El usuario temporal reemplazará al usuario de Moodle </td>
</tr>
<tr>
<td> No hay datos de asistencia </td>
<td> Datos de asistencia </td>
<td> La asistencia temporal al usuario se transferirá al usuario de Moodle </td>
</tr>
<tr>
<td> Datos de asistencia </td>
<td> No hay datos de asistencia </td>
<td> Se borrará el usuario temporal </td>
</tr>
<tr>
<td> No hay datos de asistencia </td>
<td> No hay datos de asistencia </td>
<td> Se borrará el usuario temporal </td>
</tr>
</table>

</p>
<p align = "left"> <strong> El usuario temporal se eliminará en todos los casos después de la acción de combinación </strong> </p>';
$string['requiresubnet'] = 'Los estudiantes sólo pueden registrar la asistencia propia desde estos ordenadores.';
$string['requiresubnet_help'] = 'La grabación de asistencia puede restringirse a determinadas subredes especificando una lista separada por comas de direcciones IP parciales o completas.';
$string['resetdescription'] = 'Recuerde que eliminando los datos de la asistencia provocará el borrado de información en la base de datos. Usted puede ocultar sesiones anteriores cambiando la fecha de inicio del curso en la zona de administración.';
$string['resetstatuses'] = 'Reinicar la configuración por defecto';
$string['restoredefaults'] = 'Restarurar valores por defecto';
$string['resultsperpage'] = 'Resultados por página';
$string['resultsperpage_desc'] = 'Número de estudiantes mostrados por página';
$string['save'] = 'Guardar asistencia';
$string['session'] = 'Sesión';
$string['sessionadded'] = 'Sesión añadida con éxito';
$string['sessionalreadyexists'] = 'Ya existe una sesión para la fecha indicada';
$string['sessiondate'] = 'Fecha de la Sesión';
$string['sessiondays'] = 'Días de Sesión';
$string['sessiondeleted'] = 'Sesión eliminada con éxito';
$string['sessionexist'] = 'Sesión no añadida (ya existe)';
$string['sessiongenerated'] = 'Una sesión fue generada correctamente';
$string['session_help'] = 'Sesión';
$string['sessions'] = 'Sesiones';
$string['sessionscompleted'] = 'Sesiones completadas';
$string['sessionsgenerated'] = 'Sesiones generadas con éxito';
$string['sessionsids'] = 'IDs de las sesiones:';
$string['sessionsnotfound'] = 'No hay sesiones en el rango de tiempo seleccionado';
$string['sessionstartdate'] = 'Fecha de Inicio de la Sesión';
$string['sessionstotal'] = 'Número total de sesiones';
$string['sessiontype'] = 'Tipo de sesión';
$string['sessiontype_help'] = 'Hay dos tipos de sesiones: comunes y grupos. La posibilidad de añadir diferentes tipos depende del modo de la actividad de grupo.

* En modo de grupo "No grupos" sólo puede añadir sesiones comunes.
* En modo de grupo "Grupos visibles" puede añadir sesiones comunes o de grupo.
* En modo de grupo "Grupos separados" sólo puede añadir sesiones de grupo.';
$string['sessiontypeshort'] = 'Tipo';
$string['sessionupdated'] = 'Sesión actualizada con éxito';
$string['setallstatuses'] = 'Actualizar estado para todos los usuarios';
$string['setallstatusesto'] = 'Pasar el estado de todos los usuarios a «{$a}»';
$string['set_by_student'] = 'Autograbado';
$string['settings'] = 'Configuración';
$string['showdefaults'] = 'Mostrar opciones por defecto';
$string['showduration'] = 'Mostrar duración';
$string['showsessiondetails'] = 'Mostrar detalles de la sesión';
$string['sortedgrid'] = 'Grilla alfabética';
$string['sortedlist'] = 'Lista alfabética';
$string['startofperiod'] = 'Fecha de comienzo';
$string['status'] = 'Estado';
$string['statusdeleted'] = 'Estado eliminado';
$string['statuses'] = 'Estados';
$string['statusset'] = 'Estado establecido {$a}';
$string['strftimedm'] = '%d.%m';
$string['strftimedmy'] = '%d.%m.%Y';
$string['strftimedmyhm'] = '%d.%m.%Y %H.%M';
$string['strftimedmyw'] = '%d.%m.%y (%a)';
$string['strftimehm'] = '%H:%M';
$string['strftimeshortdate'] = '%d.%m.%Y';
$string['studentid'] = 'ID de estudiante';
$string['studentscanmark'] = 'Permitir a los estudiantes registrar su propia asistencia';
$string['studentscanmark_desc'] = 'Si se marca, los profesores podrán permitir que los estudiantes marquen su propia asistencia.';
$string['studentscanmark_help'] = 'Si se marca, los estudiantes podrán registrar su propia asistencia a la sesión.';
$string['submitattendance'] = 'Enviar asistencia';
$string['subnetwrong'] = 'La asistencia sólo se puede grabar desde ciertas ubicaciones, y este equipo no está en la lista permitida.';
$string['summary'] = 'Resumen';
$string['tablerenamefailed'] = 'Ha fallado el cambio de nombre de la tabla del viejo attforblock a asistencia';
$string['tactions'] = 'Acción';
$string['takeattendance'] = 'Iniciar Asistencia';
$string['takensessions'] = 'Sesiones tomadas';
$string['tcreated'] = 'Creado';
$string['tempaddform'] = 'Agregar usuario temporal';
$string['tempexists'] = 'Ya hay un usuario temporal con esta dirección de correo electrónico';
$string['temptable'] = 'Lista de usuarios temporales';
$string['tempuser'] = 'Usuario temporal';
$string['tempusermerge'] = 'Combinar usuario temporal';
$string['tempusers'] = 'Usuarios temporales';
$string['tempusersedit'] = 'Editar usuario temporal';
$string['tempuserslist'] = 'Usuarios temporales';
$string['thiscourse'] = 'Este curso';
$string['time'] = 'Tiempo';
$string['timeahead'] = 'No se pueden crear sesiones múltiples que superen un año. Ajuste las fechas de inicio y finalización.';
$string['to'] = 'a:';
$string['tuseremail'] = 'Correo';
$string['tusername'] = 'Nombre completo';
$string['unknowngroup'] = 'Grupo desconocido';
$string['update'] = 'Actualizar';
$string['userexists'] = 'Ya hay un usuario real con esta dirección de correo electrónico';
$string['users'] = 'Usuarios para exportar';
$string['usestatusset'] = 'Estado establecido';
$string['variable'] = 'variable';
$string['variablesupdated'] = 'Variables actualizadas con éxito';
$string['versionforprinting'] = 'versión para Imprimir';
$string['viewmode'] = 'Visualización';
$string['week'] = 'semana(s)';
$string['weeks'] = 'Semanal';
$string['youcantdo'] = 'Usted no puede hacer nada';
