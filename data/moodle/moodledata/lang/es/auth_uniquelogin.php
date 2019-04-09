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
 * Strings for component 'auth_uniquelogin', language 'es', branch 'MOODLE_35_STABLE'
 *
 * @package   auth_uniquelogin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_uniquelogindescription'] = 'Este inicio de sesión asegura que cada usuario sólo tenga una sesión activa. <br /><br />
Cada vezque un usuario realice un inicio de sesión correcto, todas las otras sesiones que pertenezcan al mismo usuario serán terminadas.<br><br />
<div style="font-weight: bold;">Nota 1: Para que este plugin funcione, las sesiones de usuario deben ser almacenadas en la base de datos. Esta configuración se establece en <a href="settings.php?section=sessionhandling">Sesiones.</a></div><br />';
$string['auth_uniquelogintitle'] = 'Inicio de sesión único';
$string['pluginname'] = 'Inicio de sesión único';
