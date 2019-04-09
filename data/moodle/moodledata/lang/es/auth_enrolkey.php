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
 * Strings for component 'auth_enrolkey', language 'es', branch 'MOODLE_31_STABLE'
 *
 * @package   auth_enrolkey
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['description'] = 'Esto proporciona matriculación basada en clave de auto registro';
$string['noemail'] = '¡Se intentó mandarte un correo electrónico pero falló!';
$string['pluginname'] = 'Matriculación basada en clave de auto registro';
$string['recaptcha'] = 'Añade un elemento de confirmación visual/auditiva a la página de registro para los usuarios que se registran por su cuenta. Esto protege a tu sitio contra los spammers y contribuye a una causa que vale la pena. Visita <a href="http://www.google.com/recaptcha">http://www.google.com/recaptcha</a> para obtener más detalles.';
$string['recaptcha_key'] = 'Habilitar elemento reCAPTCHA';
$string['settings_content'] = '<p>La matriculación basada en clave de auto registro permite al usuario crear su propia cuenta a través del botón "Crear nueva cuenta" en la página de inicio de sesión. El usuario recibe entonces un correo electrónico que contiene un enlace seguro a una página en la que puede confirmar su cuenta. Los inicios de sesión posteriores simplemente comprobarán el usuario y la contraseña con los valores almacenados en la base de datos de Moodle.</p><p>Durante el auto registro, si se introduce una clave de matriculación en el campo de clave de matriculación se procederá a matricular al nuevo usuario en cualquier curso con el que coincida. Las claves se habilitan en (Administración del curso > Usuarios > Métodos de matriculación > Añadir método > Auto-matriculación).</p><p>Nota: Además de habilitar el plugin, la matriculación basada en clave de auto registro debe estar seleccionada en el menú desplegable de auto registro en la página \'Gestión de autenticación\'.</p>';
$string['settings_heading'] = 'Ajustes generales';
$string['settings_required_description'] = 'La clave de matriculación será un campo requerido para la validación';
$string['settings_required_title'] = 'Se requiere una clave de matriculación para la validación';
$string['settings_visible_description'] = 'Añade un nuevo elemento a la página de registro para los usuarios que se auto registran. Esto se comprobará con las claves de matriculación disponibles y matriculará al usuario en los cursos con los que coincida.';
$string['settings_visible_title'] = 'Habilitar elemento clave de matriculación';
$string['signup_field_title'] = 'Clave de matriculación';
$string['signup_missing'] = 'Falta clave de matriculación';
$string['signup_token_invalid'] = 'La clave de matriculación que has introducido no es válida';
$string['signup_view'] = 'Matriculación en el curso';
$string['signup_view_message_basic'] = 'Has sido matriculado como {$a->role} en el curso \'<a href="{$a->href}">{$a->course}</a>';
$string['signup_view_message_basic_dates'] = 'Te has matriculado en {$a->course} como {$a->role}. <a href={$a->href}>Haz clic aquí para ver el curso.</a><br />El curso empieza: {$a->startdate}<br />El curso termina: {$a->enddate}';
$string['signup_view_message_basic_dates_endonly'] = 'Te has matriculado en {$a->course} como {$a->role}. <a href={$a->href}>Haz clic aquí para ver el curso.</a><br />El curso termina: {$a->enddate}';
$string['signup_view_message_basic_dates_startonly'] = 'Te has matriculado en {$a->course} como {$a->role}. <a href={$a->href}>Haz clic aquí para ver el curso.</a><br />El curso empieza: {$a->startdate}';
