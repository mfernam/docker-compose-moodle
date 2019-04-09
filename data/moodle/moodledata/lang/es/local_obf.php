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
 * Strings for component 'local_obf', language 'es', branch 'MOODLE_35_STABLE'
 *
 * @package   local_obf
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriteria'] = 'Crear nueva regla de concesión';
$string['addnewcriterion'] = 'Añadir curso';
$string['apierror'] = 'No se puedo encontrar el servicio OBF. Por favor revise la URL de la API en los ajustes.';
$string['apierror0'] = 'La petición al servicio Open Badge Factory falló. El administrador del sitio tiene que configurar los ajustes del plugin.';
$string['apierror400'] = 'La petición al servicio OBF falló debido a un error/falta de un parámetro.';
$string['apierror403'] = 'Open Badge Factory denegó la petición. El administrador del sitio tiene que validar de nuevo el cliente Open Badge Factory.';
$string['apierror404'] = 'No se puedo encontrar el servicio OBF. Por favor revise la URL de la API en los ajustes.';
$string['apierror405'] = '405 Método no permitido';
$string['apierror411'] = '411 Longitud requerida';
$string['apierror413'] = '413 Tamaño de petición demasiado grande';
$string['apierror429'] = '429 Demasiadas peticiones';
$string['apierror495'] = '495 Error de certificado';
$string['apierror496'] = 'El certificado tiene que ser generado antes de que Open Badge Factory se pueda usar con Moodle. Inicia sesión en Open Badge Factory para conseguir el vale necesario y pégalo en el campo de debajo.';
$string['apierror500'] = '500 Error interno del servidor';
$string['apierror502'] = '502 Gateway erróneo';
$string['apierror503'] = 'El servicio OBF está indisponible temporalmente. Por favor inténtelo de nuevo más tarde.';
$string['authenticate'] = 'Autenticar';
$string['authenticationsuccess'] = 'Autenticación satisfactoria.';
$string['availablecategories'] = 'Categorías disponible';
$string['availablecategoriesselect'] = 'Categorías';
$string['backpackconnected'] = 'Conectado';
$string['backpackdisconnected'] = 'Desconectado';
$string['backpackemail'] = 'Dirección de correo electrónico';
$string['backpackemailaddexternalobp'] = '<p>No se puedo encontrar ningún usuario que coincidiera con la dirección de correo electrónico \'<strong>{$a}</strong>\' de Open Badge Passport.</p><p>Para añadir tu dirección de correo electrónico abre <a href="https://openbadgepassport.com">https://openbadgepassport.com</a> en tu navegador e inicia sesión. </p><p>Después de iniciar sesión sigue la ruta <strong><i>Mi cuenta > Ajustes de cuenta > Correos electrónicos</i></strong>.</p><p>Con la página <i>Correos electrónicos</i> abierta, añade \'<strong>{$a}</strong>\' en el campo \'Añadir nueva dirección de correo electrónico\' y guarda.</p>';
$string['backpackemail_help'] = 'Dirección de correo electrónico asociada a tu cuenta de Mozilla OpenBadges Backpack';
$string['backpackemailnotfound'] = 'No se pudo encontrar ningún usuario de Mozilla Backpack por la dirección de correo electrónico \'{$a}\'.';
$string['backpackgroups'] = 'Grupos de insignias';
$string['backpackgroups_help'] = 'Seleccione los grupos de insignia que se muestran en su monitor de insignias.';
$string['backpacksettings'] = 'Ajustes de Backpack';
$string['badgeactions'] = 'Acciones';
$string['badgeblacklist'] = 'Ocultar insignias';
$string['badgecategories'] = 'Categorías';
$string['badgecreated'] = 'Creado en';
$string['badgecriteria'] = 'Reglas de concesión';
$string['badgecriteriaurl'] = 'URL de los criterios';
$string['badgedescription'] = 'Descripción';
$string['badgedetails'] = 'Detalles de insignia';
$string['badgeemail'] = 'Plantilla de correo electrónico';
$string['badgeexpiresby'] = 'Expira en';
$string['badgeexport'] = 'Exportar insignias creadas anteriormente en Moodle';
$string['badgeexportdescription'] = 'Se hará una copia de todas las insignias seleccionadas en Open Badge Factory.';
$string['badgeexportzeroexportable'] = 'No se encontraron insignias exportables, o todas las insignias ya fueron exportadas.';
$string['badgehistory'] = 'Historial de concesión';
$string['badgeimage'] = 'Insignia';
$string['badgeissued'] = 'La insignia se emitió correctamente.';
$string['badgeissuedwhen'] = 'Esta insignia se concede automáticamente cuando se cumpla cualquiera de las siguientes reglas:';
$string['badgelist'] = 'Lista de insignias';
$string['badgelisttitle'] = 'Todas las insignias';
$string['badgename'] = 'Nombre';
$string['badgetags'] = 'Etiquetas';
$string['badgewasautomaticallyissued'] = 'Después de la revisión se concedió la insignia al beneficiario(s) {$a}.';
$string['blacklistbadge'] = 'No mostrar insignia';
$string['blacklistdescription'] = 'Seleccione las insignias que no quiere mostrar en su perfil. Puede ocultar cualquier insignia emitida por este entorno Moodle.';
$string['cancel'] = 'Cancelar';
$string['cannoteditcriterion'] = 'Esta regla no puede ser editada porque la insignia ya se ha emitido automáticamente aplicando esta regla.';
$string['categorysettings'] = 'Ajustes de categoría';
$string['certrequestfailed'] = 'Hubo un error durante la solicitud de certificado desde la API';
$string['closepopup'] = 'Cerrar';
$string['completedbycriterion'] = 'por <strong>{$a}</strong>';
$string['configurecriteria'] = 'Configurar';
$string['confirmcriteriondeletion'] = '¿Está seguro de querer borrar esta regla de concesión?';
$string['connect'] = 'Conectar {$a}';
$string['connectionisworking'] = 'OBF está conectado y funcionando. El certificado de cliente termina en <strong>{$a}</strong>.';
$string['connectionstatus'] = 'Estado de la conexión de Backpack.';
$string['coursebadgelisttitle'] = 'Insignias relacionadas con este curso';
$string['coursecompletedby'] = 'Completado por';
$string['courseobfbadges'] = 'Insignias';
$string['courserequired'] = 'Debe seleccionar al menos un curso';
$string['courseuserbadges'] = 'Insignias del usuario';
$string['criteriaaddcourse'] = 'Añadir curso';
$string['criteriacompletedwhen'] = 'Esta regla se cumple cuando...';
$string['criteriacompletedwhenall'] = 'Tienen que completarse todos los cursos siguientes:';
$string['criteriacompletedwhenany'] = 'Tiene que completarse cualquiera de los cursos siguientes:';
$string['criteriacompletionmethodall'] = 'Todos estos cursos están completados';
$string['showmorerecipients'] = 'más';
