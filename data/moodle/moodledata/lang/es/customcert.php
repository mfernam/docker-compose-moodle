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
 * Strings for component 'customcert', language 'es', branch 'MOODLE_35_STABLE'
 *
 * @package   customcert
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcertpage'] = 'Añadir otra página al certificado';
$string['addelement'] = 'Añadir elemento';
$string['awardedto'] = 'Expedido a';
$string['certificate'] = 'Certificado';
$string['code'] = 'Código';
$string['copy'] = 'Copia';
$string['coursetimereq'] = 'Minutos necesarios en el curso';
$string['coursetimereq_help'] = 'Introduce aquí la cantidad mínima de tiempo, en minutos, que los estudiantes deben estar conectados al curso antes de recibir su certificado.';
$string['createtemplate'] = 'Crear plantilla';
$string['customcert:addinstance'] = 'Añadir una nueva copia del certificado';
$string['customcert:manage'] = 'Administrador un certificado personalizado';
$string['customcert:verifyallcertificates'] = 'Ver todos los certificados en el sitio';
$string['customcert:verifycertificate'] = 'Verificar un certificado';
$string['customcert:view'] = 'Ver un certificado personalizado';
$string['customcert:viewallcertificates'] = 'Ver todos los certificados';
$string['customcert:viewreport'] = 'Ver informe de curso';
$string['deletecertpage'] = 'Borrar página del certificado';
$string['deleteconfirm'] = 'Confirmación de borrado';
$string['deleteelement'] = 'Borrar elemento';
$string['deleteelementconfirm'] = '¿Estas seguro de querer eliminar este elemento?';
$string['deletepageconfirm'] = '¿Estás seguro de que quieres borrar esta página del certificado?';
$string['deletetemplateconfirm'] = '¿Estás seguro de que quieres borrar esta plantilla de certificado?';
$string['description'] = 'Descripción';
$string['editcustomcert'] = 'Editar certificado';
$string['editelement'] = 'Editar elemento';
$string['edittemplate'] = 'Editar plantilla';
$string['elementname'] = 'Nombre del elemento';
$string['elementname_help'] = 'Este será el nombre usado para identificar este elemento cuando se edite un certificado personalizado. Por ejemplo, usted puede tener múltiples imágenes en una página y le gustará distinguir entre ellas rápidamente cuando edite el certificado. Nota: Esto no se mostrará en el PDF.';
$string['elements'] = 'Elementos';
$string['elements_help'] = 'Esta será la lista de elementos a mostrar en el certificado.

Por favor note: Los elementos son expuestos en este orden. El orden se puede cambiar usando las flechas al lado de cada elemento.';
$string['elementwidth'] = 'Ancho';
$string['elementwidth_help'] = 'Especifique el ancho del elementp - \'0\' significa que no existen restricciones de ancho.';
$string['emailnonstudentcertificatelinktext'] = 'Ver informe de certificados';
$string['emailnonstudentgreeting'] = 'Hola';
$string['emailnonstudentsubject'] = '{$a->coursename}: {$a->certificatename}';
$string['emailothers'] = 'Enviar correo a otros';
$string['emailothers_help'] = 'Si está activo, se enviará a los correos electrónicos listados aquí (separados por coma) una copia de los certificados entregados.';
$string['emailstudentbody'] = 'Adjunto se encuentra tu certificado  \'{$a->certificatename}\' por el curso \'{$a->coursefullname}\'.';
$string['emailstudentcertificatelinktext'] = 'Ver certificado';
$string['emailstudentgreeting'] = 'Estimado {$a}';
$string['emailstudents'] = 'Email a los alumnos';
$string['emailteachers'] = 'Email a los profesores';
$string['font'] = 'Fuente';
$string['fontcolour'] = 'Color';
$string['fontcolour_help'] = 'Color de letra';
$string['font_help'] = 'El tipo de letra usado al generar este elemento.';
$string['fontsize'] = 'Tamaño';
$string['fontsize_help'] = 'El tamaño de la letra en puntos.';
$string['getcustomcert'] = 'Descargar certificado';
$string['height'] = 'Altura';
$string['height_help'] = 'Esta es la altura del certificado en PDF en mm. Como referencia una hoja de papel A4 tiene 297mm de alto y una tamaño carta tiene 279mm de alto.';
$string['invalidcode'] = 'Código suministrado inválido.';
$string['invalidcolour'] = 'El color escogido es inválido, por favor ingrese un nombre de color válido en HTML, o un color hexadecimal de 3 o 6 dígitos.';
$string['invalidelementwidth'] = 'Por favor introduzca un número positivo.';
$string['invalidheight'] = 'La altura debe ser un número válido mayor que cero.';
$string['invalidmargin'] = 'El márgen debe ser un número válido mayor que cero.';
$string['invalidposition'] = 'Por favor, selecciona un número positivo para la posición de {$a}.';
$string['invalidwidth'] = 'La anchura tiene que ser un número válido mayor que 0.';
$string['landscape'] = 'Apaisado';
$string['leftmargin'] = 'Margen izquierdo';
$string['leftmargin_help'] = 'Este es el margen izquierdo de la PDF certificado en mm.';
$string['load'] = 'Cargar';
$string['loadtemplate'] = 'Cargar plantilla';
$string['loadtemplatemsg'] = '¿Estás seguro de que deseas cargar esta plantilla? Esto eliminará las páginas existentes y los elementos de este certificado.';
$string['managetemplates'] = 'Gestionar plantillas';
$string['managetemplatesdesc'] = 'Este enlace le llevará a una nueva pantalla donde podrá manejar plantillas usadas por las actividades de certificados en los cursos.';
$string['modify'] = 'Modificar';
$string['modulename'] = 'Certificado personalizado';
$string['modulename_help'] = 'Este módulo permite la generación dinámica de certificados en PDF.';
$string['modulenameplural'] = 'Certificados personalizados';
$string['mycertificates'] = 'Mis certificados';
$string['name'] = 'Nombre';
$string['nametoolong'] = 'Has excedido el tamaño máximo permitido para el nombre';
$string['nocustomcerts'] = 'Todavía no hay certificados para este curso';
$string['noimage'] = 'Sin imagen';
$string['notemplates'] = 'Sin plantillas';
$string['notissued'] = 'Sin emitir';
$string['notverified'] = 'No verificado';
$string['options'] = 'Opciones';
$string['page'] = 'Página {$a}';
$string['pluginadministration'] = 'Administración de certificados';
$string['pluginname'] = 'Certificado personalizado';
$string['portrait'] = 'Vertical';
$string['posx'] = 'Posición X';
$string['posx_help'] = 'Esta es la posición en mm desde la esquina superior izquierda donde desea que el punto de referencia del elemento se ubique en la dirección X.';
$string['posy'] = 'Posición Y';
$string['posy_help'] = 'Esta es la posición en mm desde la esquina superior izquierda donde desea que el punto de referencia del elemento se ubique en la dirección Y.';
$string['print'] = 'Imprimir';
$string['rearrangeelements'] = 'Cambiar la posición de los elementos';
$string['rearrangeelementsheading'] = 'Arrastrar y soltar elementos para cambiar su posición en el certificado.';
$string['receiveddate'] = 'Fecha de emisión';
$string['refpoint'] = 'Ubicación del punto de referencia';
$string['refpoint_help'] = 'El punto de referencia es la ubicación de un elemento desde el cual se determinan sus coordenadas x/y. Se indica con el \'+\' que aparece en el centro o las esquinas del elemento.';
$string['replacetemplate'] = 'Reemplazar';
$string['requiredtimenotmet'] = 'Debes pasar un mínimo de {$a->requiredtime} minutos en el curso antes de acceder a este certificado.';
$string['rightmargin'] = 'Margen derecho';
$string['rightmargin_help'] = 'Este es el márgen derecho del certificado en PDF en mm.';
$string['save'] = 'Guardar';
$string['saveandclose'] = 'Guardar y cerrar';
$string['saveandcontinue'] = 'Guardar y continuar';
$string['savechangespreview'] = 'Guardar cambios y previsualizar';
$string['savetemplate'] = 'Guardar plantilla';
$string['search:activity'] = 'Certificado personalizado - información de la actividad';
$string['setprotection'] = 'Establecer protección';
$string['setprotection_help'] = 'Elige las acciones que deseas evitar que los usuarios realicen en este certificado.';
$string['showposxy'] = 'Mostrar posición X e Y';
$string['showposxy_desc'] = 'Esto mostrará la posición en los ejes X e Y cuando se edita un elemento, permitiendo al usuario especificar su ubicación con precisión.

No es necesario si tiene pensado utilizar sólo la opción de arrastrar y soltar para esta acción.';
$string['templatename'] = 'Nombre de la plantilla';
$string['templatenameexists'] = 'Ese nombre de plantilla está en uso actualmente, por favor escoja otro.';
$string['topcenter'] = 'Centrado';
$string['topleft'] = 'Superior izquierda';
$string['topright'] = 'Superior derecha';
$string['type'] = 'Tipo';
$string['uploadimage'] = 'Subir imagen';
$string['uploadimagedesc'] = 'Este enlace le llevará a una nueva pantalla donde podrá cargar imágene que estarán disponibles en su sitio para que sean usadas para los certificados personalizados.';
$string['verified'] = 'Verificado';
$string['verify'] = 'Verificar';
$string['verifycertificate'] = 'Verificar certificado';
$string['verifycertificateanyone'] = 'Permitir a todos verificar certificados';
$string['verifycertificateanyone_help'] = 'Esta configuración permite que cualquier persona con el enlace de verificación de certificado (incluso sin iniciar sesión en la plataforma), pueda verificar un certificado.';
$string['width'] = 'Ancho';
$string['width_help'] = 'Este es el ancho del certificado en PDF en mm. Como referencia una hoja A4 tiene un ancho de 210mm y una tamaño carta tiene 216mm.';
