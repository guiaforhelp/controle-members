<?php
/** 
 * 
 * @version ${1:1.0.0}
 * @author miquéias Silva
 * @copyright 2023 CRPM
 * @package Lateral-menu  
 *  
 */

define( 'HORIZONTAL_MENU_VERSION', '1.0.0' );
define( 'HORIZONTAL_MENU__DIR__',  __DIR__);
define( 'HORIZONTAL_MENU_MODULES_SRC', 'src/' );
define( 'HORIZONTAL_MENU_URL_PLUGIN', pluginUrl(HORIZONTAL_MENU__DIR__) );
define( 'HORIZONTAL_MENU_PLUGIN_SRC', HORIZONTAL_MENU_URL_PLUGIN. '/src/' );

require LATERAL_MENU_MODULES_SRC.'function.php';