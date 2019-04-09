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
 * Strings for component 'block_course_contents', language 'es', branch 'MOODLE_35_STABLE'
 *
 * @package   block_course_contents
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['config_autotitle'] = 'Título automático';
$string['config_autotitle_desc'] = 'Si la sección no tiene un título explícito definido, el bloque puede intentar extraer el título del texto del resumen de la sección. Esta configuración determina el comportamiento predeterminado de esta función en instancias del bloque.';
$string['config_autotitle_forced_off'] = 'Deshabilitado en todos los bloques';
$string['config_autotitle_forced_on'] = 'Habilitado en todos los bloques';
$string['config_autotitle_help'] = 'Si la sección no tiene un título explícito definido, el bloque puede intentar extraer el título del texto del resumen de la sección.

Si el resumen comienza con un encabezado, utilizará dicho texto de encabezado. Si el resumen comienza con un texto en negrita, se usará como título de sección. Si el resumen consta de varios párrafos, se usará el primero.';
$string['config_autotitle_label'] = 'Extraer automáticamente el título del resumen de la sección';
$string['config_autotitle_optional_off'] = 'Opcional, deshabilitado por defecto';
$string['config_autotitle_optional_on'] = 'Opcional, habilitado por defecto';
$string['config_blocktitle'] = 'Título del bloque';
$string['config_blocktitle_default'] = 'Tabla de contenido';
$string['config_blocktitle_help'] = 'Deje este campo vacío para usar el título del bloque por defecto. Si define aquí un título, se usará en lugar del título por defecto.';
$string['config_enumerate'] = 'Enumerar títulos de sección';
$string['config_enumerate_desc'] = 'El número de la sección se puede mostrar antes del título de la sección. Esta configuración determina el valor predeterminado del modo de enumeración en cada instancia de bloque y si se puede cambiar o no.';
$string['config_enumerate_forced_off'] = 'Deshabilitado en todos los bloques';
$string['config_enumerate_forced_on'] = 'Habilitado en todos los bloques';
$string['config_enumerate_label'] = 'Si se habilita, el número de sección se muestra antes del título de la sección';
$string['config_enumerate_optional_off'] = 'Opcional, deshabilitado por defecto';
$string['config_enumerate_optional_on'] = 'Opcional, habilitado por defecto';
$string['course_contents:addinstance'] = 'Añadir un nuevo bloque de contenido del curso';
$string['notusingsections'] = 'Este formato de curso no usa secciones.';
$string['pluginname'] = 'Contenido del curso';
