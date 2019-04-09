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
 * Strings for component 'qtype_varnumericset', language 'es', branch 'MOODLE_35_STABLE'
 *
 * @package   qtype_varnumericset
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answer'] = 'Respuesta: {$a}';
$string['answerno'] = 'Respuesta {$a}';
$string['checknumerical'] = 'Si es correcto numéricamente';
$string['checkpowerof10'] = 'Si está deshabilitada la potencia de 10';
$string['checkrounding'] = 'Si el redondeo es incorrecto';
$string['checkscinotation'] = 'Si era necesaria la notación científica pero no se usó';
$string['correctansweris'] = 'La respuesta correcta es: {$a}';
$string['correctansweriserror'] = '{$a->answer} <sup>+</sup>/<sub>-</sub> {$a->error}';
$string['correctanswerissigfigs'] = '{$a->answer} ({$a->sigfigs} cifras significativas)';
$string['correctanswers'] = 'Respuestas correctas';
$string['error'] = 'Error permitido +/-';
$string['errorreportedbyexpressionevaluator'] = 'Error al evaluar la expresión: {$a}';
$string['expectingassignment'] = 'Debes usar una expresión matemática para asignar valor a una \'variable calculada\'.';
$string['expressionevaluatesasinfinite'] = 'El resultado es infinito.';
$string['expressionevaluatesasnan'] = 'El resultado no es un número.';
$string['forallanswers'] = 'Para todas las respuestas';
$string['notenoughanswers'] = 'Este tipo de pregunta requiere al menos {$a} respuestas';
$string['notvalidnumber'] = 'No has introducido un número en un formato reconocible.';
$string['notvalidnumberprepostfound'] = 'Por favor, introduce un número válido y nada más.';
$string['options'] = 'Opciones';
$string['pleaseenterananswer'] = 'Por favor, introduce una respuesta.';
$string['pluginname'] = 'Conjunto de variables numéricas';
$string['preandpostfixesignored'] = 'Solo la parte numérica de tu respuesta fue evaluada.';
$string['questiontext'] = 'Texto de la pregunta y variables incluidas';
$string['randomseed'] = 'Cadena que actuará como semilla de la aleatorización';
$string['recalculatenow'] = 'Recalcular ahora';
$string['requirescinotation'] = 'Se requiere notación científica';
$string['sigfigs'] = 'Cifras significativas';
$string['syserrorpenalty'] = 'Por cada error descontar';
$string['unspecified'] = 'Sin especificar';
$string['varheader'] = 'Variable {no}';
$string['variables'] = 'Variables';
$string['variant'] = 'Valor para la variante {$a}';
$string['variants'] = 'Valor para las variantes';
$string['varname'] = 'Nombre o tarea';
$string['varnumericset'] = 'Conjunto de variables numéricas';
$string['varnumericset_help'] = 'En respuesta a una pregunta, el usuario introduce un número.

Los números usados para calcular una respuesta son elegidos de conjuntos predefinidos que a su vez pueden ser previamente obtenidos de expresiones matemáticas.

Todas las expresiones son calculadas al mismo tiempo que se generan las preguntas y los valores de funciones aleatorias son iguales para todos los usuarios. Para una pregunta sin variantes, con expresiones calculadas sobre la marcha y con valores aleatorios diferentes para cada usuario consulta el tipo de preguntas \'variable numérica\'.';
$string['varnumericsetsummary'] = 'Permite una respuesta numérica, la pregunta puede tener diferentes variantes, las expresiones son evaluadas previamente para cada variante de la pregunta';
$string['vartypecalculated'] = 'Variable calculada';
$string['vartypepredefined'] = 'Variable predefinida';
$string['youmustprovideavalueforatleastonevariant'] = 'Debes proporcionar un valor aquí.';
