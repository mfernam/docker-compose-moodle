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
 * Strings for component 'klassenbuch', language 'es', branch 'MOODLE_32_STABLE'
 *
 * @package   klassenbuch
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eventchapterdeleted'] = 'Capítulo borrado';
$string['eventchapterupdated'] = 'Capítulo actualizado';
$string['eventchapterviewed'] = 'Capítulo visto';
$string['eventsubscriptioncreated'] = 'Suscripción Klassenbuch creada';
$string['eventsubscriptiondeleted'] = 'Suscripción Klassenbuch borrada';
$string['everyonecannowchoose'] = 'Todos pueden elegir suscribirse a este libro';
$string['everyoneisnowsubscribed'] = 'Todos están suscritos a este libro.';
$string['everyoneissubscribed'] = 'Todos están suscritos';
$string['existingsubscribers'] = 'Suscriptores actuales';
$string['exportpdf'] = 'Exportar como PDF';
$string['faq'] = 'FAQ de Klassenbuch';
$string['faq_help'] = '*¿Por qué sólo dos niveles?*

Dos niveles son normalmente suficientes para todos los libros. Tres niveles podrían dar lugar a documentos mal estructurados. El módulo Libro está diseñado para crear materiales de estudio de pocas páginas. Por regla general es mejor utilizar el formato PDF para documentos más grandes. La manera más fácil de crear PDFs son las impresoras virtuales (ver <a  href="http://sector7g.wurzel6.de/pdfcreator/index_en.htm"  target="_blank">PDFCreator</a>,
<a  href="http://fineprint.com/products/pdffactory/index.html"  target="_blank">PDFFactory</a>,
<a  href="http://www.adobe.com/products/acrobatstd/main.html"  target="_blank">Adobe Acrobat</a>, etc.).

*¿Pueden editar libros los estudiantes?*

Sólo los profesores pueden crear y editar libros. No hay planes de implementar la edición de libros para estudiantes, pero alguien podría crear algo similar (Portfolio). La razón principal de esta medida es mantener el módulo Libro tan simple como sea posible.

*¿Cómo busco en los libros?*

Por el momento sólo hay una forma de hacerlo, utilizar la búsqueda del navegador en la pantalla de impresión. La búsqueda global sólo es posible por ahora en los foros Moodle. Sería agradable disponer de búsqueda global para todos los recursos, incluidos los libros, ¿algún voluntario?.

*Mis títulos no caben en una línea*

Puede reescribir sus títulos o pedir al administrador del sitio que cambie el ancho de la Tabla de Contenidos. El ancho está definido de forma global para todos los libros en la página de configuración del módulo.';
$string['fieldtitle'] = 'Campo Título';
$string['forcessubscribe'] = 'Este libro obliga a todos a suscribirse';
$string['forcesubscribe'] = 'Todos serán suscritos a este libro';
$string['globalfields'] = 'Campos globales';
$string['globalfieldspage'] = 'la página de campos globales';
$string['globalsettingspage'] = 'la página de ajustes globales de Klassenbuch';
$string['hiddenbydefault'] = 'Oculto por defecto';
$string['hiddentostudent'] = 'Oculto al estudiante';
$string['klassenbuch'] = 'klassenbuch';
$string['klassenbuch:addinstance'] = 'Añadir nuevo Klassenbuch';
$string['klassenbuch:edit'] = 'Editar capítulos del libro';
$string['klassenbuch:initialsubscriptions'] = 'Inicialmente suscrito al libro';
$string['klassenbuch:managesubscriptions'] = 'Suscribir / Cancelar suscripción de otros usuarios';
$string['klassenbuch:read'] = 'Leer libro';
$string['klassenbuchs'] = 'klassenbuch';
$string['klassenbuch:viewhiddenchapters'] = 'Ver los capítulos del libro ocultos';
$string['klassenbuch:viewsubscribers'] = 'Ver qué usuarios están suscritos';
$string['mailsent'] = '{$a->count} participantes enviaron el capítulo {$a->chapter}';
$string['manageglobalfields'] = 'Administrar campos globales';
$string['missingfilemanagement'] = 'Queridos usuarios del módulo Libro, me imagino que ya se habrán dado cuenta de que no es posible borrar o administrar ficheros utilizados en los capítulos del Libro. Por favor voten en {$a} para arreglar esto, gracias. Petr Škoda';
$string['modulename'] = 'Klassenbuch';
$string['modulename_help'] = 'Klassenbuch es un material de estudio de varias páginas.';
$string['modulenameplural'] = 'Klassenbuchs';
$string['navexit'] = 'Salir del libro';
$string['navnext'] = 'Siguiente';
$string['navprev'] = 'Anterior';
$string['newfieldtitle'] = 'Nuevo campo de Título';
$string['nosubscribers'] = 'Nadie se ha suscrito a este libro';
$string['nownotsubscribed'] = '{$a->name} NO recibirá copias de este libro \'{$a->book}\' por correo electrónico.';
$string['nowsubscribed'] = '{$a->name} recibirá copias de este libro \'{$a->book}\' por correo electrónico.';
$string['numbering'] = 'Numeración de capítulos';
$string['numbering0'] = 'Ninguna';
$string['numbering1'] = 'Números';
$string['numbering2'] = 'Viñetas';
$string['numbering3'] = 'Indentada';
$string['numbering_help'] = '* Ninguna - Los títulos de capítulos y subcapítulos no tienen ningún formato. Utiliza esta opción si quieres definir estilos de numeración especiales. Por ejemplo letras: en el título del capítulo escribe "A Primer Capítulo", "A.1 Algún subcapítulo",...
* Números - los capítulos y subcapítulos se numeran (1, 1.1, 1.2, 2, ...)
* Viñetas - los subcapítulos se indentan y se muestran con viñetas
* Indentada - los subcapítulos se indentan';
$string['numberingoptions'] = 'Opciones de numeración disponibles';
$string['numberingoptions_help'] = 'Selecciones las opciones de numeración que deberían estar disponibles cuando se creen nuevos libros.';
$string['page-mod-klassenbuch-x'] = 'Cualquier página del módulo klassenbuch';
$string['pluginadministration'] = 'Administración de Klassenbuch';
$string['pluginname'] = 'Klassenbuch';
$string['potentialsubscribers'] = 'Suscriptores potenciales';
$string['removesubscriber'] = 'Eliminar';
$string['reply'] = 'Leer el libro entero';
$string['replytouser'] = 'Correos electrónicos del usuario';
$string['send'] = 'Enviar';
$string['showall'] = 'Mostrar todos los usuarios';
$string['showclassplan'] = 'Mostrar el programa de la clase en el menú';
$string['showsubscribers'] = 'Mostrar suscriptores';
$string['subchapter'] = 'Subcapítulo';
$string['subscribe'] = 'Quiero suscribirme a este libro';
$string['subscribers'] = 'Suscriptores';
$string['subscribersto'] = 'Suscriptores de \'{$a}';
$string['toc'] = 'Tabla de contenidos';
$string['top'] = 'arriba';
$string['unsubscribe'] = 'Quiero eliminar mi suscripción a este libro';
$string['viewclassplan'] = 'Ver el programa de la clase';
$string['withselectedfields'] = 'Con los campos seleccionados';
