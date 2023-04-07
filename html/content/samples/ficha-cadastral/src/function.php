<?php
require 'init.php';

registreScript(array(            
    enqueueScript('jquery-3.6.3', false, 'jquery-3.6.3.min', false, false, true, false),
    enqueueScript('ajax', false, 'ajax', false, false, true, false),     
    enqueueScript('forms-main', true, 'forms-main', false, false, true, false),     
    enqueueStyle('ficha-cadastral', 'ficha-cadastral', false, false)
));