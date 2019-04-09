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
 * Strings for component 'tool_usersuspension', language 'es', branch 'MOODLE_35_STABLE'
 *
 * @package   tool_usersuspension
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:confirm-delete-exclusion'] = '¿Estás seguro que quieres borrar este elemento de la lista de exclusión?';
$string['action:delete-exclusion'] = 'Eliminar de la lista de exclusión';
$string['action:exclude:add:cohort'] = 'Agregar la cohorte a la lista de exclusión';
$string['action:exclude:add:user'] = 'Agregar el usuario a la lista d exclusión';
$string['button:backtocourse'] = 'Regresar al curso';
$string['button:backtoexclusions'] = 'Regresar a la vista de la lista de exclusiones';
$string['button:backtouploadform'] = 'Regresar al formulario de carga';
$string['button:continue'] = 'Continuar';
$string['config:cleanlogs:disabled'] = 'Automatic logcleaning está deshabilitada en la configuración global';
$string['config:cleanup:disabled'] = 'La opción \'limpieza\' o \'cleanup\' está deshabilitada en la configuración global';
$string['config:fromfolder:disabled'] = 'La opción \'suspensión desde carga\' o \'suspend from upload\' está deshabilidad en la configuración global';
$string['config:smartdetect:disabled'] = 'La opción \'detección inteligente\' o \'smart detection\' está deshabilidad en la configuración global';
$string['config:tool:disabled'] = 'La utiliad de suspensión de usuario está deshabilidad en la configuración global';
$string['csv:delimiter'] = 'Delimitador';
$string['csv:enclosure'] = 'Cierre';
$string['csv:upload:continue'] = 'Continue';
$string['email:user:delete:body'] = '<p>Estimada/o {$a->name}</p>
<p>Tu cuenta será eliminada después de estar suspendida por  {$a->timesuspended}</p>
<p>Atentamente<br/>{$a->signature}</p>';
$string['email:user:delete:subject'] = 'Tu cuenta ha sido eliminada';
$string['email:user:suspend:auto:body'] = '<p>Estimada/o {$a->name}</p>
<p>Tu cuenta ha sido suspendida después de no registrar actividad por  {$a->timeinactive}</p>
<p>Si crees que es una equivocación y deseas activar tu cuenta nuevamente, por favor contácta a {$a->contact}</p>
<p>Atentamente<br/>{$a->signature}</p>';
$string['setting:enablecleanlogs'] = 'Habilitar limpieza de registros \'logcleaning\'';
$string['setting:enablecleanup'] = 'Habilitar limpieza';
$string['setting:enabled'] = 'Habilitar';
$string['setting:enablefromfolder'] = 'Suspensión automática utilizando archivo CSV';
$string['setting:enablefromupload'] = 'Habilitar \'desde carga\'';
$string['setting:enablesmartdetect'] = 'Habilitar detección inteligente';
$string['setting:senddeleteemail'] = '¿Enviar mail de eliminación?';
$string['setting:sendsuspendemail'] = '¿Enviar mail de suspesión?';
$string['setting:smartdetect_interval'] = 'Intervalo de detección inteligente';
$string['setting:smartdetect_suspendafter'] = 'Intervalo de inactividad para la suspesión';
$string['setting:uploaddetect_interval'] = 'Intervalo de procesamiento de la carpeta';
$string['setting:uploadfilename'] = 'Archivo a subir';
$string['setting:uploadfolder'] = 'Carpeta a subir';
$string['status:deleted'] = 'eliminado';
$string['status:suspended'] = 'suspendido';
