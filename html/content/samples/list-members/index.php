<?php
/** 
 * 
 * @author miquéias Silva
 * @copyright 2023 CRPM
 * @package Page Add User
 *  
 */

define( 'LIST_USER__DIR__',  __DIR__);
define( 'LIST_USER_MODULES_SRC', 'src/' );
define( 'LIST_USER_URL_PLUGIN', pluginUrl(LIST_USER__DIR__) );
define( 'LIST_USER_PLUGIN_SRC', LIST_USER_URL_PLUGIN. '/src/' );

require LIST_USER_MODULES_SRC.'function.php';