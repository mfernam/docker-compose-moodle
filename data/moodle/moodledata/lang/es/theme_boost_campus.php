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
 * Strings for component 'theme_boost_campus', language 'es', branch 'MOODLE_35_STABLE'
 *
 * @package   theme_boost_campus
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionallayoutsettings'] = 'Configuración de diseño adicional';
$string['backgroundimage_desc_note'] = '<br/> A tener en cuenta: Esto no anulará la configuración "theme_boost_campus | loginbackgroundimage", lo que significa que las imágenes cargadas en el fondo de la página de inicio de sesión se mostrarán de todos modos.';
$string['blockdesignheadingsetting'] = 'Bloques';
$string['blockiconsetting'] = 'Icono de bloque';
$string['blockiconsetting_desc'] = 'Con esta configuración puede agregar un icono Font Awesome predeterminado delante del título del bloque. Si se selecciona, también proporcionamos el reemplazo de iconos individualmente para muchos bloques prediseñados de Moodle y también para otros bloques que son utilizados habitualmente. También puede cambiar los iconos fácilmente para cada bloque individualmente en su SCSS cambiando el contenido Font Awesome. Para ver todos los iconos disponibles visite http://fontawesome.io/icons/ y utilice el valor Unicode del icono correspondiente para reemplazar el predeterminado. <br/> El código para cambiar el icono se ve como este cambio de ejemplo para el bloque "Personas": <br/>';
$string['blockiconsetting_desc_code'] = '.block_people .card-block .card-title::before { content: \'\\f0c0\' ; }';
$string['branddangercolorsetting_desc'] = 'Este color se usa, por ejemplo, en lo que respecta a las validaciones de formularios.';
$string['brandinfocolorsetting_desc'] = 'Este color se usa, por ejemplo, para informar acerca de la disponibilidad de actividades o recursos del curso.';
$string['brandsuccesscolorsetting_desc'] = 'Este color se usa, por ejemplo, en lo que respecta a las validaciones de formularios.';
$string['brandwarningcolorsetting_desc'] = 'Este color se usa, por ejemplo, para textos de advertencia.';
$string['catchendkeysetting_desc'] = 'Esta configuración capturará la tecla "Fin" (debería funcionar en todos los navegadores principales y sistemas operativos),';
$string['catchkeyboardcommandsheadingsetting'] = 'Capturar comandos de teclado';
$string['catchkeyboardcommandsheadingsetting_desc'] = 'Las siguientes configuraciones están destinadas a satisfacer las necesidades de los usuarios avanzados, especialmente si su instancia de Moodle tiene un pie de página de gran tamaño. Es probable que los usuarios avanzados utilicen atajos de teclado para navegar por el sitio. Pueden usarlos para ir al final de la página con la intención de llegar rápidamente al tema más reciente del curso (para agregar contenido o calificar actividades más recientes). Si el pie de página no es muy pequeño, tendrían que desplazarse hacia arriba nuevamente. Con estos ajustes, puede habilitar que se capturen los siguientes accesos directos y que solo se desplacen al final del contenido del curso principal.';
$string['catchkeys_desc_addition'] = 'evite el desplazamiento predeterminado hacia la parte inferior de la página y cambia el comportamiento para desplazarse solo hasta el final del contenido del curso principal.';
$string['choosereadme'] = 'Tema Boost Campus es una plantilla "hija" que se utiliza en campus universitarios.';
$string['configtitle'] = 'Configuración de Boost Campus';
$string['courseeditbuttonsetting'] = 'Botón de edición del curso';
$string['courseeditbuttonsetting_desc'] = 'Con esta configuración puede añadir un botón adicional de activar/desactivar edición de curso en el encabezado del curso para un acceso más rápido a esta función que es de uso frecuente.';
$string['coursehintsheadingsetting'] = 'Sugerencias relacionadas con el curso.';
$string['courselayoutsettings'] = 'Configuración de diseño del curso';
$string['coursesettingsheadingsetting'] = 'Configuración del curso';
$string['darknavbarsetting'] = 'Barra de navegación oscura';
$string['darknavbarsetting_desc'] = 'Al marcar esta configuración puede invertir la barra de navegación predeterminada de tonalidad clara a otra barra oscura con enlaces blancos.';
$string['dashboardontopsetting'] = 'Menú del panel de control en la parte superior';
$string['dashboardontopsetting_desc'] = 'Al marcar esta configuración, el elemento del menú del Panel de Control siempre estará ubicado en la parte superior del cajón de navegación. Por defecto, esto es así en todas las páginas de Moodle, excepto en las de los cursos. Allí, el curso actual y sus contenidos se colocan en la parte superior. Esto podría confundir las expectativas del usuario sobre la ubicación del enlace de página de inicio predeterminado.';
$string['defaulthomepageontopsetting'] = 'Página de inicio predeterminada en la parte superior';
$string['defaulthomepageontopsetting_desc'] = 'Al marcar esta configuración, el enlace de la página de inicio predeterminada (Panel de control o Sitio de inicio) siempre se ubicará en la parte superior del panel de navegación. Por defecto, esto es así en todas las páginas de Moodle, excepto en las páginas de los cursos. Allí, el curso actual y sus contenidos se colocan en la parte superior. Esto podría confundir las expectativas del usuario sobre la ubicación del enlace de página de inicio predeterminado.';
$string['designsettings'] = 'Configuración de diseño';
$string['faviconheadingsetting'] = 'Favicon';
$string['faviconsetting'] = 'Favicon';
$string['faviconsetting_desc'] = 'Puede cargar una imagen (formato .ico o .png) que el navegador mostrará como el icono (favicon) de su sitio web Moodle.';
$string['fontdesignheadingsetting'] = 'Fuentes';
$string['fontfilessetting'] = 'Archivos de fuente';
$string['fontfilessetting_desc'] = 'Con este diálogo, puede cargar sus propios archivos de fuentes. La carga se adapta a los archivos de fuente de tipo .eot, .woff, .woff2, .ttf y .svg. <br/>
Importante: para poder utilizar las fuentes cargadas dentro de este tema, debe agregar el código relacionado al área "Raw SCSS" en la pestaña "Configuración avanzada". Se puede encontrar un ejemplo completo en el archivo README.md.';
$string['footerblocks0columnssetting'] = 'Sin bloques en el pie de página';
$string['footerblocks1columnssetting'] = 'Un bloque de columnas en el pie de página';
$string['footerblocks2columnssetting'] = 'Dos bloques de columnas en el pie de página';
$string['footerblocks3columnssetting'] = 'Tres bloques de columnas en el pie de página';
$string['footerblocksheadingsetting'] = 'Bloques en el pie de página';
$string['footerblockssetting'] = 'Bloques en el pie de página';
$string['footerblockssetting_desc'] = 'Puede elegir si desea habilitar la posibilidad de colocar bloques en el pie de página. Si está habilitado, puede elegir entre una, dos o tres columnas de bloques. Estas columnas solo se muestran en pantallas grandes. En pantallas pequeñas las columnas se reducirán automáticamente a una sola para una mejor legibilidad y diseño.';
$string['footerhidehelplinksetting'] = 'Ocultar enlace a Moodle docs';
$string['footerhidehomelinksetting'] = 'Ocultar enlace al inicio de la página web';
$string['footerhidelogininfosetting'] = 'Ocultar información de inicio de sesión';
$string['footerhideusertourslinksetting'] = 'Ocultar enlace para restablecer el tour del usuario';
$string['footerlayoutsettings'] = 'Configuración de diseño del pie de página';
$string['footerlinks_desc'] = 'Si está marcado, el enlace no se mostrará en el pie de página. Si no está marcado (predeterminado), se mostrará.';
$string['footerlinksheadingsetting'] = 'Enlaces de pie de página predeterminados';
$string['footerlinksheadingsetting_desc'] = 'Moodle proporciona algunos enlaces predeterminados en el pie de página: Enlace a los documentos de Moodle, información de inicio de sesión y un enlace al inicio de la página web. <br/> Con las siguientes configuraciones, puede decidir si desea ocultar enlaces específicos porque cree que sus usuarios no los necesitarán.';
$string['footnoteheadingsetting'] = 'Nota al pie';
$string['footnoteheadingsetting_desc'] = 'La siguiente configuración permite agregar una región adicional para mostrar una nota al pie.';
$string['footnotesetting'] = 'Nota al pie';
$string['footnotesetting_desc'] = 'Todo lo que agregue a este área de texto se mostrará al final del pie de página en cada página que representa el pie de página estándar del tema (para los diseños "2 columnas" e "inicio de sesión"). El contenido en este área podría ser, por ejemplo, el copyright, los términos de uso y el nombre de su organización. <br/> Si desea eliminar la nota de pie de página nuevamente, simplemente vacíe el área de texto.';
$string['helptextheadingsetting'] = 'Textos de ayuda';
$string['helptextmodalsetting'] = 'Mostrar textos de ayuda en una ventana modal';
$string['helptextmodalsetting_desc'] = 'La solución predeterminada para mostrar textos de ayuda en popover conduce a diferentes problemas. Por ejemplo, los popovers no son desplazables y pueden sobrepasar la ventana gráfica. <br/>Por esta razón, con esta configuración puede decidir que los textos de ayuda se muestren en un cuadro de texto dedicado (ventana modal) que aparece en el medio de la página con espacio suficiente para contener, incluso, los textos largos de ayuda.';
$string['hidefooterheadingsetting'] = 'Ocultar el pie de página';
$string['hidefooteronloginpagesetting'] = 'Ocultar el pie de página en la página de inicio de sesión';
$string['hidefooteronloginpagesetting_desc'] = 'Al habilitar esta configuración, puede ocultar el pie de página en la página de inicio de sesión. Tenga en cuenta que esto solo ocultará la sección del pie de página, no la sección de notas al pie (si se usa).';
$string['imageareaheadingsetting'] = 'Área de imagen';
$string['imageareaheadingsetting_desc'] = 'Las siguientes configuraciones permiten añadir una región adicional para mostrar las imágenes como logotipos. Esta región se añadirá debajo del pie de página estándar y sobre la región opcional de nota al pie. Si se cargan imágenes, esta área se mostrará en todos los sitios que usan el diseño de 2 columnas.';
$string['imageareaitemslinksetting'] = 'Enlaces de los elementos del área de imagen';
$string['imageareaitemslinksetting_desc'] = 'Con esta configuración opcional puede añadir enlaces a las imágenes cargadas. <br/>Cada línea consiste en el identificador del archivo (el nombre del archivo), la URL del enlace, separados por barras verticales. Cada declaración de enlace debe escribirse en una nueva línea. <br/>Por ejemplo: <br/>moodle.jpg | http://moodle.org <br/>Puede declarar enlaces para una cantidad arbitraria de sus imágenes cargadas. Los enlaces se añadirán solo a aquellas imágenes que coincidan con su nombre de archivo y el identificador declarado en esta configuración.';
$string['imageareaitemsmaxheightsetting'] = 'Altura máxima de las imágenes';
$string['imageareaitemsmaxheightsetting_desc'] = 'Con esta configuración puede cambiar la altura en píxeles de las imágenes cargadas. Todas las imágenes tendrán la misma altura máxima y su ancho se redimensionará proporcionalmente. El valor predeterminado está establecido en 100 píxeles.';
$string['imageareaitemssetting'] = 'Elementos del área de imagen';
$string['imageareaitemssetting_desc'] = 'Con este widget, puede cargar imágenes que se mostrarán en la región del área de imagen adicional. Las imágenes se ordenarán y se mostrarán alfabéticamente según el nombre del archivo. Para eliminar esta región, simplemente elimine todas las imágenes cargadas.';
$string['loginbackgroundimagesetting'] = 'Imágenes de fondo de página de inicio de sesión';
$string['loginbackgroundimagesetting_desc'] = 'Las imágenes cargadas en esta configuración se mostrarán aleatoriamente en la página de inicio de sesión como imágenes de fondo.';
$string['loginform'] = 'Formulario de inicio de sesión';
$string['loginform_desc'] = 'Con esta configuración puede optimizar el formulario de inicio de sesión para que se ajuste a una gran variedad de imágenes de fondo (si están marcadas). Esto significa que el formulario se moverá a la izquierda de la página de inicio de sesión, será más pequeño en ancho y obtendrá un fondo que dejará que la imagen de fondo destaque. El formulario de inicio de sesión se colocará a la izquierda porque muchas imágenes tienen su contenido principal más bien hacia el centro, por lo que mantenemos este contenido visible. Nota: también puede activar esta configuración si no se cargan imágenes de fondo.';
$string['loginpagedesignheadingsetting'] = 'Página de inicio de sesión';
$string['navbardesignheadingsetting'] = 'Navbar';
$string['navdrawerfullwidthsetting'] = 'Ancho de la caja de navegación en pantallas pequeñas';
$string['navdrawerfullwidthsettings_desc'] = 'Al marcar esta configuración puede ampliar el menú de la caja de navegación de modo que quede abierto ocupando el ancho de página al completo en pantallas pequeñas. Esto puede ser necesario porque en pantallas pequeñas se ven muy pocas áreas del contenido principal en el fondo y un menú de ancho completo podría facilitar la visualización de los elementos del menú.';
$string['navdrawerheadingsetting'] = 'Menú de la caja de navegación';
$string['pluginname'] = 'Boost Campus';
$string['presetheadingsetting'] = 'Ajustes preestablecidos';
$string['privacy:metadata'] = 'El tema Boost Campus no almacena ningún dato personal sobre ningún usuario.';
$string['region-footer-left'] = 'Pie de página (izquierda)';
$string['region-footer-middle'] = 'Pie de página (central)';
$string['region-footer-right'] = 'Pie de página (derecha)';
$string['region-side-pre'] = 'Derecha';
$string['section0titlesetting'] = 'Sección 0: Título';
$string['section0titlesetting_desc'] = 'Esta configuración puede cambiar el modo en que Moodle muestra el título de la primera sección del curso. Moodle no lo muestra mientras se establezca el título predeterminado para esta sección. Tan pronto como un usuario cambie el título, aparecerá. Con esta configuración (si la opción está marcada), puede lograr un comportamiento consistente en mostrar siempre el título para la sección 0.';
$string['showhintcourseguestaccessgeneral'] = 'Estás viendo este curso como <strong>{$a->role}</ strong>.';
$string['showhintcourseguestaccesslink'] = 'Para tener acceso completo al curso, puede <a href="{$a->url} "> autoinscribirse en este curso </a>.';
$string['showhintcourseguestaccesssetting_desc'] = 'Con esta configuración aparecerá una sugerencia en el encabezado del curso cuando un usuario esté accediendo como invitado. Si el curso proporciona una autoinscripción activa, también se le presenta un enlace a esa página.';
$string['showhintcoursehiddengeneral'] = 'Este curso está actualmente <strong>oculto</ strong>. Solo los profesores inscritos pueden acceder a un curso si está oculto.';
$string['showhintcoursehiddensetting'] = 'Mostrar advertencia en cursos ocultos';
$string['showhintcoursehiddensetting_desc'] = 'Con esta configuración aparecerá una advertencia en el encabezado del curso siempre que la visibilidad del curso esté oculta. Esto ayuda a identificar el estado de visibilidad de un curso de un vistazo sin la necesidad de mirar en la configuración del curso.';
$string['showhintcoursehiddensettingslink'] = 'Puede cambiar la visibilidad en la <a href="{$a->url}">configuración del curso</a>.';
$string['showhintcoursguestaccesssetting'] = 'Mostrar advertencia para el acceso de invitados';
$string['showsettingsincoursesetting'] = 'En el menú de configuración del curso';
$string['showsettingsincoursesetting_desc'] = 'Con esta configuración puede cambiar la visualización de los menús contextuales. En Boost, hay un menú contextual emergente al lado del icono del engranaje. Al habilitar esta opción, la configuración se realizará directamente debajo del encabezado del curso. Los ajustes están organizados en pestañas, por lo que es más fácil para el usuario obtener la configuración deseada en lugar de escanear una larga lista de elementos del menú. Con esta configuración, también ocultamos el icono de configuración en la página de participantes ya que las entradas en esta página están duplicadas con el menú del curso y, por lo tanto, no son necesarias. <br/>Tenga en cuenta que este cambio no afecta a los usuarios que han desactivado javascript en sus navegadores, que seguirán obteniendo el comportamiento desde el núcleo de Moodle con un menú contextual de curso emergente.';
$string['showswitchedroleincoursesetting'] = 'Posición de la información del cambio de rol';
$string['showswitchedroleincoursesetting_desc'] = 'Con esta configuración puede elegir el lugar donde se muestra la información para cambiar el rol que un usuario ha modificado. Si no se verifica (valor predeterminado), la información del rol se mostrará justo debajo del nombre del usuario en el menú del usuario (como en el tema Boost). Si está marcado, esta información, junto con un enlace para volver, se mostrará debajo del curso, puesto que esta funcionalidad está relacionada con el curso.';
$string['sitehomeontopsetting'] = 'Menú de inicio del sitio en la parte superior';
$string['sitehomeontopsetting_desc'] = 'Al marcar esta configuración el elemento del menú de inicio del sitio siempre estará ubicado en la parte superior del panel de navegación. Por defecto, así es en todas las páginas de Moodle, excepto en las páginas de los cursos. En ese caso, el curso actual y sus contenidos se colocan en la parte superior. Esto podría confundir las expectativas del usuario sobre la ubicación del enlace de página de inicio predeterminado.';
$string['switchedroleto'] = 'Usted está viendo este curso actualmente como:';
$string['switchroleto'] = 'Cambiar rol a';
$string['userdefinedontopsetting'] = 'Página de inicio definida por el usuario en la parte superior';
$string['userdefinedontopsetting_desc'] = 'Al marcar esta configuración el elemento del menú principal del Panel de Control o del Sitio (depende de las preferencias del usuario) siempre estará ubicado en la parte superior del panel de navegación. Por defecto, así es en todas las páginas de Moodle, excepto en las páginas de los cursos. En ese caso, el curso actual y sus contenidos se colocan en la parte superior. Esto podría confundir las expectativas del usuario sobre la ubicación del enlace predeterminado de la página de inicio.';
