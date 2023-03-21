<?php
/** 
 * 
 * @author miquéias Silva
 * @copyright 2023 CRPM
 * @package Page Add User
 *  
 */

define( 'ADD_USER__DIR__',  __DIR__);
define( 'ADD_USER_MODULES_SRC', 'src/' );
define( 'ADD_USER_URL_PLUGIN', pluginUrl(ADD_USER__DIR__) );
define( 'ADD_USER_PLUGIN_SRC', ADD_USER_URL_PLUGIN. '/src/' );

require ADD_USER_MODULES_SRC.'function.php';