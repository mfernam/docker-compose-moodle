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
 * Strings for component 'local_mailtest', language 'es', branch 'MOODLE_35_STABLE'
 *
 * @package   local_mailtest
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['credit'] = 'Michael Milette - <a href="http://www.tngconsulting.ca/">TNG Consulting Inc.</a>';
$string['errorsend'] = 'El correo electrónico de prueba no pudo ser entregado al servidor de correo. Revisa tus <a href="../../admin/settings.php?section=messagesettingemail" target="blank">ajustes de correo electrónico</a>.';
$string['from'] = '{$a->type}: <strong>{$a->email}</strong> (<a href="{$a->url}">{$a->label}</a>)';
$string['fromemail'] = 'De la dirección de correo electrónico';
$string['heading'] = 'Configuración del correo electrónico de prueba';
$string['message'] = '<p>Esto es un mensaje de prueba. Por favor, ignóralo.</p>
<p>Si has recibido este correo significa que has configurado correctamente los ajustes de correo electrónico de tu sitio Moodle.</p>
<hr><p><strong>Información de usuario adicional</strong></p>
<ul>
<li><strong>Estado de registro :</strong> {$a->regstatus}</li>
<li><strong>Lenguaje de preferencia  :</strong> {$a->lang}</li>
<li><strong>Navegador web del usuario :</strong> {$a->browser}</li>
<li><strong>Mensaje enviado desde :</strong> {$a->referer}</li>
<li><strong>Versión de Moodle :</strong> {$a->release}</li>
<li><strong>Dirección IP del usuario :</strong> {$a->ip}</li>
</ul>';
$string['notregistered'] = 'No registrado o no conectado.';
$string['phpmethod'] = 'Método por defecto PHP';
$string['pluginname'] = 'Prueba de correo electrónico';
$string['pluginname_help'] = 'La prueba de correo electrónico verificará los ajustes de correo electrónico de este sitio Moodle enviando un correo electrónico de prueba a la dirección que especifiques. Sólo para administradores del sitio.';
$string['primaryadminemail'] = 'Correo electrónico del administrador principal';
$string['recipientisrequired'] = 'Debes indicar la dirección de correo electrónico del destinatario.';
$string['registered'] = 'Usuario registrado ({$a}).';
$string['sendmethod'] = 'Método de envío de correo electrónico';
$string['sendtest'] = 'Enviar un mensaje de prueba';
$string['sentmail'] = 'Moodle entregó correctamente el mensaje de prueba al servidor de correo SMTP.';
$string['sentmailphp'] = 'El mensaje de prueba de Moodle fue aceptado correctamente por PHP Mail.';
$string['smtpmethod'] = 'Hosts SMTP: {$a}';
$string['toemail'] = 'A la dirección de correo electrónico';
$string['youremail'] = 'Tu dirección de correo electrónico';
