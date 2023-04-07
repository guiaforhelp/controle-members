<?php
require 'home.php';

registreScript(array(            
    enqueueScript('jquery-3.6.3', false, 'jquery-3.6.3.min', false, false, true, false),
    enqueueScript('ajax', false, 'ajax', false, false, true, false),  
    enqueueScript('forms', true, 'forms-main', false, false, true, false),       
    enqueueStyle('add-user', 'add-user', false, false)
));


$page_add_user = array(
    'add'=>'add-user',
    'views'=>'views-user',
    'remove'=>'remove-user'
);

if(sanitization('get', 'remove', 'url')){
    echo '<h1>id é: '.sanitization('get', 'remove', 'url').'</h1>';
    deleteMembers(sanitization('get', 'remove', 'url')); 
}


if(array_key_exists('type', $_GET)){
    HomeAddUser($page_add_user[sanitization('get', 'type', 'url')]);
}else {
    HomeAddUser(false);
}