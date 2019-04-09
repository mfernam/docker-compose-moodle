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
 * Strings for component 'auth_basic', language 'es', branch 'MOODLE_34_STABLE'
 *
 * @package   auth_basic
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_basicdescription'] = 'Los usuarios pueden registrarse por autenticación de acceso básica HTTP.';
$string['debug'] = 'Modo depuración';
$string['debug_help'] = 'Volcar detalles del proceso autenticación al log de errores y las cabeceras http';
$string['onlybasic'] = 'Sólo básica';
$string['onlybasic_help'] = 'Si es Sí sólo los usuarios cuyo tipo de autenticación se haya establecido en \'básica\' de forma explícita funcionarán. Es para tener seguridad adicional.';
$string['pluginname'] = 'Autenticación básica';
$string['send401'] = 'Forzar básica para todos';
$string['send401_cancel'] = 'Tienes que introducir un usuario y contraseña válidos';
$string['send401_help'] = 'Si es Sí entonces se mostrará a todos los usuarios una caja de diálogo básica de autenticación y la página habitual de inicio de sesión será deshabilitada. En muchos casos esto no es deseable.';
