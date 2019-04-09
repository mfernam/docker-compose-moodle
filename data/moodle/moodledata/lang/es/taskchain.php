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
 * Strings for component 'taskchain', language 'es', branch 'MOODLE_35_STABLE'
 *
 * @package   taskchain
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftertaskid_help'] = 'Después de la tarea';
$string['allowfreeaccess'] = 'Permitir el acceso libre';
$string['allowfreeaccess_help'] = 'Este ajuste especifica si se da acceso libre o no a las tareas de la Tarea en Cadena a los estudiantes.

Una vez que los estudiantes tienen acceso libre, pueden acceder a cualquier tarea en la Tarea en Cadena, sin importar las condiciones previas ni posteriores de las tareas.

**No**
: No se dará acceso libre a las tareas de la Tarea en Cadena a los estudiantes. En otras palabras, el acceso a las tareas estará controlado en todo momento por las condiciones previas y posteriores de las tareas.

**Sí: Calificaciones**
: Se dará acceso libre a las tareas de la Tarea en Cadena a los estudiantes una vez que consiguen la calificación necesaria.

**Sí: Intentos**
: Se dará acceso libre a las tareas de la Tarea en Cadena a los estudiantes una vez que completen el número de intentos necesarios.';
$string['allowpaste'] = 'Permitir pegar';
$string['allowpaste_help'] = 'Si este ajuste está habilitado se permitirá a los alumnos copiar, pegar y arrastrar texto en los cuadros de entrada de texto.';
$string['allowresume'] = 'Permitir reanudar';
$string['allowresume_help'] = 'Este ajuste indica si los estudiantes pueden o no reanudar un intento.

**No**
: Los intentos no pueden reanudarse.

**Sí**
: Se ofrecerá a los estudiantes la posibilidad de reanudar cualquier intento previo que estuviera en progreso o empezar un nuevo intento.

**Forzar**
: Si hay algún intento previo que estuviera aún en progreso, se obligará a los estudiantes a que reanuden ese intento. En caso contrario podrán empezar un nuevo intento.';
$string['allowreview'] = 'Permitir revisión';
$string['allowreview_help'] = 'Si está habilitado los estudiantes podrán revisar los intentos de las tareas después de que las tareas se hayan cerrado.';
$string['allpostconditions'] = 'Todas las condiciones posteriores.';
$string['allpreconditions'] = 'Todas las condiciones previas.';
$string['answers'] = 'Respuestas';
$string['answersshort'] = 'R';
$string['anyattempts'] = 'Cualquier intento';
$string['anygroup'] = 'Cualquier grupo';
$string['applydefaults'] = 'Aplicar los valores por defecto seleccionados';
$string['assessmenthdr'] = 'Evaluación';
$string['assessment_help'] = 'Los ajustes de evaluación para las cadenas y tareas de Tarea en Cadena definen lo siguiente:

<ul>
<li>como se combinan los intentos de tareas para formar una puntuación única de la tarea</li>
<li>la contribución de la puntuación de la tarea a la calificación en un sólo intento de la cadena</li>
<li>como se combinan las calificaciones de los intentos de cadenas para obtener una puntuación única de la cadena</li>
</ul>

**Puntuaciones de los intentos de tarea**
Las puntuaciones de los intentos de tarea son normalizados utilizando los siguientes cálculos:

<table border="0"><tbody><tr>
<td align="center" valign="middle">
<tt>(puntuación del intento - puntuación mínima)</tt>
<tt>------------------------------</tt><br >
<tt>puntuación máxima</tt>
</td>
<td align="center" valign="middle"><big><big>   X   </big></big></td>
<td align="center" valign="middle">
<tt>límite de puntuación</tt>
<tt>-----------</tt><br >
<tt>100</tt>
</td>
</tr></tbody></table>

**Puntuación de la tarea**
Dependiendo del método de puntuación elegido para la tarea, la puntuación para la tarea será la primera, la última, la más alta o la media de las puntuaciones normalizadas de los intentos de tarea.

Las puntuaciones de la tarea son después ponderadas utilizando los siguientes cálculos:

<table border="0"><tbody><tr>
<td align="center" valign="middle">
<tt>puntuación de tarea</tt>
</td>
<td align="center" valign="middle"><big><big>   X   </big></big></td>
<td align="center" valign="middle">
<tt>puntuación ponderada</tt>
<tt>--------------</tt><br >
<tt>100</tt>
</td>
</tr></tbody></table>

**Calificación del intento de la cadena**
La calificación del intento de la cadena será el total, la más alta o la última de las puntuaciones ponderadas de la tarea, dependiendo del método elegido para las calificaciones de los intentos de cadena.

**Calificación de la cadena**
La calificación de la cadena será la primera, la última, la más alta o la media de las calificaciones de los intentos de la cadena, dependiendo del método elegido para las calificaciones de cadena.

Por último, la calificación se pondera de acuerdo a los siguientes cálculos:

<table border="0"><tbody><tr>
<td align="center" valign="middle">
<tt>calificación de la cadena</tt>
</td>
<td align="center" valign="middle"><big><big>   X   </big></big></td>
<td align="center" valign="middle">
<tt>calificación ponderada</tt>
<tt>-----------</tt><br >
<tt>100</tt>
</td>
</tr></tbody></table>';
$string['attemptcount'] = 'Cuenta de intentos';
$string['attemptcount_help'] = 'Se está habilitado, este ajuste indica el máximo o el mínimo número de intentos que deben satisfacer las condiciones de puntuación y duración.

**>=** (mayor o igual que)
El mínimo número de intentos que deben satisfacer las condiciones de puntuación y duración.

**<=** (menor o igual que)
El máximo número de intentos que deben satisfacer las condiciones de puntuación y duración.';
$string['attemptdelay'] = 'Retraso del intento';
$string['attemptdelay_help'] = 'Si está habilitado, este ajuste indica el mínimo o máximo retraso entre intentos que satisfacen las condiciones de puntuación y recuento.

**>=** (mayor o igual que)
El mínimo retraso entre intentos que satisfacen las condiciones de puntuación y recuento.

**<=** (menor o igual que)
El máximo retraso entre intentos que satisfacen las condiciones de puntuación y recuento.';
$string['attemptduration'] = 'Duración del intento';
$string['attemptduration_help'] = 'Si está habilitado, este ajuste indica la duración mínima o máxima de los intentos que satisfacen las condiciones de puntuación y recuento.

**>=** (mayor o igual que)
La duración mínima de los intentos que deben satisfacer las condiciones de puntuación y recuento.

**<=** (menor o igual que)
La duración máxima de los intentos que deben satisfacer las condiciones de puntuación y recuento.';
$string['attempted'] = 'Intentado';
$string['attemptgrade'] = 'Calificación del intento';
$string['attemptgrademethod'] = 'Método de calificación del intento';
$string['attemptgrademethod_help'] = 'Este ajuste define cómo se calcula la calificación para un único intento en esta actividad de Tarea en Cadena.

**Total**
: La calificación del intento será la suma de las calificaciones de tarea ponderadas.

**La más alta**
: La calificación del intento será la más alta de las calificaciones de tarea ponderadas.

**Última**
: La calificación del intento será la puntuación ponderada de la última tarea intentada.

**Última (completada)**
: La calificación del intento será la puntuación ponderada de la última tarea intentada cuyo estado sea "completada". Otras puntuaciones de tarea serán ignoradas.

**Última (caducada)**
: La calificación del intento será la puntuación ponderada de la última tarea intentada cuyo estado sea "completada" o "caducada". Otras puntuaciones de tarea serán ignoradas.

**Última (abandonada)**
: La calificación del intento será la puntuación ponderada de la última tarea intentada cuyo estado sea "completada" o "caducada" o "abandonada". Las tareas cuyo estado sea "en progreso" serán ignoradas.';
$string['attemptlimit'] = 'Límite de intentos';
$string['attemptlimit_help'] = 'El número máximo de intentos que un estudiante puede tener en esta actividad de Tarea en Cadena.';
$string['attemptnumber'] = 'Número de intento';
$string['attempts'] = 'Intentos';
$string['attemptsallowed'] = 'Intentos permitidos';
$string['attemptscore'] = 'Puntuación del intento';
$string['attemptshdr'] = 'Restricciones del intento';
$string['attemptsunlimited'] = 'Intentos ilimitados';
$string['attempttasknow'] = 'Intentar tarea ahora';
$string['attempttype'] = 'Tipo de intento';
$string['attempttype_help'] = 'Este ajuste indica el tipo de intentos que se tendrán en cuenta para la condición de recuento de intentos.

**Cualquier intento**
Cualquier intento se tendrá en cuenta.

**Intentos más recientes**
Sólo se considerarán los intentos más recientes.

**Intentos consecutivos**
Cualquier bloque de intentos consecutivos se tendrá en cuenta.';
$string['average'] = 'Media';
$string['averagegrade'] = 'Calificación media';
$string['averagescore'] = 'Puntuación media';
$string['bodystyles'] = 'Estilos del cuerpo';
$string['bodystylesbackground'] = 'Imagen y color de fondo';
$string['bodystylescolor'] = 'Color de texto';
$string['bodystylesfont'] = 'Tamaño y familia de la fuente';
$string['bodystylesmargin'] = 'Márgenes izquierdo y derecho';
$string['cacherecords'] = 'Registros cache de la Tarea en Cadena';
$string['cannotread'] = 'No se puede leer el fichero (o el fichero está vacío):{$a}';
$string['canrestartchain'] = 'Sus resultados hasta ahora se guardarán pero si quiere volver a hacer esta actividad más tarde tendrá que empezar desde el principio.';
$string['canrestarttask'] = 'Sus resultados hasta ahora se guardarán y podrá volver a hacer "{$a}" más tarde';
$string['canresumetask'] = 'Sus resultados hasta ahora se guardarán y podrá reanudar "{$a}" más tarde.';
$string['chain'] = 'Actividad de Tarea en Cadena';
$string['chainattempt'] = 'Intento de cadena';
$string['chainattemptnotinprogress'] = 'El intento de cadena no está en progreso';
$string['chainclosed'] = 'Disculpe, esta actividad se cerró el {$a}';
$string['chaingrade'] = 'Calificación de la cadena';
$string['chainname_help'] = 'El nombre de esta actividad de Tarea en Cadena que se mostrará en la página del curso';
$string['chainnotavailable'] = 'Lo sentimos, esta actividad no está disponible para usted hasta {$a}.';
$string['chainrequirepasswordmessage'] = 'Para intentar esta actividad necesita conocer la contraseña';
$string['checks'] = 'Selecciones';
$string['checksomeboxes'] = 'Por favor seleccione alguna opción';
$string['classreports'] = 'Informes de clase';
$string['clearcache'] = 'Limpiar cache de Tarea en Cadena';
$string['cleardetails'] = 'Limpiar detalles de Tarea en Cadena';
$string['clearedcache'] = 'Se ha limpiado la cache de Tarea en Cadena';
$string['cleareddetails'] = 'Se han limpiado los detalles de Tarea en Cadena';
$string['clickreporting'] = 'Habilitar informes de clics';
$string['clickreporting_help'] = 'Si está habilitado, se mantendrá un registro a parte que contará cada vez que un botón de "indicio", "pista", o "comprobar" sea pulsado. Esto permite al profesor ver un informe detallado que muestra el estado de la tarea a cada clic. En otro caso sólo se mantendrá un registro por cada intento en una tarea.';
$string['clues'] = 'Pistas';
$string['cnumber'] = 'Intento de cadena';
$string['columnlist'] = 'Lista de columnas {$a}';
$string['columnlistid'] = 'Mostrar columnas';
$string['columnlistid_help'] = 'Este menú permite seleccionar que conjunto de columnas se muestran en esta página';
$string['columnlistschain'] = 'Todas las listas de columnas de la cadena';
$string['columnlistschains'] = 'Listas de columnas para editar cadenas';
$string['columnliststask'] = 'Todas las listas de columnas de tareas';
$string['columnliststasks'] = 'Listas de columnas para editar tareas';
$string['completed'] = 'Completado';
$string['completedalltasks_close'] = 'Si quiere terminar y cerrar este intento haga clic en el botón de abajo. <br />Tenga en cuenta que no podrá volver a hacer tareas en este intento después de que haya sido cerrado.';
$string['completedalltasks_redo'] = 'Si quiere volver a hacer una de las tareas en esta actividad haga clic en la tarea en la lista de abajo.';
$string['completedalltasks_title'] = '¡Enhorabuena!<br />Ha completado todas las tareas de esta actividad.';
$string['completioncompleted'] = 'Requerir estado completado';
$string['completionmingrade'] = 'Requerir calificación mínima';
$string['completionpass'] = 'Requerir calificación de aprobado';
$string['completionwarning'] = 'Estos campos están deshabilitados si la calificación límite para esta actividad es "Sin calificación" o la ponderación de la calificación es "Sin ponderación"';
$string['conditions'] = 'Condiciones';
$string['conditionscore'] = 'Condición de puntuación';
$string['conditionscore_help'] = 'Si está habilitado, este ajuste especifica la puntuación máxima o mínima con la que se satisface esta condición.

**>=** (mayor o igual que)
La puntuación mínima con la que se satisface la condición

**<=** (menor o igual que)
La puntuación máxima con la que se satisface la condición';
$string['conditiontaskid'] = 'Condición de tarea';
$string['conditiontaskid_help'] = 'Este ajuste especifica la tarea a la que hace referencia esta condición previa.

**Tarea previa**
Esta condición se refiere a la tarea previa en esta cadena de acuerdo con el orden de clasificación.

**Tarea específica**
El profesor puede seleccionar una tarea específica a la que se refiera esta condición previa.
Para evitar confusiones creadas por tareas con nombres idénticos, se adjuntan los números de ordenación de las tareas a sus nombres.';
$string['configenableobfuscate'] = 'Ofuscar el código javascript para que al insertar reproductores multimedia dificulte el determinar el nombre del archivo multimedia y su contenido.';
$string['deleteprecondition'] = 'Eliminar una condición previa';
$string['deletetasks'] = 'Eliminar las tareas seleccionadas';
$string['detailsrecords'] = 'Registros detallados de la Tarea en Cadena';
$string['d_index'] = 'Índice de diferenciación';
$string['discarddetails'] = 'Descartar detalles';
$string['discarddetails_help'] = 'Si el ajuste está configurado como "Sí", los detalles XML de cada intento en esta tarea serán descartados, de lo contrario los detalles XML serán almacenados en la base de datos para su consulta.';
$string['duration'] = 'Duración';
$string['duringattempt'] = 'Durante el intento';
$string['editchains'] = 'Editar cadenas';
$string['editcolumnlistschain'] = 'Editar columnas para las cadenas en las Tareas en Cadena';
$string['editcolumnliststask'] = 'Editar columnas para las tareas en las Tareas en Cadena';
$string['edittasks'] = 'Editar tareas';
$string['enablecache'] = 'Habilitar cache de la Tarea en Cadena';
$string['enablecron'] = 'Habilitar cron de la Tarea en Cadena';
$string['enablemymoodle'] = 'Mostrar Tareas en Cadena';
$string['enableobfuscate'] = 'Habilitar ofuscación de texto y de reproductores multimedia';
$string['enableswf'] = 'Habilitar la incrustación de ficheros SWF en las actividades de Tareas en Cadena';
$string['endofchain'] = 'Fin de la cadena';
$string['entry_attempts'] = 'Intentos';
$string['entrycm'] = 'Actividad previa';
$string['entrycmcourse'] = 'Actividad previa en este curso';
$string['entrycm_help'] = 'Este ajuste determina una actividad Moodle y una puntuación mínima para esa actividad que debe alcanzarse antes de intentar esta actividad de Tarea en Cadena.

El profesor puede seleccionar una actividad específica o una de las siguientes opciones generales de ajuste:

* Actividad previa en este curso
* Actividad previa en esta sección
* Actividad previa calificada en este curso
* Actividad previa calificada en esta sección
* Tarea en Cadena previa en este curso
* Tarea en Cadena previa en esta sección';
$string['entrycmsection'] = 'Actividad previa en esta sección del curso';
$string['entrycompletionwarning'] = 'Antes de empezar esta actividad debes revisar {$a}.';
$string['entry_dates'] = 'Fechas';
$string['entrygrade'] = 'Calificación de la actividad previa';
$string['entrygradedcourse'] = 'Actividad previa calificada en este curso';
$string['entrygradedsection'] = 'Actividad previa calificada en esta sección del curso';
$string['entrygradewarning'] = 'No puede empezar esta actividad hasta que obtenga una puntuación del {$a->entrygrade}% en {$a->entryactivity}. Actualmente su puntuación para esa actividad es {$a->usergrade}%.';
$string['entry_grading'] = 'Calificar';
$string['entryoptions'] = 'Opciones de la página de entrada';
$string['entryoptions_help'] = 'Estas casillas de verificación habilitan y deshabilitan la visualización de elementos en la página de entrada de Tarea en Cadena.

**Nombre de la cadena como título**
: si está seleccionada el nombre de la cadena se mostrará como el título de la página de entrada.

**Calificación**
: si está seleccionada la información de calificaciones de la Tarea en Cadena se mostrará en la página de entrada.

**Fechas**
: si está seleccionada las fechas de apertura y cierre de la Tarea en Cadena se mostrarán en la página de entrada.

**Intentos**
: si está seleccionada se mostrará una tabla en la página de entrada con los detalles de intentos previos del usuario en esta Tarea en Cadena. Los intentos que puedan reanudarse tendrán un botón de reanudación en la columna más a la derecha.';
$string['entrypage'] = 'Mostrar página de entrada';
$string['entrypagehdr'] = 'Página de entrada';
$string['entrypage_help'] = '¿Se debería mostrar a los estudiantes una página inicial antes de empezar una actividad de Tarea en Cadena?

**Sí**
: se mostrará a los estudiantes una página de entrada antes de empezar la Tarea en Cadena. Los contenidos de la página de entrada están definidos en las opciones de página de entrada de Tarea en Cadena.

**No**
: no se mostrará a los estudiantes una página de entrada y empezarán de forma inmediata la Tarea en Cadena.

Al profesor siempre se le mostrará una página de entrada para proporcionarle acceso a los informes y poder editar la página de tareas';
$string['entrytaskchaincourse'] = 'Tarea en Cadena previa en este curso';
$string['entrytaskchainsection'] = 'Tarea en Cadena previa en esta sección del curso';
$string['entrytext'] = 'Texto de la página de entrada';
$string['entry_title'] = 'Nombre de la cadena como título';
$string['error_formhelperclassnotfound'] = 'La clase: {$a} del formulario de ayuda de Tarea en Cadena no se encontró.';
$string['error_formhelperfilenotfound'] = 'El fichero: {$a} del formulario de ayuda de Tarea en Cadena no se encontró.';
$string['error_getprivateproperty'] = 'No se puede acceder a la propiedad privada, {$a->property}, del objeto {$a->class} directamente. Utilice {$a->method} en su lugar.';
$string['error_getunknownproperty'] = 'No se puede acceder a la propiedad desconocida, {$a->property}, del objeto {$a->class}.';
$string['error_insertrecord'] = 'No se pudo introducir en registro en la tabla de la base de datos: {$a}';
$string['error_missingclass'] = 'No se puedo encontrar la clase del objeto: {$a}';
$string['error_nocolumns'] = 'Por favor seleccione alguna columna';
$string['error_nocourseid'] = 'Sin identificador de curso';
$string['error_nodatabaseinfo'] = 'Sin información disponible de la base de datos';
$string['error_noinputparameters'] = 'Sin parámetros de entrada';
$string['error_norecordsfound'] = 'No se encontraron registros';
$string['error_recordclassnotfound'] = 'No se encontró la clase del registro de la Tarea en Cadena: {$a}';
$string['error_setprivateproperty'] = 'No se puede modificar la propiedad privada, {$a->property}, del objeto {$a->class} directamente. Utilice {$a->method} en su lugar.';
$string['error_setpropertydirectly'] = 'No se puede modificar la propiedad {$a->property} del objeto {$a->class} directamente. Utilice {$method} en su lugar.';
$string['error_setunknownproperty'] = 'No se puede modificar la propiedad desconocida, {$a->property}, del objeto {$a->class}.';
$string['error_unrecognizedpageid'] = 'Identificador de página de la Tarea en Cadena no reconocido: {$a}';
$string['error_updaterecord'] = 'No se pudo actualizar el registro en la tabla de la base de datos: {$a}';
$string['event_attempt_started'] = 'Intento de Tarea en Cadena empezado';
$string['event_attempt_started_description'] = 'El usuario con identificador "{$a->userid}" empezó un intento de una tarea en la actividad de "Tarea en Cadena" con identificador de módulo de curso "{$a->cmid}"';
$string['event_attempt_started_explanation'] = 'Un usuario acaba de empezar un intento en una actividad de Tarea en Cadena';
$string['event_attempt_submitted'] = 'Intento de Tarea en Cadena enviado';
$string['event_attempt_submitted_description'] = 'El usuario con identificador "{$a->userid}" envió un intento de una tarea en la actividad de "Tarea en Cadena" con identificador de módulo de curso "{$a->cmid}"';
$string['event_attempt_submitted_explanation'] = 'Un usuario acaba de enviar un intento en una actividad de Tarea en Cadena';
$string['event_base'] = 'Evento HotPot detectado';
$string['event_base_description'] = 'El usuario con identificador "{$a->userid}" inició un evento en la actividad de "Tarea en Cadena" con identificador de módulo de curso "{$a->cmid}"';
$string['event_base_explanation'] = 'Un evento fue detectado por el módulo de Tarea en Cadena';
$string['event_chains_edited'] = 'Cadenas de Tarea en Cadena editadas';
$string['event_chains_edited_description'] = 'El usuario con identificador "{$a->userid}" editó todas las cadenas de Tarea en Cadena en el curso con identificador "{$a->courseid}"';
$string['event_chains_edited_explanation'] = 'Un usuario acaba de editar todas las cadenas de Tarea en Cadena de un curso';
$string['event_columnlists_edited'] = 'Listas de columnas de Tarea en Cadena editadas';
$string['event_columnlists_edited_description'] = 'El usuario con identificador "{$a->userid}" editó las listas de columnas en la actividad de "Tarea en Cadena" con identificador de módulo de curso "{$a->cmid}"';
$string['event_columnlists_edited_explanation'] = 'Un usuario acaba de editar las listas de columnas en una actividad de Tarea en Cadena';
$string['event_condition_edited'] = 'Condición de Tarea en Cadena editada';
$string['event_condition_edited_description'] = 'El usuario con identificador "{$a->userid}" editó una condición en la actividad de "Tarea en Cadena" con identificador de módulo de curso "{$a->cmid}"';
$string['event_condition_edited_explanation'] = 'Un usuario acaba de editar una condición en una actividad de Tarea en Cadena';
$string['event_report_viewed'] = 'Informe de Tarea en Cadena visualizado';
$string['event_report_viewed_description'] = 'El usuario con identificador "{$a->userid}" visualizó un informe en la actividad de "Tarea en Cadena" con identificador de módulo de curso "{$a->cmid}"';
$string['event_report_viewed_explanation'] = 'Un usuario acaba de visualizar un informe de intentos en una actividad de Tarea en Cadena';
$string['event_task_edited'] = 'Tarea de Tarea en Cadena editada';
$string['event_task_edited_description'] = 'El usuario con identificador "{$a->userid}" editó una tarea en la actividad de "Tarea en Cadena" con identificador de módulo de curso "{$a->cmid}"';
$string['event_task_edited_explanation'] = 'Un usuario acaba de editar una tarea en una actividad de Tarea en Cadena';
$string['event_tasks_edited'] = 'Tareas de Tarea en Cadena editada';
$string['event_tasks_edited_description'] = 'El usuario con identificador "{$a->userid}" editó todas las tareas en la actividad de "Tarea en Cadena" con identificador de módulo de curso "{$a->cmid}"';
$string['event_tasks_edited_explanation'] = 'Un usuario acaba de editar todas las tareas en una actividad de Tarea en Cadena';
$string['exit_areyouok'] = 'Hola, ¿aún estás ahí?';
$string['exit_attemptscore'] = 'Tu puntuación para ese intentó fue {$a}';
$string['exitcm'] = 'Siguiente actividad';
$string['exitcmcourse'] = 'Siguiente actividad en este curso';
$string['exitcm_help'] = 'Este ajuste especifica una actividad Moodle para hacer después de que esta actividad de Tarea en Cadena sea completada. La calificación opcional es la calificación mínima para esta Tarea en Cadena que es necesaria para que se muestre la siguiente actividad.

El profesor puede seleccionar una actividad específica o una de las siguientes opciones generales de ajuste:

* Siguiente actividad en este curso
* Siguiente actividad en esta sección
* Siguiente actividad calificada en este curso
* Siguiente actividad calificada en esta sección
* Siguiente Tarea en Cadena en este curso
* Siguiente Tarea en Cadena en esta sección

Si otras opciones para salir de la página están deshabilitadas y el alumno ha obtenido la calificación requerida en esta actividad de Tarea en Cadena, la siguiente actividad se mostrará inmediatamente. En caso contrario se mostrará al alumno un enlace a la siguiente actividad, que podrá pulsar cuando esté listo.';
$string['exitcmsection'] = 'Siguiente actividad en esta sección del curso';
$string['exit_course'] = 'Curso';
$string['exit_course_text'] = 'Volver a la página principal del curso';
$string['exit_encouragement'] = 'Estímulo';
$string['exit_excellent'] = '¡Excelente!';
$string['exit_feedback'] = 'Realimentación de la página de salida';
$string['exit_feedback_help'] = 'Estas opciones habilitan y deshabilitan la visualización de elementos de realimentación en una página de salida de Tarea en Cadena.

**Nombre de la cadena como título**
: si está seleccionada el nombre de la cadena se mostrará como el título de la página de salida.

**Estímulo**
: si está seleccionada se mostrará algún estímulo en la página de salida. El estímulo depende de la calificación en la Tarea en Cadena:
: **> 90%**: ¡Excelente!
: **> 60%**: Bien hecho
: **> 0%**: Buen intento
: **= 0%**: ¿Estás bien?

**Calificación del intento de la cadena**
: si está seleccionada la calificación del intento de la cadena que se acaba de completar será mostrada en la página de salida.

**Calificación de la cadena**
: si está seleccionada la calificación de la Tarea en Cadena se mostrará en la página de salida.

Además, si el método de evaluación de la cadena es "el más alto", se mostrará un mensaje para indicar al usuario si el intento más reciente fue igual o mejor que los intentos previos.';
$string['exit_goodtry'] = '¡Buen intento!';
$string['exitgrade'] = 'Calificación de la siguiente actividad';
$string['exitgradedcourse'] = 'Siguiente actividad calificada en este curso';
$string['exitgradedsection'] = 'Siguiente actividad calificada en esta sección del curso';
$string['exit_grades'] = 'Calificaciones';
$string['hints'] = 'Pistas';
$string['next2task'] = 'Pasar por alto la siguiente tarea';
$string['next3task'] = 'Pasar por alto 2 tareas';
$string['next4task'] = 'Pasar por alto 3 tareas';
$string['next5task'] = 'Pasar por alto 4 tareas';
$string['noreviewbeforeclose'] = 'Lo sentimos, usted no puede ver los detalles de esta tarea hasta {$a}.';
$string['outputformat_hp_6_jmatch_xml_v6'] = 'JMatch (v6) desde xml';
$string['outputformat_hp_6_jmatch_xml_v6_plus'] = 'JMatch (v6+) desde xml';
$string['outputformat_hp_6_jmatch_xml_v6_plus_duplicates'] = 'JMatch (v6+) desde xml (permitir duplicados)';
$string['outputformat_hp_6_jmix_html'] = 'JQuiz (v6) desde html';
$string['outputformat_hp_6_jmix_xml_v6'] = 'JMix (v6) desde xml';
$string['outputformat_hp_6_jmix_xml_v6_plus'] = 'JMix (v6+) desde xml';
$string['outputformat_hp_6_jmix_xml_v6_plus_deluxe'] = 'JMix (v6+ con prefijo, sufijo y otros añadidos) desde xml';
$string['outputformat_hp_6_jmix_xml_v6_plus_keypress'] = 'JMix (v6+ con pulsación de tecla) desde xml';
$string['outputformat_hp_6_jquiz_xml_v6'] = 'JQuiz (v6) desde xml';
$string['outputformat_hp_6_jquiz_xml_v6_autoadvance'] = 'JQuiz (v6) desde xml (Avance automático)';
$string['outputformat_hp_6_jquiz_xml_v6_exam'] = 'JQuiz (v6) desde xml (Examen)';
$string['outputformat_hp_6_jquiz_xml_v6_intro'] = 'JQuiz (v6) desde xml (Introducción)';
$string['outputformat_hp_6_rhubarb_html'] = 'Rhubarb (v6) desde html';
$string['outputformat_hp_6_rhubarb_xml'] = 'Rhubarb (v6) desde xml';
$string['outputformat_hp_6_sequitur_html'] = 'Sequitur (v6) desde html';
$string['outputformat_hp_6_sequitur_html_incremental'] = 'Sequitur (v6) desde html, sistema de puntuación incremental';
$string['outputformat_hp_6_sequitur_xml'] = 'Sequitur (v6) desde xml';
$string['outputformat_hp_6_sequitur_xml_incremental'] = 'Sequitur (v6) desde xml, sistema de puntuación incremental';
$string['outputformat_html_ispring'] = 'Fichero HTML iSpring';
$string['outputformat_html_xerte'] = 'Fichero HTML Xerte';
$string['outputformat_html_xhtml'] = 'Fichero HTML estándar';
$string['outputformat_qedoc'] = 'Fichero Qedoc';
$string['passworderror'] = 'La contraseña introducida era incorrecta';
$string['penalties'] = 'Penalizaciones';
$string['pending'] = 'Pendiente de completar';
$string['percent'] = 'Por ciento';
$string['pluginadministration'] = 'Administración de Tarea en Cadena';
$string['pluginname'] = 'Módulo de Tarea en Cadena';
$string['postcondition'] = 'Postcondición';
$string['postconditions'] = 'Postcondiciones';
$string['postconditions_help'] = 'Tras finalizar la tarea, se ejecutará la acción asociada a la primera postcondición que se cumpla en esta lista.';
$string['precondition'] = 'Precondición';
$string['preconditions'] = 'Precondiciones';
$string['preconditions_help'] = 'Esta tarea sólo se podrá realizar si todas las precondiciones en esta lista se cumplen.';
$string['pressoktocontinue'] = 'Pulse OK para continuar, o Cancelar para permanecer en esta página.';
$string['preview'] = 'Vista preliminar';
$string['previewchainnow'] = 'Vista preliminar de la actividad de Tarea en Cadena ahora';
$string['previewtasknow'] = 'Vista preliminar de la tarea ahora';
$string['previoustask'] = 'Tarea previa';
$string['questionshort'] = 'Q-{$a}';
$string['randomtask'] = 'Tarea aleatoria';
$string['reattempttask'] = 'Reintentar tarea';
$string['recentattempts'] = 'Intentos más recientes';
$string['redo'] = 'Rehacer';
$string['reordertasks'] = 'Reordenar tareas';
$string['requirepassword'] = 'Se necesita contraseña';
$string['requirepassword_help'] = 'Si se indica una contraseña, el alumno deberá introducirla para poder realizar el cuestionario.';
$string['requiresubnet'] = 'Se necesita dirección de red';
$string['requiresubnet_help'] = 'El acceso al cuestionario puede estar restringido a determinadas subredes de la LAN o de Internet indicando una lista de direcciones IP completas o parciales separadas por comas. Esto puede ser útil para cuestionarios que no sean supervisados, para asegurarnos de que sólo la gente en determinados equipos pueda acceder al cuestionario.';
$string['responses'] = 'Respuestas';
$string['responsesshort'] = 'R';
$string['resume'] = 'Continuar';
$string['reviewafterattempt'] = 'Permitir revisión tras intento';
$string['reviewafterclose'] = 'Permitir revisión después de que se cierre el HotPot';
$string['reviewduringattempt'] = 'Permitir revisión durante el intento';
$string['reviewoptions'] = 'Revisar opciones';
$string['sametask'] = 'Misma tarea';
$string['score'] = 'Puntuación';
$string['scoreignore'] = 'Ignorar vacíos';
$string['stopbutton_help'] = 'Si esta configuración está activada, se incluirá un botón de stop en la tarea.

Si un estudiante pulsa el botón stop, los resultados hasta el momento serán devueltos a Moodle y el estado del intento de la tarea será marcado como abandonado.

El texto que se mostrará en el botón stop será una de las frases preestablecidas desde los packs de idioma de Moodle, formateado como componente_cadena (ej. portfolio_volveradondeestabas), o el que profesor indique.';
$string['stopbuttonlangpack'] = 'Desde el pack de idioma';
$string['tasknotavailable'] = 'Lo sentimos, esta tarea no está disponible para usted hasta {$a}.';
$string['timeclose'] = 'Disponible hasta';
$string['timeopen'] = 'Disponible desde';
$string['windowmoodleheader'] = 'Mostrar el encabezado de página de Moodle';
$string['windowmoodlenavbar'] = 'Mostrar la barra de navegación de Moodle';
$string['windownew'] = 'Nueva ventana';
$string['windowresizable'] = 'Permitir redimensionar la ventana';
$string['windowsame'] = 'Misma ventana';
$string['windowscrollbars'] = 'Permitir desplazarse por la ventana';
$string['windowstatus'] = 'Mostrar la barra de estado';
$string['windowtoolbar'] = 'Mostrar la barra de herramientas';
$string['windowwidth'] = 'Ancho de ventana predefinido (en pixels)';
$string['wrong'] = 'Mal';
$string['youneedtoenrol'] = 'Tiene que matricularse en este curso antes de intentar esta actividad de Tarea en Cadena';
$string['zeroduration'] = 'Sin duración';
$string['zerograde'] = 'Nota cero';
$string['zeroscore'] = 'Puntuación cero';
