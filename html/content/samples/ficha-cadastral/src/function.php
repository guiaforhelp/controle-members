<?php
if(sanitization('get', 'edit', 'url')){
    require 'init.php';
}else {
    echo '<div class="panel">
    <div class="date-container"><h3><a href="http://localhost/?page-id=2">SELECIONE UM USUÁRIO!!!</a></h3></div>
    </div>';
}

registreScript(array(            
    enqueueScript('jquery-3.6.3', false, 'jquery-3.6.3.min', false, false, true, false),
    enqueueScript('ajax', false, 'ajax', false, false, true, false),     
    enqueueScript('forms-main', true, 'forms-main', false, false, true, false),     
    enqueueStyle('ficha-cadastral', 'ficha-cadastral', false, false)
));