<?php
require 'header.php';
require 'sample.php';
require 'footer.php';

require 'include/function.php';

function loadPages($id){
    if(isset($_GET['page-id']) &&  $_GET['page-id'] != $id){
        @header("location:/error-404");
    }

}

// function loadPageMain(){
//     if($_SERVER['HTTP_HOST']){
//         echo 'radando page';
//     }
// }


function registreScript($content){
    head($content);   
}

sample();
footer();