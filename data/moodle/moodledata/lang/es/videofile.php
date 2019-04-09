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
 * Strings for component 'videofile', language 'es', branch 'MOODLE_27_STABLE'
 *
 * @package   videofile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['captions'] = 'Subtítulos';
$string['captions_help'] = 'Añadir aquí transcripciones de la conversación en formato WebVTT.

Puede añadir varios archivos para proporcionar subtítulos en varios idiomas. Los nombres de los archivos, sin las correspondientes extensiones, se utilizarán para los títulos del video con la opción de subtítulos. En caso de que los archivos se nombren de acuerdo con la norma ISO 6392 (por ejemplo, eng.vtt y swe.vtt), las opciones se mostrarán como los nombres completos del idioma correspondiente según las preferencias de idioma del usuario (por ejemplo, English y Swedish si el idioma preferido del usuario es el inglés).';
$string['err_positive'] = 'Debe introducir un número positivo aquí.';
$string['filearea_captions'] = 'Subtítulos';
$string['filearea_posters'] = 'Pósteres';
$string['height'] = 'Altura';
$string['height_explain'] = 'Especifica la altura predeterminada del reproductor de video.';
$string['height_help'] = 'Introduzca aquí la altura del video (por ejemplo, 500 para una altura de 500 píxeles).';
$string['limitdimensions'] = '¿Limitar tamaño en modo responsiva?';
$string['limitdimensions_explain'] = 'Especifica si el ancho y la altura se deben utilizar como el tamaño máximo durante el modo de respuesta.';
$string['modulename_help'] = 'Utilice el módulo de videofile para añadir videos de html5 con retorno a flash (utilizando video.js). Este módulo también permite los subtítulos en varios idiomas.';
$string['posters'] = 'Imagen del póster';
$string['posters_help'] = 'Añadir una imagen aquí que se visualizará antes de que el video comience a reproducirse.';
$string['responsive'] = '¿Responsivo?';
$string['responsive_explain'] = 'Especifica si el modo responsivo se debe establecer como predeterminado o no.';
$string['responsive_help'] = 'Marque esta opción para adaptar el tamaño del video automáticamente al tamaño de la ventana del navegador.

Utilice los campos de ancho y altura para definir las proporciones del video (por ejemplo, 16/9 o 800/450).';
$string['video_fieldset'] = 'Video';
$string['videofile:addinstance'] = 'Añadir un nuevo Videofile';
$string['videofile_defaults_heading'] = 'Valores predeterminados para los ajustes de videofile';
$string['videofile_defaults_text'] = 'Los valores que se establecen aquí definen los valores predeterminados que se utilizan en el formulario de ajustes de videofile al crear un nuevo Videofile.';
$string['videofile:view'] = 'Ver Videofile';
$string['video_not_playing'] = '¿No se reproduce el video? Pruebe {$a}.';
$string['videos'] = 'Videos';
$string['videos_help'] = 'Añada aquí el archivo de video.

Puede añadir formatos alternativos para asegurarse de que se puedan reproducir independientemente del navegador que se utilice (normalmente, sirven .mp4, .ogv y .webm).';
$string['width'] = 'Ancho';
$string['width_explain'] = 'Especifica el ancho predeterminado del reproductor de video.';
$string['width_help'] = 'Introduzca aquí el ancho del video (por ejemplo, 800 para un ancho de 800 píxeles).';
