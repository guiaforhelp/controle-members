<?php
/** 
 * 
 * @author miquéias Silva
 * @copyright 2023 CRPM
 * @package Nav Menu  
 *  
 */

define( 'NAV_MENU__DIR__',  __DIR__);
define( 'NAV_MENU_HOST', Host() );
define( 'NAV_MENU_URL', NAV_MENU_HOST. pluginUrl(NAV_MENU__DIR__) );


function navMenu(){
    return json_decode(file_get_contents(NAV_MENU_URL.'/nav-menu.json', true));    
}