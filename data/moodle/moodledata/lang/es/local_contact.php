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
 * Strings for component 'local_contact', language 'es', branch 'MOODLE_35_STABLE'
 *
 * @package   local_contact
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configure'] = 'Configurar este plugin';
$string['confirmationemail'] = '<p>Estimado/a [fromname],</p>
<p>Gracias por contactar con nosotros. Si es necesario nos pondremos en contacto contigo.</p>
<p>Saludos,</p>
<p>[supportname]<br>
[sitefullname]<br>
<a href="[siteurl]">[siteurl]</a></p>';
$string['confirmationmessage'] = 'Gracias por contactar con nosotros. Si es necesario nos pondremos en contacto contigo.';
$string['confirmationsent'] = 'Hemos enviado un correo a tu dirección de correo electrónico {$a}.';
$string['defaultsubject'] = 'Nuevo mensaje';
$string['errorsending'] = 'Ha ocurrido un error mientras se enviaba el mensaje. Por favor, inténtalo de nuevo más tarde.';
$string['errorsendingtitle'] = 'Error al enviar el mensaje';
$string['extrainfo'] = '<hr>
<p><strong>Información adicional del usuario</strong></p>
<ul>
    <li><strong>Usuario del sitio:</strong> [userstatus]</li>
    <li><strong>Idioma preferido:</strong> [lang]</li>
    <li><strong>Dirección IP:</strong> [userip]</li>
    <li><strong>Navegador:</strong> [http_user_agent]</li>
    <li><strong>Formulario web:</strong> <a href="[http_referer]">[http_referer]</a></li>
</ul>';
$string['field-email'] = 'email';
$string['field-message'] = 'mensaje';
$string['field-name'] = 'nombre';
$string['field-subject'] = 'asunto';
$string['forbidden'] = 'Prohibido';
$string['globalhelp'] = 'Contact Form es un plugin para Moodle que permite procesar información enviada a través de un formulario de contacto HTML a la dirección de correo de soporte de tu sitio.';
$string['lockedout'] = 'BLOQUEADO';
$string['loginrequired'] = 'Se requiere iniciar sesión';
$string['loginrequired_description'] = 'Permitir solo a los usuarios conectados enviar el formulario de contacto. No se considera a los invitados como usuarios conectados.';
$string['norecaptcha'] = 'No ReCAPTCHA';
$string['norecaptcha_description'] = 'No usar ReCAPATCHA con formularios procesados por el plugin Contact Form.';
$string['nosubjectsitename'] = 'Nombre del sitio web en el asunto del mail';
$string['nosubjectsitename_description'] = 'No incluir el nombre del sitio en el asunto del mail.';
$string['notconfirmed'] = 'NO CONFIRMADO';
$string['pluginname'] = 'Formulario de contacto';
$string['privacy:metadata'] = 'El plugin Contact Form no guarda información personal de ningún usuario.';
$string['recapchainfo'] = 'Usando ReCAPTCHA';
$string['recapchainfo_description'] = 'Actualmente se está usando ReCAPTCHA en Moodle. <strong>Debes</strong>:<br>
<ul>
  <li>Asegurarte de que la etiqueta {recaptcha} está incluida en todos los formularios procesados por el plugin Contact Form para Moodle.</li>
  <li>Asegurarte de que <a href="https://moodle.org/plugins/filter_filtercodes"> el plugin FilterCodes</a> está instalado y habilitado.</li>
</ul>';
$string['recipient_list'] = 'Listado de destinatarios disponibles';
$string['recipient_list_description'] = 'Puedes configurar una lista de posibles destinatarios aquí, cualquiera de los cuales se puede usar en un Formulario de contacto para especificar el destinatario del correo electrónico mediante un campo de texto oculto, o en una lista desplegable de selección para permitir a los usuarios seleccionar el destinatario sin divulgar el correo electrónico real del destinatario. Si la lista está vacía, los correos electrónicos se enviarán a la dirección de correo electrónico de Moodle, ya sea a la dirección de correo electrónico de soporte o al administrador principal de Moodle.
Cada línea debe consistir en un alias / etiqueta de texto único, una
sola dirección de correo electrónico y un nombre, cada uno separado por tuberías (|). Por ejemplo:
<pre>
soporte técnico|support@example.com|Joe Fixit
webmaster|admin@example.com|Mr. Moodle
electricidad|nikola.tesla@example.com|Nikola
historia|charles.darwin@example.com|Mr. Darwin
legislación|issac.newton@example.com|Isaac Newton
matemáticas|galileo.galilei@example.com|Galileo
inglés|mark.twain@example.com|Mark Twain
física|albert.einstein@example.com|Albert
ciencia|thomas.edison@example.com|Mr. Edison
filosofía|aristotle@example.com|Aristotle
</pre>';
