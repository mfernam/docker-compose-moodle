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
 * Strings for component 'ejsapp', language 'es', branch 'MOODLE_35_STABLE'
 *
 * @package   ejsapp
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['appletfile'] = 'Easy Java Simulation';
$string['appletfile_help'] = 'Seleccione el archivo .jar o .zip que contiene la aplicación EJS encapsulada (Easy Java Simulation). La página oficial de EJS es http://fem.um.es/Ejs/';
$string['appletfile_required'] = 'Se debe seleccionar un archivo .jar';
$string['appwording'] = 'Enunciado';
$string['blockly_config'] = 'Configurar uso de Blockly';
$string['blocklyfile'] = 'Bloques iniciales';
$string['blocklyfile_help'] = 'Puede seleccionar un fichero .blk que especifique los bloques que deben mostrarse inicialmente en Blockly.';
$string['booked_lab'] = 'Este laboratorio ha sido reservado para esta hora en un curso distinto. Pruebe de nuevo más adelante.';
$string['certificate_alias'] = 'Alias del certificado de confianza';
$string['certificate_alias_description'] = 'El alias asignado al certificado de confianza';
$string['certificate_password'] = 'Contraseña del certificado de confianza';
$string['certificate_password_description'] = 'La contraseña requerida para usar el certificado de confianza';
$string['certificate_path'] = 'Ruta al fichero del certificado de confianza';
$string['certificate_path_description'] = 'La ruta en el servidor Moodle al fichero del certificado de confianza que se usará para firmar los applets de Java';
$string['check_activity'] = 'Comprobar actividad';
$string['check_activity_description'] = 'Con que frecuencia se comprueba la actividad de los usuarios en EJSApp (s)';
$string['check_bookings'] = 'Consulte sus reservas activas con el sistema de reservas.';
$string['collab_access'] = 'Esta es una sesión colaborativa.';
$string['controller_fail_msg'] = 'Error al intentar cargar el controlador';
$string['controller_load_msg'] = 'Se va a cargar un controlador para el laboratorio';
$string['css_rules'] = 'Crea tus propias reglas css para cambiar el aspecto visual de la aplicación javascript';
$string['css_rules_help'] = '¡Importante! Escriba cada selector y el comienzo de su declaración (la llave { de apertura) en la misma línea.';
$string['css_style'] = 'Hoja de estilos CSS para una aplicación Javascript';
$string['default_certificate_set'] = 'Opciones del certificado de confianza. (Importante sólo si se desea firmar de manera automática los applets subidos con EJSApp)';
$string['default_general_set'] = 'Ajustes generales';
$string['deletedgrades'] = 'Borrar todas las calificaciones de actividades ejsapp';
$string['deletedlegacylogs'] = 'Borrar todas las entradas del registro antiguo';
$string['deletedlogs'] = 'Borrar todas las entradas del registro';
$string['deletedpersonalvars'] = 'Borrar todas las variables personalizadas de usuario';
$string['deletedrecords'] = 'Borrar todas las acciones grabadas de usuario en actividades ejsapp';
$string['display_functions'] = 'Mostrar bloques de funciones';
$string['display_lab'] = 'Mostrar bloques del laboratorio EjsS';
$string['display_lab_charts'] = 'Mostrar gráficas del laboratorio EjsS';
$string['display_lab_control'] = 'Mostrar controles del laboratorio EjsS';
$string['display_lab_execution'] = 'Mostrar funciones de ejecución del laboratorio EjsS';
$string['display_lab_functions'] = 'Mostrar funciones del laboratorio EjsS';
$string['display_lab_help'] = 'Esta opción permite mostrar bloques relacionados con variables y métodos del laboratorio virtual o remoto.';
$string['display_lab_variables'] = 'Mostrar variables del laboratorio EjsS';
$string['display_lists'] = 'Mostrar bloques de listas';
$string['display_logic'] = 'Mostrar bloques de lógica';
$string['display_loops'] = 'Mostrar bloques de bucles';
$string['display_math'] = 'Mostrar bloques de matemáticas';
$string['display_text'] = 'Mostrar bloques de texto';
$string['display_variables'] = 'Mostrar bloques de variables';
$string['ejsapp'] = 'EJSApp';
$string['ejsapp:accessremotelabs'] = 'Acceso a todos los laboratorios remotos';
$string['ejsapp_activity_selection'] = 'Selección de la actividad EJSApp';
$string['ejsapp:addinstance'] = 'Añadir una nueva actividad EJSApp';
$string['ejsapp_error'] = 'La actividad EJSApp a la que est&aacute; tratando de acceder no existe.';
$string['ejsappname'] = 'Nombre del laboratorio';
$string['ejsappname_help'] = 'Nombre con que figurar&aacute; el laboratorio en el curso';
$string['ejsapp:requestinformation'] = 'Pedir información para plugins de terceros';
$string['ejsapp:view'] = 'Ver una actividad EJSApp';
$string['EJS_codebase'] = 'ATENCIÓN: El fichero manifest del applet que ha subido no especifica este servidor Moodle en el parámetro \'codebase\', de modo que no ha sido firmado.';
$string['EJS_version'] = 'ATENCIÓN: El applet no fue generado con EJS 4.37 (build 121201), o superior. Compílalo de nuevo con una versión más moderna de EJS.';
$string['end_message'] = 'Fin de la reproducción';
$string['event_book'] = 'Tiene que hacer una reserva';
$string['event_booked'] = 'El laboratorio se ha reservado en un curso diferente';
$string['event_collab'] = 'Trabajando con la actividad EJSApp en modo colaborativo';
$string['file_error'] = 'No pudo abrirse el fichero en el servidor';
$string['is_rem_lab'] = 'Sistema experimental remoto?';
$string['is_rem_lab_help'] = 'Si este EJSApp conecta a recursos reales de manera remota Y quieres que el Sistema de Reservas EJSApp controle su acceso, selecciona "s&iacute;". En caso contrario, selecciona "no".';
$string['jar_file'] = 'Archivo .jar que encapsula el laboratorio EJS';
$string['manifest_error'] = '> No se ha podido encontrar o abrir el manifiesto .mf. Revise el fichero que ha cargado.';
$string['modulename'] = 'EJSApp';
$string['modulename_help'] = 'El m&oacute;dulo de actividad EJSApp permite a un profesor a&ntilde;adir applets de Java creados con Easy Java Simulations (EJS) en sus cursos de Moodle.

Los applets de EJS quedar&aacute;n embebidos dentro de los cursos de Moodle. El profesor puede seleccionar si mantener el tama&ntilde;o original del applet o permitir que Moodle lo reescale de acuerdo al espacio disponible. Si el applet fue compilado con la opci&oacute;n "A&ntilde;adir soporte idiomas" en EJS, el applet embebido en Moodle con la actividad EJSApp configurar&aacute; autom&aacute;ticamente su idioma a aquel seleccionado por el usuario de Moodle, si esto es posible. Esta actividad es compatible con la configuraci&oacute;n de restricciones de acceso condicional.

Cuando se usa junto al Navegador EJSApp de Ficheros, los estudiantes pueden guardar el estado del applet EJS, cuando lo est&eacute;n ejecutando, simplemente pulsando con el bot&oacute;n derecho del rat&oacute;n sobre el applet y seleccionando la opci&oacute;n adecuada en el men&uacute; que aparece. La informaci&oacute;n de estos estados se graba en un fichero .xml que es guardado en el area de ficheros privados (Navegador EJSApp de Ficheros). Estos estados pueden recuperarse de dos maneras distintas: pulsando sobre los ficheros .xml en el Navegador EJSApp de Ficheros o pulsando con el bot&oacute;n derecho del rat&oacute;n sobre el applet EJS y seleccionando la opci&oacute;n adecuada en el men&uacute;. Si el applet EJS est&aacute; preparado para tal efecto, tambi&eacute;n puede grabar ficheros de texto o im&aacute;genes y guardarlos en el &aacute;rea de ficheros privados.

Cuando se usa junto al bloque EJSApp de Sesiones Colaborativas, los usuarios de Moodle pueden trabajar con el mismo applet EJS de una manera s&iacute;ncrona, es decir, de tal forma que el applet mostrar&aacute; el mismo estado para todos los usuarios en la sesi&oacute;n colaborativa. Gracias a este bloque, los usuarios pueden crear sesiones, invitar a otros usuarios y trabajar juntos con la misma actividad EJSApp.';
$string['modulenameplural'] = 'EJSApps';
$string['more_text'] = 'Texto optional tras el applet';
$string['no_booking'] = 'No tiene reserva para este laboratorio en este horario.';
$string['pluginadministration'] = 'Administraci&oacute;n del EJSApp';
$string['pluginname'] = 'EJSApp';
$string['practiceintro'] = 'Identificador de pr&aacute;ctica en Sarlab';
$string['practiceintro_help'] = 'Pr&aacute;cticas (separadas por punto y coma) configuradas en Sarlab para este sistema experimental.';
$string['practiceintro_required'] = 'ATENCI&Oacute;N: Debe especificar al menos una pr&aacute;ctica.';
$string['record_interactions_help'] = 'Cuando esta opción está marcada como \'sí\', Moodle guardará las interacciones del usuario con los elementos del EjsS lab: botones pulsados, cambios de parámetros y así en adelante. Habilítelo si desea aplicar analítica del aprendizaje.';
$string['rem_lab_conf'] = 'Configuraci&oacute;n del laboratorio remoto';
$string['state_fail_msg'] = 'Error al intentar cargar el estado';
$string['statefile'] = 'Estado del Easy Java Simulation';
$string['state_file'] = 'Archivo .xml con el estado que este laboratorio EJS debe leer';
$string['statefile_help'] = '';
$string['state_load_msg'] = 'Se va a actualizar el estado del laboratorio';
