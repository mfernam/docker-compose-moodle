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
 * Strings for component 'scheduler', language 'es', branch 'MOODLE_35_STABLE'
 *
 * @package   scheduler
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Acción';
$string['actions'] = 'Acciones';
$string['addappointment'] = 'Añadir otro estudiante';
$string['addcommands'] = 'Añadir espacios';
$string['addondays'] = 'Añadir citas el';
$string['addsession'] = 'Añadir espacios repetidos';
$string['addsingleslot'] = 'Añadir un solo espacio';
$string['addslot'] = 'Puedes añadir espacios para citas programadas adicionales en cualquier momento.';
$string['addstudenttogroup'] = 'Añadir a este estudiante al grupo de cita';
$string['allappointments'] = 'Todas las citas';
$string['allononepage'] = 'Todos los espacios en una página';
$string['allowgroup'] = 'Espacio exclusivo - haz clic para cambiar';
$string['allteachersgrading'] = 'Los profesores pueden calificar todas las citas';
$string['allteachersgrading_desc'] = 'Cuando se habilita, los profesores pueden calificar las citas programadas a pesar de no tenerlas asignadas.';
$string['alreadyappointed'] = 'No puedes hacer la reserva. El espacio ya está completo.';
$string['appointagroup_help'] = 'Elige si quieres hacer la cita solo para ti, o para un grupo completo.';
$string['appointforgroup'] = 'Hacer citas para: {$a}';
$string['appointingstudent'] = 'Cita en espacio';
$string['appointingstudentinnew'] = 'Cita en un nuevo espacio';
$string['appointment'] = 'Cita';
$string['appointmentmode'] = 'Configurando el modo de citas';
$string['appointmentmode_help'] = '<p>Puedes elegir aquí algunas variantes de la manera en que se pueden tomar las citas (reservas). </p>
<p><ul>
<li><strong>"<emph>n</emph> citas en el organizador:</strong> El estudiante solamente puede reservar un número fijo de citas en esta actividad. Aun y cuando el docente las marcara como "vistas", a ellos no se les permitirá reservar más reuniones. La única manera de reiniciarle al estudiante la posibilidad para reservar es eliminar los registros antiguos de "visto".</li>
<li><strong>"<emph>n</emph> citas (reservas) cada vez":</strong> El estudiante puede reservar un número fijo de citas (reservas). Una vez que termine la reunión y el docente haya marcado al estudiante como "visto", el estudiante puede reservar más citas. Sin embargo, el estudiante está limitado a <emph>n</emph> fechas-horas "abiertas" (no-vistas) en cualquier momento dado.
</li>
</ul>
</p>';
$string['appointmentno'] = 'Cita {$a}';
$string['appointmentnote'] = 'Notas para cita (visible para el estudiante)';
$string['appointments'] = 'Citas';
$string['appointmentsgrouped'] = 'Citas agrupadas por espacios';
$string['appointmentsummary'] = 'Reservas en {$a->startdate} desde {$a->starttime} hasta {$a->endtime} con {$a->teacher}';
$string['appointsolo'] = 'solamente yo';
$string['appointsomeone'] = 'Añadir nueva cita';
$string['areaappointmentnote'] = 'Archivos en notas de citas';
$string['areaslotnote'] = 'Archivos en notas de espacio';
$string['areateachernote'] = 'Archivos en notas confidenciales';
$string['attendable'] = 'Puede ser atendida';
$string['attendablelbl'] = 'Total de posibles usuarios';
$string['attended'] = 'Atendida';
$string['attendedlbl'] = 'Cantidad de estudiantes atendidos';
$string['attendedslots'] = 'Espacios atendidos';
$string['availableslots'] = 'Espacios disponibles';
$string['availableslotsall'] = 'Todos los espacios';
$string['availableslotsnotowned'] = 'Sin dueño';
$string['availableslotsowned'] = 'Con dueño';
$string['bookslot'] = 'Reservar espacio';
$string['bookwithteacher'] = 'Profesor';
$string['bookwithteacher_help'] = 'Elija un profesor para la cita.';
$string['break'] = 'Descanso entre espacios';
$string['breaknotnegative'] = 'La duración del descanso no puede ser negativa';
$string['canbook1appointment'] = 'Puede reservar una cita más.';
$string['canbooknappointments'] = 'Puede reservar {$a} citas más.';
$string['canbooknofurtherappointments'] = 'Ya no puede reservar más citas.';
$string['canbooksingleappointment'] = 'Puede reservar una cita más.';
$string['canbookunlimitedappointments'] = 'Puede reservar cualquier número de citas.';
$string['cancelbooking'] = 'Cancelar reserva';
$string['chooseexisting'] = 'Elegir existente';
$string['choosingslotstart'] = 'Eligiendo la hora de inicio';
$string['choosingslotstart_help'] = 'Cambie (o elija) la hora de inicio de la cita. Si esta cita se solapa con otros espacios, se le preguntará por si este espacio reemplaza a todas las citas con las que se solapa. Tenga en cuenta de que el nuevo parámetro del espacio anulará todas las configuraciones previas.';
$string['comments'] = 'Comentarios';
$string['complete'] = 'Reservada';
$string['confirmdelete-all'] = 'Esto eliminará <b>todos</b> los espacios en este planificador de citas. Esta acción no puede deshacerse. ¿Desea continuar de todos modos?';
$string['confirmdelete-mine'] = 'Esto eliminará todos sus espacios en este planificador de citas. Esta acción no puede deshacerse. ¿Desea continuar de todos modos?';
$string['confirmdelete-myunused'] = 'Esto eliminará todos sus espacios no utilizados en este planificador de citas. Esta acción no puede deshacerse. ¿Desea continuar de todos modos?';
$string['confirmdelete-one'] = '¿Eliminar el espacio?';
$string['confirmdelete-selected'] = 'Esto eliminará los espacios seleccionados. Esta acción no puede deshacerse. ¿Desea continuar de todos modos?';
$string['confirmdelete-unused'] = 'Esto eliminará todos los espacios no utilizados  en este planificador de citas. Esta acción no puede deshacerse. ¿Desea continuar de todos modos?';
$string['conflictingslots'] = 'El espacio del {$a} no se puede crear debido a que hay espacios que en conflicto:';
$string['conflictlocal'] = '{$a->datetime} ({$a->duration} minutos) en este planificador de citas';
$string['conflictremote'] = '{$a->datetime} ({$a->duration} minutos) en el curso {$a->courseshortname}, planificador de citas {$a->schedulername}';
$string['contentformat'] = 'Formato';
$string['contentformat_help'] = '<p>Hay tres opciones básicas para el formato de exportación, que difieren en cuántos espacios con varias citas se permiten.
<dl>
<dt>Una línea por espacio</dt>:
<dd> El archivo de salida contendrá una línea para cada espacio. Si un espacio contiene múltiples citas, entonces en lugar del nombre del estudiante, etc., se mostrará un marcador "(múltiple)". </dd>
<dt>Una línea por cita</dt>:
<dd> El archivo de salida contendrá una línea para cada cita. Si una posición contiene múltiples citas, entonces aparecerá varias veces en la lista (con sus datos repetidos). </dd>
<dt>Citas agrupadas por espacio</dt>:
<dd> Todas las citas en un espacio están agrupadas juntas, precedidas por una línea de encabezado que indica el espacio en cuestión. Es posible que esto no funcione bien con el formato de archivo de salida CSV, debido a que el número de columnas no es constante. </dd>
</dl> Puedes observar el efecto de estas opciones usando el botón de "Vista previa".</p>';
$string['copytomyself'] = 'Mándame una copia a mí mismo';
$string['course'] = 'Curso';
$string['createexport'] = 'Crear fichero de exportación';
$string['csvfieldseparator'] = 'Separador de campos para CSV';
$string['csvformat'] = 'CSV';
$string['cumulatedduration'] = 'Duración total de las citas';
$string['datatoinclude'] = 'Datos a incluir';
$string['datatoinclude_help'] = 'Seleccione los campos que deberían incluirse en la exportación. Cada uno de estos aparecerá en una columna del archivo de salida.';
$string['date'] = 'Fecha';
$string['datelist'] = 'Vista general';
$string['defaultslotduration'] = 'Duración por defecto del espacio';
$string['defaultslotduration_help'] = 'La duración por defecto (en minutos) para los espacios para citas que ha configurado';
$string['deleteallslots'] = 'Eliminar todos los espacios';
$string['deleteallunusedslots'] = 'Eliminar espacios sin usar';
$string['deletecommands'] = 'Eliminar espacios';
$string['deletedconflictingslots'] = 'Para el espacio en {$a}, se han eliminado los espacios que colisionaban:';
$string['deletemyslots'] = 'Eliminar todos mis espacios';
$string['deleteselection'] = 'Eliminar espacios seleccionados';
$string['deletetheseslots'] = 'Eliminar estos espacios';
$string['deleteunusedslots'] = 'Eliminar mis espacios sin usar';
$string['department'] = '¿Desde dónde?';
$string['disengage'] = 'Abandonar mis citas';
$string['displayfrom'] = 'Mostrar espacios a estudiantes desde';
$string['distributetoslot'] = 'Distribuir a todo el grupo';
$string['divide'] = '¿Dividir en espacios?';
$string['duration'] = 'Duración';
$string['durationrange'] = 'La duración del espacio debe estar entre {$a->min} y {$a->max} minutos.';
$string['email_applied_html'] = '<p>Se ha solicitado una cita para el {$a->date} a las {$a->time},<br/> por el estudiante <a href="{$a->attendee_url}">{$a->attendee}</a> para el curso:

<p>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></p>

<p>usando el planificador de citas  "<em><a href="{$a->scheduler_url}">{$a->module}</a></em>" en el sitio web: <a href="{$a->site_url}">{$a->site}</a>.</p>';
$string['email_applied_plain'] = 'Se ha solicitado una cita para el {$a->date} a las {$a->time}, por el estudiante {$a->attendee} para el curso:

{$a->course_short}: {$a->course}

usando el planificador de citas "{$a->module}" en el sitio web: {$a->site}.';
$string['email_applied_subject'] = '{$a->course_short}: Nueva cita';
$string['email_cancelled_html'] = '<p>Su cita el <strong>{$a->date}</strong> at <strong>{$a->time}</strong>,<br/> con el estudiante <strong><a href="{$a->attendee_url}">{$a->attendee}</a></strong> para el curso :</p>

<p><strong>{$a->course_short} : <a href="{$a->course_url}">{$a->course}</a></strong></p>

<p>en el planificador de citas "<em><a href="{$a->scheduler_url}">{$a->module}</a></em>" en el sitio web: <strong><a href="{$a->site_url}">{$a->site}</a></strong></p>

<p><strong><span class="error">ha sido cancelado o movido</span></strong>.</p>';
$string['email_cancelled_plain'] = 'Su cita del {$a->date} a las {$a->time}, con el estudiante {$a->attendee} para el curso:
{$a->course_short} : {$a->course}

en el planificador de citas "{$a->module}" en el sitio web : {$a->site} ha sido cancelada o movida.';
$string['email_cancelled_subject'] = '{$a->course_short}: Cita cancelada o movida por un estudiante';
$string['email_invite_html'] = '<p>Por favor elije un espacio en el tiempo para una cita en:</p> <p>{$a->scheduler_url}</p>';
$string['email_invitereminder_html'] = '<p>Esto es solamente un recordatorio de que todavía no has configurado tu cita. Por favor, elije un espacio en el tiempo tan pronto como sea posible en:</p><p>{$a->scheduler_url}</p>';
$string['email_invitereminder_subject'] = 'Recordatorio: {$a->module}';
$string['email_invite_subject'] = 'Invitación: {$a->module}';
$string['emailreminder'] = 'Recordatorio por email';
$string['email_reminder_html'] = '<p> Tienes una cita próxima el <strong>{$a->date}</strong> desde las <strong>{$a->time}</strong> hasta las <strong>{$a->endtime}</b><br/> con <strong><a href="{$a->attendant_url}">{$a->attendant}</a></strong>.</p> <p>Espacio: <strong>{$a->location}</strong></p>';
$string['emailreminderondate'] = 'Mandar un correo electrónico recordatorio el';
$string['email_reminder_plain'] = 'Tienes  una cita próxima de {$a->date} desde {$a->time} hasta {$a->endtime} con {$a->attendant}. Lugar: {$a->location}';
$string['email_reminder_subject'] = '{$a->course_short}: Recordatorio de cita';
$string['email_teachercancelled_html'] = '<p>Su cita el <strong>{$a->date}</strong> a las <strong>{$a->time} </strong>,<br/>
con el {$a->staffrole} <strong><a href="{$a->attendant_url}">{$a->attendant}</a></strong> para el curso:</p>

<p><strong>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></strong></p>

<p>en el planificador de citas "<em><a href="{$a->scheduler_url}">{$a->module}</a></em>" del sitio web: <strong><a href="{$a->site_url}">{$a->site}</a></strong></p>

<p><strong><span class="error">ha sido cancelado</span></strong>. Por favor solicita una nueva cita.</p>';
$string['email_teachercancelled_plain'] = 'Su reserva el {$a->date} a las {$a->time}, con el {$a->staffrole} {$a->attendant} para el curso: {$a->course_short}:

{$a->course} en el planificador de citas "{$a->module}" en el sitio web: {$a->site} ha sido cancelada. Por favor solicita un nuevo espacio.';
$string['email_teachercancelled_subject'] = '{$a->course_short}: Cita cancelada por el docente';
$string['end'] = 'Fin';
$string['enddate'] = 'Repetir lugares de tiempo hasta';
$string['event_appointmentlistviewed'] = 'Lista del planificador de citas vistas';
$string['event_bookingadded'] = 'Reserva del planificador de citas añadida';
$string['event_bookingformviewed'] = 'Formulario de reserva del planificador de citas visto';
$string['event_bookingremoved'] = 'Reserva en el planificador de citas eliminada';
$string['event_slotadded'] = 'Espacio en el planificador de citas añadido';
$string['event_slotdeleted'] = 'Espacio en el planificador eliminado';
$string['everyone'] = 'Todos';
$string['excelformat'] = 'Excel';
$string['exclusive'] = 'Exclusivo';
$string['exclusivity'] = 'Exclusividad';
$string['exclusivity_help'] = '<p>Puedes configurar un límite para la cantidad de estudiantes que pueden solicitar un mismo espacio. </p>
<p>Al configurar un límite de 1 (por defecto) se entenderá que el espacio es exclusivo para un único estudiante.</p>
<p>Configurando el límite como p.e. 3 significará que hasta tres estudiantes pueden reservar en ese espacio.</p>
<p>Si se deshabilita, cualquier número de estudiantes puede reservar el espacio; nunca se considerará "lleno".</p>';
$string['exclusivityoverload'] = 'El espacio tiene {$a} estudiantes citados, más de lo permitido por esta configuración.';
$string['exclusivitypositive'] = 'El número de estudiantes por espacio necesita ser 1 o más.';
$string['explaingeneralconfig'] = 'Estas opciones solamente pueden configurarse al nivel de sitio y se aplicarán para todos los planificadores de citas de esta instalación Moodle.';
$string['export'] = 'Exportar';
$string['exporthdr'] = 'Exportar espacios y citas';
$string['field-appointmentnote'] = 'Nota de cita (al estudiante)';
$string['field-attended'] = 'Atendida';
$string['field-date'] = 'Fecha';
$string['field-endtime'] = 'Hora de fin';
$string['field-grade'] = 'Calificación';
$string['field-location'] = 'Localización';
$string['field-maxstudents'] = 'Máximo de estudiantes';
$string['field-slotnotes'] = 'Notas del espacio';
$string['field-starttime'] = 'Hora de comienzo';
$string['field-studentemail'] = 'Correo del estudiante';
$string['field-studentfirstname'] = 'Nombre del estudiante';
$string['field-studentfullname'] = 'Nombre completo del estudiante';
$string['field-studentidnumber'] = 'ID del estudiante';
$string['field-studentlastname'] = 'Apellidos del estudiante';
$string['field-studentusername'] = 'Usuario del estudiante';
$string['field-teachernote'] = 'Nota confidencial (profesor solamente)';
$string['fileformat'] = 'Formato del fichero';
$string['fileformat_help'] = 'Los siguientes formatos están disponibles:
     <ul>
          <li>Comma Separated Value (CSV). El separador de los campos, por defecto una coma, puede ser elegido debajo. Los archivos CSV se pueden abrir con la mayoría de aplicaciones de hoja de cálculo;</li>
          <li>Microsoft Excel (formato Excel 2007);</li>
          <li>Open Document spreadsheets (ODS);</li>
          <li>Formato HTML - una página web mostrando la información en formato de tabla, pudiendo ser impresa desde el navegador;</li>
          <li>PDF. Puedes elegir entre orientación vertical u horizontal del documento.</li>
     </ul>';
$string['finalgrade'] = 'Calificación final';
$string['firstslotavailable'] = 'El primer lugar se abrirá en: {$a}';
$string['forbidgroup'] = 'Espacio de grupo - hacer clic para cambiar';
$string['forcewhenoverlap'] = 'Forzar cuando se sobrepongan';
$string['forcewhenoverlap_help'] = '<h3>Forzar la creación de espacios cuando se solapen</h3>
<p>Esta configuración determina cómo se actuará cuando nuevos espacios se solapen con otros espacios ya creados.</p>
<p>Si se habilita, el espacio existente superpuesto se eliminará y se creará el nuevo.</p>
<p>Si se deshabilita, el espacio existente superpuesto se mantiene y <em>no</em> se creará un nuevo espacio.</p>';
$string['forcourses'] = 'Elegir estudiantes en cursos';
$string['friday'] = 'Viernes';
$string['generalconfig'] = 'Configuración general';
$string['grade'] = 'Calificación';
$string['gradeingradebook'] = 'Calificación en el calificador';
$string['gradingstrategy'] = 'Estrategia de calificación';
$string['gradingstrategy_help'] = 'En un planificador de citas donde los estudiantes pueden tener varias citas, selecciona el modo en el que se agragarán las calificaciones. El libro de calificaciones puede mostrar tanto la <ul><li>calificación promedio o</li><li>la calificación máxima</li></ul> que el estudiante ha obtenido.';
$string['group'] = 'grupo';
$string['groupbookings'] = 'Reserva por grupos';
$string['groupbookings_help'] = 'Permitir que los estudiantes que puedan reservar un espacio para todos los miembros de sus grupos. (Tenga en cuenta que esto está separado de la configuración de "modo de grupo", la cual controla los espacios que puede ver un estudiante.)';
$string['groupbreakdown'] = 'Por tamaño del grupo';
$string['groupmodeyourgroups'] = 'Modo de grupo: {$a->groupmode}. Solamente los estudiantes dentro de {$a->grouplist} pueden reservar citas contigo.';
$string['groupmodeyourgroupsempty'] = 'Modo de grupo: {$a->groupmode}. No eres miembro de ningún grupo, por lo tanto, los estudiantes no pueden reservar citas contigo';
$string['groupscheduling'] = 'Habilitar reserva por grupos';
$string['groupscheduling_desc'] = 'Permitir que grupos completos reserven a la vez. (Además de la opción general, el ajuste de "Reserva en grupo" debe estar habilitado en el correspondiente planificador de citas.)';
$string['groupsession'] = 'Sesión grupal';
$string['groupsize'] = 'Tamaño del grupo';
$string['guardtime'] = 'Tiempo de reserva';
$string['guardtime_help'] = 'Un tiempo de reserva impide que los estudiantes cambien su reserva poco antes de la cita. <p>Si se habilita el tiempo de reserva y se configura, por ejemplo, a 2 horas, entonces los estudiantes no podrán reservar un espacio que inicie en menos de 2 horas del momento actual, ni podrán descartar una reserva que inicie en menos de 2 horas.</p>';
$string['guestscantdoanything'] = 'Los invitados no pueden hacer nada aquí.';
$string['howtoaddstudents'] = 'Para añadir estudiantes a un planificador de citas de rango global use la configuración de roles para el módulo .<br/>Puedes usar las definiciones de roles del módulo para definir a los asistentes entre sus estudiantes.';
$string['htmlformat'] = 'HTML';
$string['ignoreconflicts'] = 'Ignorar conflictos en la reserva';
$string['ignoreconflicts_help'] = 'Si se activa esta casilla, entonces el espacio se moverá a la fecha y hora solicitada, aun cuando existan otros espacios en la misma hora. Esto puede provocar un solapamiento de reservas para varios docentes o estudiantes, y por esta razón debería de usarse con cautela.';
$string['includeemptyslots'] = 'Incluir espacios vacíos';
$string['includeslotsfor'] = 'Incluir espacios para';
$string['incourse'] = 'en curso';
$string['introduction'] = 'Introducción';
$string['isnonexclusive'] = 'No exclusiva';
$string['landscape'] = 'Apaisado';
$string['lengthbreakdown'] = 'Por duración del espacio';
$string['limited'] = 'Limitada ({$a} restantes)';
$string['location'] = 'Lugar';
$string['location_help'] = 'Especifique el lugar reservado del encuentro.';
$string['markasseennow'] = 'Marcar como visto ahora';
$string['markseen'] = 'Después de haber tenido una cita con un estudiante, por favor, márquelo como "Visto" marcando la casilla junto a la imagen del usuario arriba.';
$string['maxgrade'] = 'Tomar la calificación más alta';
$string['maxstudentlistsize'] = 'Tamaño máximo de la lista de alumnos';
$string['maxstudentlistsize_desc'] = 'La longitud máxima de la lista de estudiantes que necesitan hacer una reserva, como se muestra en la vista del profesor para el planificador de citas. Si hay más estudiantes que este número, no se mostrará ninguna lista.';
$string['maxstudentsperslot'] = 'Número máximo de estudiantes por espacio';
$string['maxstudentsperslot_desc'] = 'Los espacios de grupo / espacios no exclusivos pueden tener como máximo este número de estudiantes. Ten en cuenta que, adicionalmente, siempre puedes elegir la configuración "ilimitada" para un espacio.';
$string['meangrade'] = 'Tomar la calificación promedio';
$string['meetingwith'] = 'Reunirse con su';
$string['meetingwithplural'] = 'Reunirse con su';
$string['messagebody'] = 'Cuerpo del mensaje';
$string['messageprovider:bookingnotification'] = 'Notificación cuando se hace o cancela una reserva.';
$string['messageprovider:invitation'] = 'Invitación para reservar un espacio';
$string['messageprovider:reminder'] = 'Recordatorio de una cita próxima';
$string['messagesent'] = 'Mensaje enviado a {$a} destinatarios';
$string['messagesubject'] = 'Asunto';
$string['minutes'] = 'minutos';
$string['minutesperslot'] = 'minutos por cada hueco';
$string['missingstudents'] = '{$a} alumnos todavía tienen que pedir cita';
$string['missingstudentsmany'] = '{$a} alumnos todavía tienen que pedir cita. No se muestra una lista debido al tamaño.';
$string['mixindivgroup'] = 'Mezclar reservas individuales y grupales';
$string['mixindivgroup_desc'] = 'En donde esté habilitado la reserva por grupo, permitir también reservas individuales.';
$string['mode'] = 'Modo';
$string['modeappointments'] = 'cita(s)';
$string['modeintro'] = 'Los alumnos se pueden registrar';
$string['modeoneatatime'] = 'a la vez';
$string['modeoneonly'] = 'en este programador';
$string['modulename'] = 'Programador';
$string['modulename_help'] = 'El programador de actividades te ayuda a programar citas con tus alumnos.

Los profesores indican los huecos de tiempo para reuniones y después los alumnos eligen uno de los huecos en Moodle.
Los profesores a su vez pueden guardar el resultado de la reunión (y de forma opcional, una calificación) en el programador.

La programación grupal está disponible, es decir, cada hueco de tiempo puede tener sitio para varios estudiantes, y de manera opcional es posible programar citas para grupos enteros al mismo tiempo.';
$string['modulenameplural'] = 'Programadores';
$string['monday'] = 'Lunes';
$string['multiple'] = '(múltiple)';
$string['myappointments'] = 'Mis citas';
$string['myself'] = 'Yo';
$string['name'] = 'Nombre del programador';
$string['needteachers'] = 'No se pueden añadir huecos porque este curso no tiene profesores';
$string['negativerange'] = 'El rango es negativo. Esto no es posible.';
$string['never'] = 'Nunca';
$string['noappointments'] = 'Sin citas';
$string['noexistingstudents'] = 'No hay estudiantes disponibles para programar';
$string['nogroups'] = 'No hay grupos disponibles para programar.';
$string['noresults'] = 'Sin resultados.';
$string['noschedulers'] = 'No hay programadores';
$string['noslots'] = 'No hay huecos de cita disponibles.';
$string['noslotsavailable'] = 'No hay huecos disponibles para reservar en este momento.';
$string['noslotsopennow'] = 'No hay huecos abiertos para reservar ahora.';
$string['nostudents'] = 'Ningún estudiante para programar';
$string['nostudenttobook'] = 'Ningún estudiante para reservar';
$string['note'] = 'Calificación';
$string['noteacherforslot'] = 'Ningún profesor para los huecos';
$string['noteachershere'] = 'Ningún profesor disponible';
$string['notenoughplaces'] = 'Lo siento, no hay suficientes citas libres en este hueco.';
$string['notifications'] = 'Notificaciones';
$string['notifications_help'] = 'Cuando esta opción está activada los profesores y los alumnos recibirán notificaciones cuando se soliciten o se cancelen citas.';
$string['notseen'] = 'No visto';
$string['now'] = 'Ahora';
$string['occurrences'] = 'Apariciones';
$string['odsformat'] = 'ODS';
$string['on'] = 'en';
$string['onedaybefore'] = 'Un día antes del hueco';
$string['onelineperappointment'] = 'Una línea por cita';
$string['onelineperslot'] = 'Una línea por hueco';
$string['oneslotadded'] = 'Añadido un hueco';
$string['oneslotdeleted'] = 'Borrado un hueco';
$string['oneweekbefore'] = 'Una semana antes del hueco';
$string['onthemorningofappointment'] = 'En la mañana del día de la cita';
$string['options'] = 'Opciones';
$string['otherstudents'] = 'Otros participantes';
$string['outlineappointments'] = '{$a->attended} citas atendidas, {$a->upcoming} citas próximas.';
$string['outlinegrade'] = 'Calificación: {$a}.';
$string['overall'] = 'En general';
$string['overlappings'] = 'Algunos huecos se están solapando';
$string['pageperteacher'] = 'Una página para cada {$a}';
$string['pagination'] = 'Paginación';
$string['pagination_help'] = 'Elige si el fichero exportado debería contener una página separada para cada profesor.
En ficheros con formato Excel y ODS, estas páginas se corresponden a las pestañas (hojas de trabajo) en el libro de trabajo.';
$string['pdfformat'] = 'PDF';
$string['pdforientation'] = 'Orientación de la página PDF';
$string['pluginadministration'] = 'Administración del programador';
$string['pluginname'] = 'Programador';
$string['portrait'] = 'Retrato';
$string['preview'] = 'Vista preliminar';
$string['previewlimited'] = '(La vista preliminar está limitada a {$a} filas.)';
$string['purgeunusedslots'] = 'Limpiar los huecos no utilizados en el pasado';
$string['recipients'] = 'Destinatarios';
$string['registeredlbl'] = 'Alumno citado';
$string['reminder'] = 'Recordatorio';
$string['resetappointments'] = 'Borrar citas y calificaciones';
$string['resetslots'] = 'Borrar huecos del programador';
$string['return'] = 'Volver al curso';
$string['revoke'] = 'Cancelar la cita';
$string['saturday'] = 'Sábado';
$string['save'] = 'Guardar';
$string['savechoice'] = 'Guardar mi elección';
$string['saveseen'] = 'Guardar lo visto';
$string['schedule'] = 'Programar';
$string['scheduleappointment'] = 'Programar cita para {$a}';
$string['schedulecancelled'] = '{$a} : Tu cita ha sido cancelada o cambiada';
$string['schedulegroups'] = 'Programar por grupo';
$string['scheduleinnew'] = 'Programar en un hueco nuevo';
$string['scheduleinslot'] = 'Programar en hueco';
$string['scheduler'] = 'Programador';
$string['scheduler:addinstance'] = 'Añadir un nuevo programador';
$string['scheduler:appoint'] = 'Buscar huecos';
$string['scheduler:attend'] = 'Asistir a los alumnos';
$string['scheduler:canscheduletootherteachers'] = 'Programar citas para otros miembros del personal';
$string['scheduler:canseeotherteachersbooking'] = 'Ver y consultar las reservas de otros profesores';
$string['scheduler:disengage'] = 'Esta competencia está obsoleta y no hace nada';
$string['scheduler:manage'] = 'Gestionar tus huecos y citas';
$string['scheduler:manageallappointments'] = 'Gestionar todos los datos del programador';
$string['scheduler:seeotherstudentsbooking'] = 'Ver otros alumnos con reserva en el hueco';
$string['scheduler:seeotherstudentsresults'] = 'Ver los resultados de otros estudiantes del espacio';
$string['scheduler:seeoverviewoutsideactivity'] = 'Usa la pantalla de vista general para ver espacios fuera del programador de citas actual.';
$string['scheduler:viewfullslots'] = 'Ver espacios aunque estén completamente reservados (en la pantalla del estudiante)';
$string['scheduler:viewslots'] = 'Ver espacios que están abiertos para reserva (en la pantalla del estudiante)';
$string['schedulestudents'] = 'Planificar por estudiante';
$string['scopemenu'] = 'Mostrar espacios en: {$a}';
$string['scopemenuself'] = 'Mostrar mis espacios en: {$a}';
$string['search:activity'] = 'Planificador - información de actividad';
$string['seen'] = 'Visto';
$string['selectedtoomany'] = 'Has seleccionado demasiados espacios. No puedes seleccionar más de {$a}.';
$string['sendinvitation'] = 'Mandar invitación';
$string['sendmessage'] = 'Mandar mensaje';
$string['sendreminder'] = 'Mandar recordatorio';
$string['sendreminders'] = 'Mandar recordatorios por correo electrónico para próximas citas';
$string['sepcolon'] = 'Dos puntos';
$string['sepcomma'] = 'Coma';
$string['sepsemicolon'] = 'Punto y coma';
$string['septab'] = 'Pestaña';
$string['showemailplain'] = 'Mostrar direcciones de correo electrónico en texto plano';
$string['showemailplain_desc'] = 'En la vista del planificador del profesor, se mostrarán las direcciones de correo electrónico de los estudiantes que necesitan una cita en texto plano, además de los enlaces \'enviar a:\'.';
$string['showparticipants'] = 'Mostrar participantes';
$string['slot'] = 'Espacio';
$string['slotdatetime'] = '{$a->shortdatetime} para {$a->duration} minutos';
$string['slotdescription'] = '{$a->status} en {$a->startdate} desde {$a->starttime} hasta {$a->endtime} en {$a->location} con {$a->facilitator}.';
$string['slot_is_just_in_use'] = '¡Lo sentimos, la reserva ya ha sido elegida por otro estudiante! Por favor, inténtelo de nuevo.';
$string['slots'] = 'Espacios';
$string['slotsadded'] = '{$a} espacios han sido añadidos';
$string['slotsdeleted'] = '{$a} espacios han sido eliminados';
$string['slottype'] = 'Tipo de espacio';
$string['slotupdated'] = '1 espacio actualizado';
$string['slotwarning'] = '<strong>Advertencia: </strong> Mover este espacio al horario seleccionado entra en conflicto con el(los) espacio(s) que se indica(n) a continuación. Marque "ignorar conflictos de planificacion" si desea mover el espacio a pesar de todo.';
$string['staffbreakdown'] = 'Por {$a}';
$string['staffrolename'] = 'Nombre del rol profesor';
$string['staffrolename_help'] = 'La etiqueta para el rol que atiende a los estudiantes. Este
no necesariamente es un "profesor".';
$string['start'] = 'Comenzar';
$string['startpast'] = 'No puedes iniciar un espacio vacío en el pasado.';
$string['statistics'] = 'Estadísticas';
$string['student'] = 'Estudiante';
$string['studentbreakdown'] = 'Por estudiante';
$string['studentdetails'] = 'Detalles del estudiante';
$string['studentmultiselect'] = 'Cada estudiante solo puede ser seleccionado una vez en este espacio';
$string['students'] = 'Estudiantes';
$string['sunday'] = 'Domingo';
$string['tab-otherappointments'] = 'Todas las citas de este estudiante';
$string['tab-otherstudents'] = 'Estudiantes en este espacio';
$string['tab-thisappointment'] = 'Esta cita';
$string['teacher'] = 'Profesor';
$string['teachernote'] = 'Notas confidenciales (visibles solamente para el profesor)';
$string['teachersmenu'] = 'Mostrar espacios para: {$a}';
$string['thiscourse'] = 'este curso';
$string['thisscheduler'] = 'este planificador';
$string['thissite'] = 'todo el sitio';
$string['thursday'] = 'Jueves';
$string['timefrom'] = 'De:';
$string['timerange'] = 'Rango de tiempo';
$string['timeto'] = 'Para:';
$string['totalgrade'] = 'Calificación total';
$string['tuesday'] = 'Martes';
$string['unattended'] = 'Sin atender';
$string['unlimited'] = 'Ilimitado';
$string['unregisteredlbl'] = 'Esudiantes no designados';
$string['upcomingslots'] = 'Próximos espacios';
$string['updategrades'] = 'Actualizar calificaciones';
$string['updatesingleslot'] = '';
$string['usenotes'] = 'Usar notas para citas';
$string['usenotesboth'] = 'Ambos tipos de notas';
$string['usenotesnone'] = 'ninguno';
$string['usenotesstudent'] = 'Nota de cita, visible para profesor y estudiante';
$string['usenotesteacher'] = 'Nota confidencial, visible solamente para profesores';
$string['wednesday'] = 'Miércoles';
$string['welcomebackstudent'] = 'Puedes reservar espacios adicionales haciendo clic en el botón "Reservar espacio".';
$string['welcomenewstudent'] = 'La siguiente tabla muestra todos las espacios disponibles para una cita. Haz tu elección haciendo clic en el botón "Reservar espacio". Si necesitas hacer un cambio más tarde puedes volver a visitar esta página.';
$string['welcomenewteacher'] = 'Por favor, haz clic en el siguiente botón para añadir espacios.';
$string['what'] = '¿Qué?';
$string['whathappened'] = '¿Qué ocurrió?';
$string['whatresulted'] = '¿Qué resultó?';
$string['when'] = '¿Cuándo?';
$string['where'] = '¿Dónde?';
$string['who'] = '¿Con quien?';
$string['whosthere'] = '¿Quién está?';
$string['xdaysbefore'] = '{$a} días antes del espacio';
$string['xweeksbefore'] = '{$a} semanas antes del espacio';
$string['yesallgroups'] = 'Sí, para todos los grupos';
$string['yesingrouping'] = 'Si, en agrupamiento {$a}';
$string['yourappointmentnote'] = 'Comentarios personales';
$string['yourslotnotes'] = 'Comentarios sobre la reunion';
$string['yourtotalgrade'] = 'Tu calificación total en esta actividad es <strong>{$a}</strong>.';
