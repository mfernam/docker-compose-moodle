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
 * Strings for component 'tool_policy', language 'es', branch 'MOODLE_35_STABLE'
 *
 * @package   tool_policy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptanceacknowledgement'] = 'Confirmo que he recibido una petición para dar consentimiento en nombre de un usuario o usuarios.';
$string['acceptancecount'] = '{$a->agreedcount} de {$a->policiescount}';
$string['acceptancenote'] = 'Comentarios';
$string['acceptancepolicies'] = 'Políticas';
$string['acceptancessavedsucessfully'] = 'Los acuerdos han sido guardados correctamente.';
$string['acceptancestatusoverall'] = 'Resumen';
$string['acceptanceusers'] = 'Usuarios';
$string['actions'] = 'Acciones';
$string['activate'] = 'Cambiar estado a "Activo"';
$string['activateconfirm'] = '<p>Estás a punto de activar la política <em>\'{$a->name}\'</em> y hacer que la versión <em>\'{$a->revision}\'</em> sea la actual.</p><p>Todos los usuarios deberán aceptar la nueva versión de la política para poder acceder.</p>';
$string['activateconfirmyes'] = 'Activar';
$string['activating'] = 'Activando una política';
$string['agreed'] = 'Aceptado';
$string['agreedby'] = 'Aceptado por';
$string['agreedno'] = 'No se ha dado consentimiento';
$string['agreednowithlink'] = 'No se ha dado consentimiento; haga clic para dar consentimiento en nombre del usuario para {$a}';
$string['agreednowithlinkall'] = 'No se ha dado consentimiento; haga clic para dar consentimiento en nombre del usuario para todas las políticas';
$string['agreedon'] = 'Aceptado en';
$string['agreedyes'] = 'Aceptado';
$string['agreedyesonbehalf'] = 'Consentimiento dado en nombre del usuario';
$string['agreedyesonbehalfwithlink'] = 'Consentimiento dado en nombre del usuario; haga clic para retirar el consentimiento del usuario para {$a}';
$string['agreedyesonbehalfwithlinkall'] = 'Consentimiento dado en nombre del usuario; haga clic para retirar el consentimiento del usuario para todas las políticas';
$string['agreedyeswithlink'] = 'Consentimiento dado; haga clic para retirar el consentimiento del usuario para {$a}';
$string['agreedyeswithlinkall'] = 'Consentimiento dado; haga clic para retirar el consentimiento del usuario para todas las políticas';
$string['agreepolicies'] = 'Por favor, acepte las siguientes políticas';
$string['backtotop'] = 'Volver arriba';
$string['consentbulk'] = 'Aceptar';
$string['consentdetails'] = 'Aceptar en nombre del usuario';
$string['consentpagetitle'] = 'Aceptar';
$string['contactdpo'] = 'Para cualquier pregunta sobre las políticas, por favor contacte con el Delegado de Protección de Datos';
$string['dataproc'] = 'Procesado de datos personales';
$string['deleteconfirm'] = '<p>¿Está seguro que desea eliminar la política <em>\'{$a->name}\'</em>?</p><p>Esta operación no se puede deshacer.</p>';
$string['deleting'] = 'Eliminando una versión';
$string['editingpolicydocument'] = 'Modificando política';
$string['errorpolicyversionnotfound'] = 'No hay una política con este identificador.';
$string['errorsaveasdraft'] = 'Una revisión menor no puede ser guardada como borrador.';
$string['errorusercantviewpolicyversion'] = 'El usuario no tiene acceso a esta versión de la política.';
$string['event_acceptance_created'] = 'Creado el acuerdo de política de usuario';
$string['event_acceptance_updated'] = 'Actualizado el acuerdo de política de usuario';
$string['filtercapabilityno'] = 'Permiso: No puede consentir';
$string['filtercapabilityyes'] = 'Permiso: Puede consentir';
$string['filterplaceholder'] = 'Seleccione palabra clave o filtro';
$string['filterpolicy'] = 'Política: {$a}';
$string['filterrevision'] = 'Versión: {$a}';
$string['filterrevisionstatus'] = 'Versión: {$a->name} ({$a->status})';
$string['filterrole'] = 'Rol: {$a}';
$string['filters'] = 'Filtros';
$string['filterstatusno'] = 'Estado: No aceptado';
$string['filterstatusyes'] = 'Estado: Aceptado';
$string['guestconsent:continue'] = 'Continuar';
$string['guestconsentmessage'] = 'Para continuar usando este sitio web, debe aceptar nuestras políticas:';
$string['iagree'] = 'Doy mi consentimiento a {$a}';
$string['iagreetothepolicy'] = 'Dar consentimiento en nombre del usuario';
$string['inactivate'] = 'Cambiar estado a "Inactivo"';
$string['inactivating'] = 'Desactivando política';
$string['inactivatingconfirm'] = '<p>Estás a punto de desactivar la política <em>\'{$a->name}\'</em>, versión <em>\'{$a->revision}\'</em>.</p>';
$string['inactivatingconfirmyes'] = 'Desactivar';
$string['invalidversionid'] = 'No hay política con este identificador';
$string['irevokethepolicy'] = 'Retirar consentimiento de usuario';
$string['managepolicies'] = 'Gestionar políticas';
$string['minorchange'] = 'Revisión menor';
$string['minorchangeinfo'] = 'Una revisión menor no altera el significado de la política. No se fuerza a los usuarios a la aceptar la política de nuevo si está marcado como un cambio menor.';
$string['movedown'] = 'Bajar';
$string['moveup'] = 'Subir';
$string['mustagreetocontinue'] = 'Antes de continuar debe aceptar todas estas políticas.';
$string['newpolicy'] = 'Nueva política';
$string['newversion'] = 'Nueva versión';
$string['nofiltersapplied'] = 'No hay filtros aplicados';
$string['nopermissiontoagreedocs'] = 'No tiene permiso para aceptar las políticas';
$string['nopermissiontoagreedocsbehalf'] = 'No tiene permiso para aceptar las políticas en nombre de este usuario';
$string['nopermissiontoagreedocsbehalf_desc'] = 'Lo siento, no tiene el permiso necesario para aceptar las siguientes políticas en nombre de {$a}:';
$string['nopermissiontoagreedocscontact'] = 'Si necesita más información, por favor contacte con';
$string['nopermissiontoagreedocs_desc'] = 'Lo siento, no tiene los permisos necesario para aceptar las políticas. <br /> No podrá utilizar este sitio hasta que acepte las siguientes políticas:';
$string['nopermissiontoviewpolicyversion'] = 'No tiene el permiso necesario para ver esta versión de la política.';
$string['nopolicies'] = 'No hay políticas con una versión activa aplicables a usuarios registrados.';
$string['pluginname'] = 'Políticas';
$string['policiesagreements'] = 'Políticas y acuerdos';
$string['policy:accept'] = 'Acepte las políticas';
$string['policy:acceptbehalf'] = 'Dar consentimiento a las políticas en nombre de alguien';
$string['policydocaudience'] = 'Consentimiento del usuario';
$string['policydocaudience0'] = 'Todos los usuarios';
$string['policydocaudience1'] = 'Usuarios autenticados';
$string['policydocaudience2'] = 'Invitados';
$string['policydoccontent'] = 'Política completa';
$string['policydochdrpolicy'] = 'Política';
$string['policydochdrversion'] = 'Versión del documento';
$string['policydocname'] = 'Nombre';
$string['policydocrevision'] = 'Versión';
$string['policydocsummary'] = 'Resumen';
$string['policydocsummary_help'] = 'Este texto debería contener un resumen de la política, en una forma simple y accesible y usando un lenguaje sencillo y claro.';
$string['policydoctype'] = 'Tipo';
$string['policydoctype0'] = 'Política de sitio';
$string['policydoctype1'] = 'Política de privacidad';
$string['policydoctype2'] = 'Política de terceras partes';
$string['policydoctype99'] = 'Otra política';
$string['policydocuments'] = 'Documentos de política';
$string['policy:managedocs'] = 'Gestionar políticas';
$string['policynamedversion'] = 'Política {$a->name} (versión {$a->revision} - {$a->id})';
$string['policyversionacceptedinbehalf'] = 'El consentimiento a esta política ha sido dado en tu nombre.';
$string['policyversionacceptedinotherlang'] = 'El consentimiento a esta versión de la política ha sido dado en un idioma distinto.';
$string['policy:viewacceptances'] = 'Ver informes de consentimiento de usuarios';
$string['previousversions'] = '{$a} versiones previas';
$string['privacy:metadata:acceptances'] = 'Información sobre la aceptación de políticas por parte los usuarios.';
$string['privacy:metadata:acceptances:lang'] = 'Idioma usado para mostrar la política cuando se dio el consentimiento.';
$string['privacy:metadata:acceptances:note'] = 'Cualquier comentario especificado por un usuario cuando dio el consentimiento en nombre de otro usuario.';
$string['privacy:metadata:acceptances:policyversionid'] = 'Versión de la política para la que se dio el consentimiento.';
$string['privacy:metadata:acceptances:status'] = 'El estado del acuerdo.';
$string['privacy:metadata:acceptances:timecreated'] = 'Momento en que el usuario dio su consentimiento a la política.';
$string['privacy:metadata:acceptances:timemodified'] = 'Momento en que el usuario actualizó su consentimiento a la política.';
$string['privacy:metadata:acceptances:userid'] = 'Usuario al cuál hace referencia este acuerdo de política.';
$string['privacy:metadata:acceptances:usermodified'] = 'Usuario que dio el consentimiento a la política, si se hizo en nombre de otro usuario.';
$string['privacy:metadata:subsystem:corefiles'] = 'La herramienta de políticas almacena ficheros incluídos en el resumen y la política completa.';
$string['privacy:metadata:versions'] = 'Información de la versión de la política.';
$string['privacy:metadata:versions:archived'] = 'Estado de la política (activa o inactiva).';
$string['privacy:metadata:versions:audience'] = 'Tipo de usuarios a los que se requiere dar el consentimiento.';
$string['privacy:metadata:versions:content'] = 'Contenido de esta versión de la política.';
$string['privacy:metadata:versions:contentformat'] = 'Formato del campo contenido.';
$string['privacy:metadata:versions:name'] = 'Nombre de la política.';
$string['privacy:metadata:versions:policyid'] = 'Política con la que esta versión está asociada.';
$string['privacy:metadata:versions:revision'] = 'Nombre de revisión de esta versión de la política.';
$string['privacy:metadata:versions:summary'] = 'Resumen de esta versión de la política.';
$string['privacy:metadata:versions:summaryformat'] = 'Formato del campo resumen.';
$string['privacy:metadata:versions:timecreated'] = 'Momento en que se creó esta versión de la política.';
$string['privacy:metadata:versions:timemodified'] = 'Momento en que se actualizó esta versión de la política.';
$string['privacy:metadata:versions:type'] = 'Tipo de política.';
$string['privacy:metadata:versions:usermodified'] = 'Usuario que modificó la política.';
$string['privacysettings'] = 'Ajustes de privacidad';
$string['readpolicy'] = 'Por favor, lea nuestro {$a}';
$string['refertofullpolicytext'] = 'Por favor, acceda al texto completo {$a} si desea revisarlo.';
$string['revokeacknowledgement'] = 'Confirmo que he recibido una petición de revocar el consentimiento en nombre de el/los usuario(s).';
$string['revokedetails'] = 'Revocar el consentimiento del usuario';
$string['save'] = 'Guardar';
$string['saveasdraft'] = 'Guardar como borrador';
$string['selectpolicyandversion'] = 'Use el filtro de arriba para seleccionar la política y/o la versión.';
$string['selectuser'] = 'Seleccionar usuario {$a}';
$string['selectusersforconsent'] = 'Seleccionar usuarios para dar el consentimiento en su nombre';
$string['settodraft'] = 'Crear un nuevo borrador';
$string['status'] = 'Estado de la política';
$string['status0'] = 'Borrador';
$string['status1'] = 'Activo';
$string['status2'] = 'Inactivo';
$string['statusinfo'] = 'Una política con el estado \'Activo\' requiere que los usuarios den su consentimiento, bien cuando se conectan por primera vez o bien cuando vuelven a entrar si son usuarios ya existentes.';
$string['steppolicies'] = 'Política {$a->numpolicy} de {$a->totalpolicies}';
$string['useracceptancecount'] = '{$a->agreedcount} de {$a->userscount} ({$a->percent}%)';
$string['useracceptancecountna'] = 'N/D';
$string['useracceptances'] = 'Acuerdos de usuario';
$string['userpolicysettings'] = 'Políticas';
$string['usersaccepted'] = 'Acuerdos';
$string['viewarchived'] = 'Ver versiones anteriores';
$string['viewconsentpageforuser'] = 'Viendo esta página en nombre de {$a}';
