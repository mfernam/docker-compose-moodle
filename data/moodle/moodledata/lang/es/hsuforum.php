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
 * Strings for component 'hsuforum', language 'es', branch 'MOODLE_35_STABLE'
 *
 * @package   hsuforum
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configdigestmailtime'] = 'Quien haya elegido recibir notificaciones por correo en el formulario de resumen de correo, recibirá el resumen diario. Este ajuste controla a qué hora del día se enviarán los correos (el siguiente cron que se ejecute después de esta hora los enviará)';
$string['digestmailheader'] = 'Este es su resumen de correo diario de nuevos mensajes en los foros de {$a->sitename}. Para cambiar sus preferencias de correos de foro, vaya a {$a->userprefs}.';
$string['digestmailpost'] = 'Cambie sus preferencias de resumen de correo de foros';
$string['digestmailsubject'] = '{$a}: Resumen de correo de foros';
$string['digestmailtime'] = 'Hora de envío de resúmenes de correo';
$string['digestsentusers'] = 'Resumen de correo enviado con éxito a  {$a} usuarios.';
$string['emaildigestoffshort'] = 'Sin resumen';
$string['emaildigesttype'] = 'Opciones de resumen de correo';
$string['emaildigesttype_help'] = 'Tipo de notificación que recibirá de cada foro:

* Por defecto - Sigue los ajustes de resumen de correo de su perfil de usuario. Si actualiza su perfil, los cambios se verán reflejados también aquí;
* Sin resumen - Recibirá un correo por cada mensaje del foro;
* Resumen - mensajes completos- Recibirá un resumen de correo diario con el contenido completo de cada mensaje del foro;
* Resumen - sólo asunto- Recibirá un resumen de correo diario sólo con el asunto de cada mensaje del foro.';
$string['invaliddigestsetting'] = 'Se ha proporcionado un ajuste de resumen de correo no válido';
$string['processingdigest'] = 'Procesando resumen de correo para el usuario {$a}';
$string['resetdigests'] = 'Borrar todas las preferencias de resumen de correo de usuarios';
