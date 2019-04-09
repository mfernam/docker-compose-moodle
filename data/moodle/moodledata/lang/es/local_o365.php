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
 * Strings for component 'local_o365', language 'es', branch 'MOODLE_35_STABLE'
 *
 * @package   local_o365
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acp_healthcheck'] = 'Comprobar estado';
$string['acp_maintenance'] = 'Herramientas de mantenimiento';
$string['acp_maintenance_coursegroupscheck'] = 'Recrear grupos borrados de Office 365.';
$string['acp_maintenance_coursegroupusers'] = 'Volver a sincronizar los usuarios en grupos para los cursos.';
$string['acp_maintenance_desc'] = 'Estas herramientas pueden ayudarte a resolver problemas comunes.';
$string['acp_maintenance_warning'] = 'Atención: Estas son herramientas avanzadas. Por favor úsalas únicamente si entiendes lo que estás haciendo.';
$string['acp_parentsite_desc'] = 'Sitio para compartir archivos del curso de Moodle.';
$string['acp_parentsite_name'] = 'Moodle';
$string['acp_sharepointcourseselect_applyfilter'] = 'Aplicar filtro';
$string['acp_sharepointcourseselect_bulk'] = 'Operaciones en masa';
$string['acp_sharepointcourseselect_enableshown'] = 'Volver a configuración';
$string['acp_sharepointcourseselect_filter'] = 'Flitrar cursos';
$string['acp_sharepointcourseselect_filtercategory'] = 'Filtrar por categoría de curso';
$string['acp_sharepointcourseselect_filterstring'] = 'Filtrar por búsqueda de cadena de texto';
$string['acp_sharepointcourseselect_instr_header'] = 'Instrucciones';
$string['acp_sharepointcourseselectlabel_enabled'] = 'Activar';
$string['acp_sharepointcourseselect_off_header'] = 'No activado';
$string['acp_sharepointcustom_savemessage'] = 'Tus cambios han sido guardados.';
$string['acp_title'] = 'Panel de control de la Administración de Office365';
$string['acp_usergroupcustom_bulk'] = 'Operaciones en masa';
$string['acp_usergroupcustom_bulk_disable'] = 'Desactivar todo';
$string['acp_usergroupcustom_bulk_enable'] = 'Activar todo';
$string['acp_usergroupcustom_enabled'] = 'Activado';
$string['acp_usergroupcustom_savemessage'] = 'Tus cambios han sido guardados.';
$string['acp_usermatch'] = 'Comparación de usuarios';
$string['acp_usermatch_matchqueue_clearall'] = 'Limpiar todo';
$string['acp_usermatch_matchqueue_clearerrors'] = 'Borrar "Errores"';
$string['acp_usermatch_matchqueue_clearqueued'] = 'Borrar "En cola"';
$string['acp_usermatch_matchqueue_clearsuccess'] = 'Borrar "Exitosos"';
$string['acp_usermatch_matchqueue_column_muser'] = 'Usuario de Moodle';
$string['acp_usermatch_matchqueue_column_o365user'] = 'Usuario de Office 365';
$string['acp_usermatch_matchqueue_column_openidconnect'] = 'OpenID Connect';
$string['acp_usermatch_matchqueue_column_status'] = 'Estado';
$string['acp_usermatch_matchqueue_status_error'] = 'Error: {$a}';
$string['acp_usermatch_matchqueue_status_queued'] = 'En cola';
$string['acp_usermatch_matchqueue_status_success'] = 'Exitoso';
$string['calendar_site'] = 'Calendario de Sitio';
$string['calendar_user'] = 'Calendario personal (usuario)';
$string['erroracpauthoidcnotconfig'] = 'Por favor, configure primero las credenciales de aplicación en auth_oidc.';
$string['erroracplocalo365notconfig'] = 'Por favor, configure primero local_o365.';
$string['erroracpnosptoken'] = 'No cuenta con un Token de SharePoint disponible, y no puede conseguir uno.';
$string['errorcouldnotcreatespgroup'] = 'No se pudo crear el grupo de SharePoint.';
$string['errorcouldnotrefreshtoken'] = 'No se pudo actualizar el token.';
$string['errorcreatingsharepointclient'] = 'No se pudo obtener la "SharePoint api client"';
$string['errorhttpclientbadtempfileloc'] = 'No se pudo abrir ubicación temporal para guardar el archivo.';
$string['errorhttpclientnofileinput'] = 'Sin archivo de parámetro httpclient::put';
$string['erroro365apibadcall'] = 'Error en la llamada a la API.';
$string['erroro365apibadpermission'] = 'Permiso no encontrado';
$string['erroro365apicouldnotcreatesite'] = 'Problema al crear el sitio.';
$string['erroro365apicoursenotfound'] = 'Curso no encontrado.';
$string['erroro365apiinvalidmethod'] = 'httpmethod inválido pasó a apicall';
$string['erroro365apiinvalidtoken'] = 'Token inválido o caducado.';
$string['erroro365apinoparentinfo'] = 'No se ha encontrado información de la carpeta padre/raíz';
$string['erroro365apinotimplemented'] = 'Esto debe ser anulado.';
$string['erroro365apinotoken'] = 'No tienen un token para el recurso y usuario indicado, y no se puedo conseguir uno ¿Ha caducado el token de actualización del usuario?';
$string['erroro365apisiteexistsnolocal'] = 'El sitio ya existe pero no se pudo encontrar el registro local.';
$string['eventcalendarsubscribed'] = 'Usuario suscrito a un calendario';
$string['eventcalendarunsubscribed'] = 'Usuario desuscrito del calendario';
$string['healthcheck_fixlink'] = 'Haga clic aquí para arreglarlo.';
$string['healthcheck_systemapiuser_title'] = 'System API User';
$string['healthcheck_systemtoken_result_badtoken'] = 'Hubo un problema de comunicación con Office365 como System API User. Esto por lo general se puede resolver reiniciando el System API User.';
$string['healthcheck_systemtoken_result_noclientcreds'] = 'No se indicaron las credenciales de aplicación en el plugin OpenID Connect. Sin estas credenciales, Moodle no puede realizar ninguna comunicación con Office 365. Haga clic aquí para visitar la página de configuración e introduzca sus credenciales.';
$string['healthcheck_systemtoken_result_notoken'] = 'Moodle no tiene un token para comunicarse con Office365 como System API User. Esto por lo general se puede resolver reiniciando el System API User.';
$string['healthcheck_systemtoken_result_passed'] = 'Moodle puede comunicarse con Office 365 como System API User.';
$string['pluginname'] = 'Integración de Microsoft Office 365';
$string['settings_aadsync'] = 'Sincronización de usuarios desde AzureAD';
$string['settings_aadsync_details'] = 'Cuando está activada, los usuarios asociados en el directorio AzureAD se sincronizan con Moodle. Esto crea usuarios en Moodle que existen en AzureAD, y elimina los usuarios ya sincronizados en Moodle cuando se eliminan de AzureAD.';
$string['settings_aadtenant'] = 'Azure AD Tenant';
$string['settings_aadtenant_details'] = 'Se utiliza para identificar a su organización dentro de Azure AD. Por ejemplo: "contoso.onmicrosoft.com"';
$string['settings_detectoidc'] = 'Credenciales de Aplicación';
$string['settings_detectoidc_credsinvalid'] = 'sLa credenciales no han sido enviadas o estás incompletas.';
$string['settings_detectoidc_credsinvalid_link'] = 'Configurar Credenciales';
$string['settings_detectoidc_credsvalid'] = 'Las credenciales se han establecido';
$string['settings_detectoidc_credsvalid_link'] = 'Cambiar';
$string['settings_detectoidc_details'] = 'Para comunicarse con Office365, Moodle necesita credenciales para identificarse. Éstas se establecen en el plugin de autenticación "OpenID Connect".';
$string['settings_detectperms'] = 'Permisos de Aplicación';
$string['settings_detectperms_details'] = 'Para el uso de las funciones de plugin, deben configurarse los permisos correctos para la aplicación en AzureAD.';
$string['settings_detectperms_errorfix'] = 'Se produjo un error al tratar de arreglar los permisos. Por favor, configurelos manualmente en Azure.';
$string['settings_detectperms_fixperms'] = 'Arreglar Permisos';
$string['settings_detectperms_fixprereq'] = 'Para solucionar este problema de forma automática, el System API User  debe ser un administrador, y el "Access your organization\'s directory" permiso debe estar habilitado en Azure para la aplicación "Windows Azure Active Directory".';
$string['settings_detectperms_invalid'] = 'Comprobar permisos en AzureAD';
$string['settings_detectperms_missing'] = 'Perdido:';
$string['settings_detectperms_nocreds'] = 'Es necesario establecer primero las Credenciales de Aplicación. Ver la configuración de arriba.';
$string['settings_detectperms_nounified'] = 'Unified API no está presente. Algunas nuevas características pueden no funcionar.';
$string['settings_detectperms_unifiednomissing'] = 'Todos los permisos Unified están presentes.';
$string['settings_detectperms_update'] = 'Actualizar';
$string['settings_detectperms_valid'] = 'Los permisos han sido establecidos.';
$string['settings_header_options'] = 'Opciones';
$string['settings_header_setup'] = 'Configuración';
$string['settings_healthcheck'] = 'Comprobar Estado';
$string['settings_healthcheck_details'] = 'Si algo no está funcionando correctamente, realizando una comprobación de estado  puede identificar el problema y proponer soluciones';
$string['settings_healthcheck_linktext'] = 'Realizar control de estado';
$string['settings_o365china'] = 'Office 365 para China';
$string['settings_o365china_details'] = 'Active esta opción si está utilizando Office365 para China.';
$string['settings_odburl'] = 'URL de OneDrive for Business';
$string['settings_odburl_details'] = 'La URL utilizada para acceder a OneDrive for Business. Por lo general se puede determinar mediante su AzureAD tenant. Por ejemplo, si su AzureAD tenant es "contoso.onmicrosoft.com", lo más probable es que la URL sea  "contoso-my.sharepoint.com". Escriba sólo el nombre de dominio, no incluya http: // o https: //';
$string['settings_serviceresourceabstract_empty'] = 'Por favor, introduzca un valor o haga clic en "Detectar" para intentar detectar el valor correcto.';
$string['settings_serviceresourceabstract_invalid'] = 'Este valor no parece ser válido.';
$string['settings_serviceresourceabstract_nocreds'] = 'Por favor, establezca primero las credenciales de la aplicación.';
$string['settings_serviceresourceabstract_valid'] = '{$a} es válido.';
$string['settings_sharepointlink'] = 'Enlace de SharePoint';
$string['settings_sharepointlink_changelink'] = 'Cambiar Sitio';
$string['settings_sharepointlink_connected'] = 'Moodle está conectado a este sitio de SharePoint.';
$string['settings_sharepointlink_details'] = 'Para conectar Moodle y SharePoint, introduzca la URL completa del sitio de SharePoint para Moodle para conectarse a él. Si el sitio no existe, Moodle intentará crearlo. <br /><a href="https://docs.moodle.org/27/en/Office365/SharePoint">Leer más acerca de la conexión de Moodle y SharePoint</a>';
$string['settings_sharepointlink_enterurl'] = 'Introduzca una URL arriba.';
$string['settings_sharepointlink_initializing'] = 'Moodle está estableciendo este sitio de SharePoint.';
$string['settings_sharepointlink_status_checking'] = 'Comprobando el sitio de SharePoint indicado...';
$string['settings_sharepointlink_status_invalid'] = 'Esto no es un sitio de SharePoint que pueda usarse.';
$string['settings_sharepointlink_status_notempty'] = 'Este sitio se puede usar, pero ya existe. Moodle puede entrar en conflicto con el contenido existente. Para obtener mejores resultados, ingrese un sitio de SharePoint que no exista y Moodle lo creará.';
$string['settings_sharepointlink_status_valid'] = 'Moodle creará este sitio de SharePoint y se utilizará para el contenido de Moodle.';
$string['settings_systemapiuser'] = 'System API User';
$string['settings_systemapiuser_change'] = 'Cambiar Usuario';
$string['settings_systemapiuser_details'] = 'Cualquier usuario de AzureAD , pero debe ser la cuenta de un administrador o una cuenta dedicada. Esta cuenta se utiliza para realizar operaciones que no son específicas del usuario. Por ejemplo, la gestión de los sitios de cursos de SharePoint.';
$string['settings_systemapiuser_setuser'] = 'Configurar Usuario';
$string['settings_systemapiuser_usernotset'] = 'No se estableció un usuario';
$string['settings_systemapiuser_userset'] = '{$a}';
$string['spsite_group_contributors_desc'] = 'Todos los usuarios que tienen acceso a administrar los archivos de curso {$a}';
$string['spsite_group_contributors_name'] = '{$a} colaboradores';
$string['task_calendarsyncin'] = 'Sincronizar eventos de O365 en Moodle';
$string['task_groupcreate'] = 'Crear Grupos de Usuarios en Office365';
$string['task_refreshsystemrefreshtoken'] = 'Actualizar token de actualización de System API User';
$string['task_sharepointinit'] = 'Inicializar SharePoint.';
$string['task_syncusers'] = 'Sincronizar usuarios con AAD.';
$string['ucp_calsync_availcal'] = 'Calendarios de Moodle disponibles';
$string['ucp_calsync_desc'] = 'Seleccione los calendarios que serán sincronizados desde Moodle a su calendario de Outlook.';
$string['ucp_calsync_title'] = 'Sincronización del Calendario de Outlook';
$string['ucp_connection_start'] = 'Conectarse a Office365';
$string['ucp_connectionstatus'] = 'Estado de la conexión';
$string['ucp_connection_status'] = 'La conexión a Office365 está:';
$string['ucp_connection_stop'] = 'Desconectarse de Office365';
$string['ucp_features'] = 'Características de Office365';
$string['ucp_general_intro'] = 'Desde aquí puede administrar su conexión a Office365.';
$string['ucp_notconnected'] = 'Por favor, conectarse a Office365 antes de acceder aquí.';
$string['ucp_options'] = 'Opciones';
$string['ucp_status_disabled'] = 'Sin Conexión';
$string['ucp_status_enabled'] = 'Activa';
$string['ucp_syncdir_both'] = 'Actualizar tanto Outlook como Moodle';
$string['ucp_syncdir_in'] = 'De Outlook a Moodle';
$string['ucp_syncdir_out'] = 'De Moodle a Outlook';
$string['ucp_syncdir_title'] = 'Comportamiento de la sincronización:';
$string['ucp_syncwith_title'] = 'Sincronizar con:';
$string['ucp_title'] = 'Administración de conexión a Office365';
