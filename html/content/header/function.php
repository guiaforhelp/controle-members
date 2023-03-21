<?php
require 'menu/nav-menu/function.php';

foreach(menuLoadArray() as $menu_loaded){
    require 'menu/styles-menu/'.$menu_loaded.'/index.php';          
}

registreScript(array(    
    enqueueScript('phosphor', false, false, false, false, true, 'https://unpkg.com/phosphor-icons'),
    enqueueScript('header', false, 'header', false, false, true, false),     
    enqueueStyle('header', 'head', false, false)
));
?>