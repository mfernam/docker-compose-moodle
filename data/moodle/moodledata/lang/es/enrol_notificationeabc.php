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
 * Strings for component 'enrol_notificationeabc', language 'es', branch 'MOODLE_31_STABLE'
 *
 * @package   enrol_notificationeabc
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activar'] = 'Activar verificación inicial';
$string['activarglobal'] = 'Activar para todo el sitio';
$string['activarglobalenrolupdated'] = 'Activar para todo el sitio';
$string['activarglobalenrolupdated_help'] = 'Activar la notificación de actualización de matriculación para todo el sitio';
$string['activarglobal_help'] = 'Activa la notificación de matriculación para todo los cursos';
$string['activarglobalunenrolalert'] = 'Activar para todo el sitio';
$string['activarglobalunenrolalert_help'] = 'Activar la notificación de desmatriculación para todo el sitio';
$string['activar_help'] = 'Al activarse se verificará, mediante la ejecucion del cron inmediatamente posterior, a los usuarios que fueron matriculados en el periodo establecido arriba';
$string['activeenrolalert'] = 'Activar aviso de matriculación';
$string['activeenrolalert_help'] = 'Activar aviso de matriculación';
$string['activeenrolupdatedalert'] = 'Activar aviso de actualización de matriculación';
$string['activeenrolupdatedalert_help'] = 'Activar aviso de actualización de matriculación';
$string['activeunenrolalert'] = 'Activar aviso de desmatriculacion';
$string['activeunenrolalert_help'] = 'Activar aviso de desmatriculación';
$string['emailsender'] = 'Email del remitente';
$string['emailsender_help'] = 'Por defecto toma el email configurado como el usuario de soporte';
$string['fecha'] = 'Periodo para realizar la verificación de usuarios que se matricularon a cursos';
$string['fecha_help'] = 'Coloque el periodo por el cual desea que se realice la verificación inicial de usuarios matriculados';
$string['filelockedmail'] = 'Usted ha sido matriculado en el curso {$a->fullname} ({$a->url})';
$string['location'] = 'Mensaje personalizado';
$string['location_help'] = 'Personalice el mensaje que le llegarán a los usuarios al ser matriculados. Este campo acepta los siguientes marcadores que luego serán reemplazados dinámicamente por los valores correspondientes
<pre>
{COURSENAME} = Nombre completo del curso
{USERNAME} = Nombre de usuario
{NOMBRE} = Nombre
{APELLIDO} = Apellido
{URL} = Url del curso
</pre>';
$string['namesender'] = 'Nombre del remitente';
$string['namesender_help'] = 'Por defecto toma el nombre configurado como el usuario de soporte';
$string['notificationeabc:manage'] = 'Gestionar notificaciones de matriculación';
$string['pluginname'] = 'Notificación de Matriculación';
$string['pluginname_desc'] = 'Notificación de matriculaciones a cursos vía mail';
$string['status'] = 'Activar notificación de matriculación';
$string['subject'] = 'Notificación de Matriculación';
$string['unenrolmessage'] = 'Mensaje personalizado';
$string['unenrolmessagedefault'] = 'Usted ha sido desmatriculado del curso {$a->fullname} ({$a->url})';
$string['unenrolmessage_help'] = 'Personalice el mensaje que le llegará a los usuarios al ser desmatriculados. Este campo acepta los siguientes marcadores que luego seran reemplazados dinámicamente por los valores correspondientes
<pre>
{COURSENAME} = Nombre completo del curso
{USERNAME} = Nombre de usuario
{NOMBRE} = Nombre
{APELLIDO} = Apellido
{URL} = Url del curso
</pre>';
$string['updatedenrolmessage'] = 'Mensaje personalizado';
$string['updatedenrolmessagedefault'] = 'Su matriculación en el curso {$a->fullname} ha sido actualizada ({$a->url})';
$string['updatedenrolmessage_help'] = 'Personalice el mensaje que le llegará a los usuarios al realizar alguna actualizacion en su matriculacion. Este campo acepta los siguientes marcadores que luego seran reemplazados dinámicamente por los valores correspondientes
<pre>
{COURSENAME} = Nombre completo del curso
{USERNAME} = Nombre de usuario
{NOMBRE} = Nombre
{APELLIDO} = Apellido
{URL} = Url del curso
</pre>';
