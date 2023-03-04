<?php
require 'sample.php';
require 'footer.php';
require 'include/function.php';

function head(){
require 'header.php';
}

function registreScript($content){     
    foreach ($content as $enqueue_scripts){
        echo $enqueue_scripts;
    }
}

head();
sample();
footer();