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
 * Strings for component 'tool_mergeusers', language 'es', branch 'MOODLE_35_STABLE'
 *
 * @package   tool_mergeusers
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['choose_users'] = 'Escoge los usuarios a fusionar';
$string['clear_selection'] = 'Deselecciona los usuarios a fusionar';
$string['cligathering:description'] = 'Introduce pares de identificadores de usuario para fusionar el primero\\n sobre el segundo.
El primero (fromid) perderá todos sus datos y se pasaran\\n al segundo (toid) que incorporará los datos de ambos.';
$string['cligathering:fromid'] = 'Id de usuario origen (fromid):';
$string['cligathering:stopping'] = 'Para finalizar, Ctrl+C o introduce un -1 en el fromid o en el toid.';
$string['cligathering:toid'] = 'Id de usuario destino  (toid):';
$string['dbko_no_transactions'] = '<strong>¡Error en la fusión!</strong> <br/>Su motor de base de datos no soporta transacciones. Por tanto, su base de datos <strong>ha sido modificada</strong>
Su base de datos ha podido quedar en un estado inconsistente. <br/>Revisa el registro de la fusión e informa de los errores a los desarrolladores del plugin y en breve se solucionará. <br/>
Una vez actualice el plugin a la última versión que introducirá la solución correspondiente, repita la fusión de dichos usuarios y así se completará satisfactoriamente.';
$string['dbko_transactions'] = '<strong>¡Error en la fusión!</strong> <br/>Su motor de base de datos soporta transacciones. Por tanto, se ha deshecho la transacción por completo y <strong>no se ha realizado ningún cambio en su base de datos</strong>.';
$string['dbok'] = 'Fusión realizada correctamente';
$string['deleted'] = 'Usuario con ID {$a} eliminado';
$string['errordatabase'] = 'Error: tipo de base de datos {$a} no soportada.';
$string['error_return'] = 'Vuelve al formulario de búsqueda';
$string['errorsameuser'] = 'Tratando de combinar el mismo usuario';
$string['errortransactionsonly'] = 'Error: se requieren transacciones, y su base de datos {$a} no las soporta. Si lo necesita, puede configurar que las fusiones se hagan sin transacciones. Por favor, revise la configuración para que se ajuste a sus necesidades.';
$string['excluded_exceptions'] = 'Excluir excepciones';
$string['excluded_exceptions_desc'] = 'Experiencia en este ámbito nos sugiere que estas tablas de base de datos se tienen que excluir del proceso de fusión. Ver el README para más detalles.<br>
Por tanto, si quieres aplicar el comportamiento por defecto, debes escoger la opción \'{$a}\' para excluirlas del proceso de fusión (recomendado).<br>
Si lo prefieres, puedes seleccionar las tablas de desees para incluirlas en el proceso de fusión (no recomendado).';
$string['form_description'] = '<p>A continuación puedes buscar usuarios si no conoces su nombre de usuario o número de identificación. También puedes abrir el formulario para introducir la información directamente. Consulta la ayuda en los campos para más información</p>';
$string['form_header'] = 'Busca los usuarios a fusionar';
$string['header'] = 'Fusión de dos cuentas de usuario en una';
$string['header_help'] = '<p>Dado un usuario para ser eliminado y un usuario a mantener, esta herramienta fusiona los datos relativos del usario que va a ser eliminado sobre el usuario a mantener.
Es importante saber que ambos usuarios deben existir previamente, y que no se eliminará ninguna cuenta de Moodle. El administrador del sistema deberá eliminarla manualmente si es necesario.</p>
<p><strong>¡Recuerda que esta acción es irreversible!</strong></p>';
$string['into'] = 'en';
$string['invalid_option'] = 'Opción inválida';
$string['invaliduser'] = 'Usuario inválido';
$string['logid'] = 'Para futuras referencias, estos datos aparecen en el registro con id {$a}.';
$string['logko'] = 'Se han producido los siguientes errores:';
$string['loglist'] = 'Este es el listado de fusiones, indicando si se llevaron a cabo satisfactoriamente:';
$string['logok'] = 'Estas son las operaciones realizadas en la base de datos:';
$string['mergeusers'] = 'Fusiona cuentas de usuario';
$string['mergeusersadvanced'] = '<strong>Introducir usuarios directamente</strong>';
$string['mergeusersadvanced_help'] = 'Puedes rellenar los campos a continuación si sabes exactamente qué usuarios va a fusionar.<br /><br />
Haz clic sobre el botón de búsqueda para verificar/confirmar los usuarios a fusionar.';
$string['mergeusers_confirm'] = 'La fusión se iniciará después de confirmar la fusión de los usuarios. <br /><strong>¡Esta acción es irreversible!</strong><br />
¿Estás seguro de querer continuar?';
$string['mergeusers:view'] = 'Fusión de cuentas de usuario';
$string['merging'] = 'Fusionado';
$string['newuser'] = 'Usuario a mantener';
$string['newuserid'] = 'ID de usuario a mantener';
$string['newuseridonlog'] = 'Usuario mantenido';
$string['nologs'] = 'No hay registros de fusión de usuarios. ¡Bien por ti!';
$string['no_saveselection'] = 'No has seleccionado ningún usuario.';
$string['olduser'] = 'Usuario a eliminar';
$string['olduserid'] = 'ID de usuario a eliminar';
$string['olduseridonlog'] = 'Usuario eliminado';
$string['pluginname'] = 'Fusión de cuentas de usuario';
$string['qa_action_delete_fromid'] = 'Mantiene los intentos del usuario nuevo';
$string['qa_action_delete_toid'] = 'Mantiene los intentos del usuario antiguo';
$string['qa_action_remain'] = 'No hacer nada: ni se fusionan ni eliminan';
$string['qa_action_remain_log'] = 'Se mantienen intactos los datos de los usuarios en la tabla <strong>{$a}</strong.';
$string['qa_action_renumber'] = 'Une todos los intentos y enuméralos de nuevo';
$string['qa_chosen_action'] = 'Opción activa para intentos de cuestionario: {$a}.';
$string['qa_grades'] = 'Calificaciones calculadas de nuevo para los cuestionarios: {$a}.';
$string['quizattemptsaction'] = 'Cómo resolver los intentos de un cuestionario';
$string['quizattemptsaction_desc'] = 'En la fusión de intentos de un cuestionario pueden suceder una de estas tres situaciones:
    <ol>
    <li>El usuario antiguo fue el único que intentó el cuestionario. Se mueven todos los intentos al usuario nuevo como si éste los hubiera realizado.</li>
    <li>El usuario nuevo es el único que intentó el cuestionario. No se hace nada, ya que todo está correcto.</li>
    <li>Ambos usuarios realizaron intentos para el mismo cuestionario. <strong>En este caso es cuando se aplica la acción que estás escogiendo en esta configuración</strong>. Las acciones pueden ser las siguientes:
        <ul>
        <li><strong>{$a->renumber}</strong>. Se añaden los intentos del usuario antiguo al usuario nuevo y se enumeran de nuevo todos según el tiempo de inicio de cada intento.</li>
        <li><strong>{$a->delete_fromid}</strong>. Se dejan sólo los intentos realizados por el usuario nuevo y se eliminan los del usuario antiguo. Por tanto, se hacen prevalecer los últimos intentos.</li>
        <li><strong>{$a->delete_toid}</strong>. Se dejan sólo los intentos del usuario antiguo y se eliminan los del usuario nuevo. Aquí se hacen prevalecer los primeros.</li>
        <li><strong>{$a->remain}</strong> (por defecto). Los intentos se mantienen relacionados al usuario que los generó, sin fusionarlos ni eliminarlos. Es la opción más segura si no se conocen los efectos, pero puede generar diferentes notas para el cuestionario según se fusione el usuario A en B o  B en A.</li>
        </ul>
    </li>
    </ol>';
$string['results'] = 'Resultados de la fusión y registro';
$string['review_users'] = 'Confirma los usuarios a fusionar';
$string['saveselection_submit'] = 'Guarda selección';
$string['searchuser'] = 'Buscar usuario';
$string['searchuser_help'] = 'Introduce un nombre de usuario, nombre, apellido(s), email o id para listar usuarios potenciales. Para una búsqueda más ajustada, también puedes seleccionar el campo por el que deseas buscar.';
$string['suspenduser_setting'] = 'Suspender usuario antiguo';
$string['suspenduser_setting_desc'] = 'Si se activa, el usuario antiguo se suspenderá automáticamente si la fusión termina satisfactoriamente, lo que evitará que se autentique en Moodle (recomendado).
Si se desactiva, el usuario antiguo permanecerá activo.
En ambos casos, el usuario antiguo no dispondrá de sus datos de Moodle.';
$string['tableko'] = 'Tabla {$a} : ¡no se ha podido actualizar correctamente!';
$string['tableok'] = 'Tabla {$a} : correctamente actualizada';
$string['tableskipped'] = 'Para guardar registros y por seguridad, no procesamos la tabla <strong>{$a}</strong>.
 <br />Para eliminar dichos registros, elimina la cuenta de usuario antigua una vez esta acción haya finalizado correctamente.';
$string['transactions_not_supported'] = 'Para su información, su base de datos <strong>no soporta transacciones</strong>.';
$string['transactions_setting'] = 'Sólo transacciones';
$string['transactions_setting_desc'] = 'Si se activa, la fusión de usuarios no se realizará si la base de datos NO soporta transacciones (recomendado).
Con esta opción activa, te aseguras que la base de datos permanecerá siempre consistente, incluso si la fusión termina con errores.<br /> Si se desactiva, siempre realizarás la fusión de usuarios.
En caso de errores, el registro de la fusión te mostrará cuál fue el problema.
Si informas de este error a los desarrolladores de este plugin, tendrás la solución en breve.<br />
Ten en cuenta que este plugin gestiona correctamente todas las tablas de la base de datos de Moodle, y también de algún plugin de terceros. Por tanto, si sólo tienes una instalación Moodle estándar, puedes ejecutar este plugin tranquilamente tanto con esta opción activada como desactivada.';
$string['transactions_supported'] = 'Para su información, su base de datos <strong>soporta transacciones</strong>.';
$string['usermergingheader'] = '&laquo;{$a->username}&raquo; (user ID = {$a->id})';
$string['userreviewtable_legend'] = '<b>Revisar usuarios a fusionar</b>';
$string['userselecttable_legend'] = '<b>Selecciona usarios a fusionar</b>';
$string['viewlog'] = 'Ver registro de fusiones';
$string['wronglogid'] = 'No existe el registro que estás solicitando.';
