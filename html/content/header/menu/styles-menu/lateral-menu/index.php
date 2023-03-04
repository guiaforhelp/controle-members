<?php
/** 
 * 
 * @version ${1:1.0.0}
 * @author miquéias Silva
 * @copyright 2023 CRPM
 * @package Lateral-menu  
 *  
 */

define( 'LATERAL_MENU_VERSION', '1.0.0' );
define( 'LATERAL_MENU__DIR__',  __DIR__);
define( 'LATERAL_MENU_MODULES_SRC', 'src/' );
define( 'LATERAL_MENU_URL_PLUGIN', pluginUrl(LATERAL_MENU__DIR__) );
define( 'LATERAL_MENU_PLUGIN_SRC', LATERAL_MENU_URL_PLUGIN. '/src/' );

require LATERAL_MENU_MODULES_SRC.'function.php';