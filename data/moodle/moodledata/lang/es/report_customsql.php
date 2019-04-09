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
 * Strings for component 'report_customsql', language 'es', branch 'MOODLE_35_STABLE'
 *
 * @package   report_customsql
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcategory'] = 'Añadir una nueva categoría';
$string['addcategorydesc'] = 'Para cambiar la categoría de un informe, deberá editar dicho informe. Puede editar los textos de la categoría, eliminar una categoría o añadir una nueva.';
$string['addreport'] = 'Añadir una nueva consulta';
$string['addreportcategory'] = 'Añadir una nueva categoría para los informes';
$string['anyonewhocanveiwthisreport'] = 'Cualquiera que pueda ver este informe (report/customsql__view)';
$string['archivedversions'] = 'Versiones archivadas de esta consulta';
$string['at'] = 'en';
$string['automaticallydaily'] = 'Programada, a diario';
$string['automaticallymonthly'] = 'Programada, el primer día del mes';
$string['automaticallyweekly'] = 'Programada, el primer día de la semana';
$string['availablereports'] = 'Consultas a petición';
$string['availableto'] = 'Disponible para {$a}.';
$string['backtoreportlist'] = 'Volver a la lista de consultas';
$string['categorycontent'] = '({$a->manual} a petición, {$a->daily} a diario, {$a->weekly} cada semana, {$a->monthly} cada mes)';
$string['categoryexists'] = 'Los nombres de las categorías deben ser únicos y este nombre ya existe';
$string['categorynamex'] = 'Nombre de la categoría: {$a}';
$string['changetheparameters'] = 'Cambiar los parámetros';
$string['crontask'] = 'Consultas ad hoc de la base de datos: ejecutar tarea de informes programados';
$string['dailyheader'] = 'A diario';
$string['dailyheader_help'] = 'Estas consultas se ejecutan todos los días automáticamente a la hora especificada. Estos enlaces le permiten ver los resultados acumulados hasta el momento.';
$string['defaultcategory'] = 'Varios';
$string['delete'] = 'Eliminar';
$string['deleteareyousure'] = '¿Está seguro de que desea eliminar esta consulta?';
$string['deletecategoryareyousure'] = '<p>¿Está seguro de que desea eliminar esta categoría? </p><p>No puede contener ninguna consulta.</p>';
$string['deletecategoryyesno'] = '<p>¿Está seguro de que desea eliminar esta categoría? </p>';
$string['deletethiscategory'] = 'Eliminar esta categoría';
$string['deletethisreport'] = 'Eliminar esta consulta';
$string['description'] = 'Descripción';
$string['displayname'] = 'Nombre de la consulta';
$string['displaynamerequired'] = 'Debe introducir un nombre para la consulta';
$string['displaynamex'] = 'Nombre de la consulta: {$a}';
$string['downloadthisreportascsv'] = 'Descargar estos resultados en formato CSV';
$string['edit'] = 'Añadir/editar';
$string['editcategory'] = 'Actualizar categoría';
$string['editingareport'] = 'Edición de una consulta ad hoc de la base de datos';
$string['editthiscategory'] = 'Editar esta categoría';
$string['editthisreport'] = 'Editar esta consulta';
$string['emailbody'] = 'Estimado {$a}:';
$string['emailink'] = 'Para acceder al informe, haga clic en este enlace: {$a}';
$string['emailnumberofrows'] = 'Solo el número de filas y el enlace';
$string['emailresults'] = 'Poner los resultados en el cuerpo del correo electrónico';
$string['emailrow'] = 'El informe detectó {$a} fila.';
$string['emailrows'] = 'El informe detectó {$a} filas.';
$string['emailsent'] = 'Se ha enviado una notificación de correo electrónico a {$a}';
$string['emailsentfailed'] = 'No se puede enviar el correo electrónico a {$a}';
$string['emailsubject'] = 'Consulta {$a}';
$string['emailto'] = 'Enviar por correo electrónico automáticamente a';
$string['emailwhat'] = 'Qué enviar por correo electrónico';
$string['enterparameters'] = 'Introducir los parámetros de la consulta ad hoc de la base de datos';
$string['errordeletingcategory'] = '<p>Error al eliminar una categoría de consulta.</p><p>Deberá estar vacía para eliminarla.</p>';
$string['errordeletingreport'] = 'Error al eliminar una consulta.';
$string['errorinsertingreport'] = 'Error al introducir una consulta.';
$string['errorupdatingreport'] = 'Error al actualizar una consulta.';
$string['invalidreportid'] = 'ID {$a} de la consulta no válido.';
$string['lastexecuted'] = 'Esta consulta se ejecutó por última vez el {$a->lastrun}. Se ejecutó en {$a->lastexecutiontime} s.';
$string['managecategories'] = 'Administrar categorías del informe';
$string['manual'] = 'A petición';
$string['manualheader'] = 'A petición';
$string['manualheader_help'] = 'Estas consultas se ejecutan a petición al hacer clic en el enlace para ver los resultados.';
$string['monthlyheader'] = 'Mensuales';
$string['monthlyheader_help'] = 'Estas consultas se ejecutan automáticamente el primer día del mes para informar sobre el mes anterior. Estos enlaces le permiten ver los resultados acumulados hasta el momento.';
$string['monthlynote_help'] = 'Estas consultas se ejecutan automáticamente el primer día del mes para informar sobre el mes anterior. Estos enlaces le permiten ver los resultados acumulados hasta el momento.';
$string['morethanonerowreturned'] = 'Se ha devuelto más de una fila. Esta consulta debería devolver una fila.';
$string['nodatareturned'] = 'Esta consulta no ha devuelto ningún dato.';
$string['noexplicitprefix'] = 'No incluya el prefijo del nombre de la tabla <tt>{$a}</tt> en SQL. En su lugar, introduzca el nombre de la tabla sin prefijo en el interior de los caracteres <tt>{}</tt>.';
$string['noreportsavailable'] = 'No hay ninguna consulta disponible';
$string['norowsreturned'] = 'No se ha devuelto ninguna fila. Esta consulta debería devolver una fila.';
$string['noscheduleifplaceholders'] = 'Las consultas que contienen marcadores de posición solo se pueden ejecutar a petición.';
$string['nosemicolon'] = 'En SQL no se permite utilizar el carácter ;';
$string['notallowedwords'] = 'En SQL no se permite utilizar las palabras <tt>{$a}</tt>.';
$string['note'] = 'Notas';
$string['notrunyet'] = 'Todavía no se ha ejecutado esta consulta.';
$string['onerow'] = 'La consulta ha devuelto una fila, acumular los resultados de una fila cada vez.';
$string['parametervalue'] = '{$a->name}: {$a->value}';
$string['pluginname'] = 'Consultas ad hoc de la base de datos';
$string['query_deleted'] = 'Consulta eliminada';
$string['query_edited'] = 'Consulta editada';
$string['queryfailed'] = 'Error al ejecutar la consulta: {$a}';
$string['querylimit'] = 'Limitar las filas devueltas';
$string['querylimitrange'] = 'El número debe estar comprendido entre 1 y {$a}';
$string['queryparameters'] = 'Parámetros de consulta';
$string['queryparams'] = 'Introduzca los valores predeterminados para los parámetros de consulta.';
$string['queryparamschanged'] = 'Han cambiado los marcadores de posición de la consulta.';
$string['queryrundate'] = 'fecha de ejecución de la consulta';
$string['querysql'] = 'Consulta de SQL';
$string['querysqlrequried'] = 'Deberá introducir alguna SQL.';
$string['query_viewed'] = 'Consulta visualizada';
$string['recordlimitreached'] = 'Esta consulta ha alcanzado el límite de {$a} filas. Puede que se hayan omitido algunas filas del final.';
$string['reportfor'] = 'Consulta ejecutada el {$a}';
$string['requireint'] = 'Se necesita un valor entero';
$string['runable'] = 'Ejecutar';
$string['runablex'] = 'Ejecutar: {$a}';
$string['schedulednote'] = 'Estas consultas se ejecutan automáticamente el primer día del mes o la semana para informar sobre el mes o la semana anterior. Estos enlaces le permiten ver los resultados acumulados hasta el momento.';
$string['scheduledqueries'] = 'Consultas programadas';
$string['selectcategory'] = 'Seleccione una categoría para este informe';
$string['typeofresult'] = 'Tipo de resultado';
$string['unknowndownloadfile'] = 'Archivo de descarga desconocido.';
$string['userhasnothiscapability'] = 'El usuario \'{$a->username}\' no tiene capacidad de \'{$a->capability}\'. Elimine este usuario de la lista o cambie la elección en \'{$a->whocanaccess}\'.';
$string['userinvalidinput'] = 'Entrada no válida, es necesario un listado de nombres de usuario separados por coma';
$string['usernotfound'] = 'El usuario con el nombre \'{$a}\' no existe';
$string['userswhocanconfig'] = 'Solo administradores (moodle/site:config)';
$string['userswhocanviewsitereports'] = 'Usuarios que pueden ver los informes del sistema (moodle/site:viewreports)';
$string['verifyqueryandupdate'] = 'Verificar el texto de la consulta de SQL y actualizar el formulario';
$string['weeklyheader'] = 'Semanal';
$string['weeklyheader_help'] = 'Estas consultas se ejecutan automáticamente el primer día de la semana para informar sobre la semana anterior. Estos enlaces le permiten ver los resultados acumulados hasta el momento.';
$string['whocanaccess'] = 'Quién puede acceder a esta consulta';
