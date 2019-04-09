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
 * Strings for component 'reader', language 'es', branch 'MOODLE_35_STABLE'
 *
 * @package   reader
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bookcovers'] = 'Mostrar portadas de los libros';
$string['confirmdeleteattempts'] = '¿Desea realmente borrar estos intentos?';
$string['confirmstartattemptlimit'] = 'Número de intentos permitidos: {$a}. Está a punto de comenzar un nuevo intento. ¿Desea continuar?';
$string['confirmstartattempttimelimit'] = 'Este cuestionario tiene un límite de tiempo y está restringido a {$a} intento(s). Está a punto de comenzar un nuevo intento. ¿Desea continuar?';
$string['confirmstarttimelimit'] = 'Este cuestionario tiene un límite de tiempo. ¿Está seguro de querer empezar?';
$string['countactive'] = 'Alumnos activos';
$string['countactive_help'] = 'El número de alumnos que han realizado al menos un cuestionario de lectura.';
$string['countfailed'] = 'Cuestionarios fallidos';
$string['countinactive'] = 'Alumnos inactivos';
$string['countinactive_help'] = 'Número de alumnos que no han realizado ningún cuestionario de lectura.';
$string['countpassed'] = 'Cuestionarios superados';
$string['countrating'] = 'Número de valoraciones';
$string['current'] = 'Actual';
$string['currentlevel'] = 'Nivel actual';
$string['dataallavailable'] = 'la información para el/los {$a} libro(s) está disponible';
$string['dataalldownloaded'] = 'la información para el/los {$a} libro(s) se ha descargado';
$string['datasomeavailable'] = 'la información para {$a->new} del total de {$a->all} libro(s) está disponible';
$string['defaultcategoryname'] = 'Cuestionarios de lectura';
$string['defaultcoursename'] = 'Cuestionarios de lectura';
$string['defaultgoal'] = 'Objetivo por defecto';
$string['defaultgoals'] = 'Objetivos por defecto';
$string['defaultquestioncategoryinfo'] = '{$a->category} preguntas para el {$a->quiz}';
$string['defaultrates'] = 'Calificaciones por defecto';
$string['definelogindetails'] = 'Por favor defina los detalles de inicio de sesión: {$a}';
$string['delayineffect'] = 'El aplazamiento de cuestionario está activo';
$string['delayquizattempts'] = 'Aplazar futuros intentos de cuestionario';
$string['delete'] = 'Eliminar';
$string['deleteallattempts'] = 'Eliminar todos los intentos de los cuestionarios de lectura';
$string['deleteallattempts_help'] = 'Por norma general, NO debería borrar intentos de cuestionarios de lectura.

Sólo debería eliminar intentos si está completamente seguro de que los alumnos de este curso no volverán a realizar cuestionarios de lectura en este sitio Moodle jamás.

Esto se debe a que eliminando los intentos de los cuestionarios de lectura, permite a los alumnos volver a hacer cualquier cuestionario de lectura que ya hubieran realizado antes. Esta NO es la forma en la que se desea que funcione el módulo Lector. Los alumnos deberían tener sólo UNA oportunidad de hacer cada cuestionario de lectura.

Eliminar intentos de los cuestionarios de lectura también reseteará las puntuaciones de lecturas de todos los alumnos a cero, lo que probablemente no quiera ni usted ni los alumnos.';
$string['deleteattempts'] = 'Eliminar los intentos seleccionados';
$string['deletecategories'] = 'Eliminar categorías';
$string['deletecourses'] = 'Eliminar cursos';
$string['deletegoals'] = 'Eliminar los objetivos para grupos y niveles';
$string['deletegoals_help'] = 'Los objetivos de lectura por defecto para grupos o los niveles de lectura serán eliminados.';
$string['deletemessages'] = 'Eliminar los mensajes del módulo Lector';
$string['deletemessages_help'] = 'Todos los mensajes que aparecen en la página principal de los alumnos de este curso sobre actividades de lectura serán eliminados.';
$string['deleterates'] = 'Eliminar calificaciones para grupos y niveles';
$string['deleterates_help'] = 'Las calificaciones de los cuestionarios de lectura para grupos o niveles de lectura serán eliminados.';
$string['difficulty'] = 'Dificultad';
$string['difficultyshort'] = 'RL';
$string['disallowpromotion'] = 'NO permitir ascensos';
$string['displayoptions'] = 'Mostrar opciones';
$string['downloadbookswithoutquizzes'] = 'Descargar información del libro (sin cuestionarios)';
$string['downloadbookswithquizzes'] = 'Descargar información del libro y cuestionarios';
$string['downloadedbooks'] = 'Se descargó la información de los siguiente libros:';
$string['downloadexcel'] = 'Descargar Excel';
$string['downloadextrapoints'] = 'Por favor descargue los cuestionarios "Puntos Extra"';
$string['downloadmode'] = 'Modo';
$string['downloadmode_help'] = 'Esta página puede presentarse de dos modos:

**Normal**
: En el modo normal, sólo estarán disponibles los libros cuya información aún no se haya descargado o los libros cuya información se haya actualizado. Los libros para los que se haya descargado información más reciente no estarán disponibles.

**Reparar**
: En el modo reparar, todos los libros están disponibles para descargar. Si alguna información se ha descargado anteriormente será sobre escrita por la nueva información descargada. Utilice este modo si quiere reparar cuestionarios defectuosos o información incorrecta. Tenga en cuenta que aunque los cuestionarios también serán sobre escritos, la información de los intentos de los alumnos en esos cuestionarios se mantendrá.';
$string['downloads'] = 'Descargar';
$string['downloadsettings'] = 'Descargar ajustes';
$string['duration'] = 'Duración';
$string['edit'] = 'Editar';
$string['editquiztoreader'] = 'Eliminar cuestionarios';
$string['error'] = 'Error: {$a}';
$string['errorsfound'] = 'Errores encontrados';
$string['err_regex_float'] = 'Este valor debe ser un número decimal entre 0,0 y 10,0';
$string['err_regex_integer'] = 'Este valor debe ser un número entero entre 0 y 100.000';
$string['hidden'] = 'Oculto';
$string['notavailable'] = 'Este cuestionario no está disponible actualmente';
$string['nothavepermissioncreateinstance'] = 'Lo siento, no tiene permiso para realizar esta acción';
$string['numberofextrapoints'] = 'Número de puntos extra';
$string['onlybookswithmorethan'] = 'Solo libros con más de';
$string['passworderror'] = 'La contraseña introducida es incorrecta';
$string['passwords_list'] = 'Lista de contraseñas';
$string['pleaseaskyourinstructor'] = 'Por favor pida a su instructor que le suba de nivel si es demasiado fácil para usted.';
$string['pleaseclose'] = 'Su petición ha sido procesada. Puede cerrar ya esta ventana';
$string['pleasewait'] = 'Por favor espere';
$string['points'] = 'Puntos';
$string['popup'] = 'Usar ventana "segura"';
$string['quiznotavailable'] = 'Lo sentimos, este cuestionario actualmente no está disponible para usted';
$string['sectiontypehidden'] = 'Una sección oculta';
$string['show'] = 'Mostrar';
$string['showall'] = 'Mostrar Todo';
$string['showdeleted'] = 'Mostrar intentos borrados';
$string['showhidden'] = 'Mostrar libros ocultos';
$string['showhide'] = 'Mostrar/Ocultar';
$string['showhidebook'] = 'Mostrar u ocultar';
$string['showprogressbar'] = 'Mostrar barra de progreso';
$string['showwordcount'] = 'Mostrar solo el contador de palabras';
$string['wordsorpoints'] = 'Mostrar palabras o puntos';
