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
 * Strings for component 'local_notifyemailsignup', language 'es', branch 'MOODLE_35_STABLE'
 *
 * @package   local_notifyemailsignup
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['notifyemailsignupbody'] = 'Hola {$a->supportname},

Se ha solicitado la apertura de una cuenta de usuario en \'{$a->sitename}\', usando los siguientes detalles:

- dirección de correo electrónico: {$a->signup_user_email}
- nombre de usuario: {$a->signup_user_username}
- nombre: {$a->signup_user_firstname}
- apellido(s): {$a->signup_user_lastname}

Un saludo del administrador de \'{$a->sitename}\',
{$a->signoff}';
$string['notifyemailsignupsubject'] = '{$a}: Notificación de solicitud de apertura de nueva cuenta';
$string['pluginname'] = 'Notificar a los administradores del sitio sobre solicitudes de apertura de nuevas cuentas';
