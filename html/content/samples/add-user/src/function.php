<?php
require 'home.php';

registreScript(array(            
    enqueueScript('jquery-3.6.3', false, 'jquery-3.6.3.min', false, false, true, false),
    enqueueScript('ajax', false, 'ajax', false, false, true, false),  
    enqueueScript('forms', true, 'forms-main', false, false, true, false),       
    enqueueStyle('add-user', 'add-user', false, false)
));


$page_add_user = array(
    'add'=>'add-user'
);

HomeAddUser($page_add_user[sanitization('get', 'type', 'url')]);