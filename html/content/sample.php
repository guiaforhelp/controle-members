<?php
function loadPagesSample(){
    if(sanitization('get', 'page-id', 'special_chars')){
        require 'samples/'.pagesLoadArray(sanitization('get', 'page-id', 'special_chars')).'/index.php';          
    }else {
        require 'samples/'.loadPageMain('main').'.php';
    }
}
function sample(){
    // insertMembers(
    //     'Stephanie Souza', 
    //     '383.322.408-83', 
    //     '1990-09-06', 
    //     'solteiro', 
    //     'São Paulo', 
    //     'Doutor Osmany Borges', 
    //     '395', 
    //     '05878-020', 
    //     'São Paulo',
    //     '2013-02-08', 
    //     '2030-02-08', 
    //     'Ativo', 
    //     'Levita', 
    //     'ESte é um teste para ver se vai dar certo');

    // selectMembers(array('nome'), 'ASC');
    // updateMembers('4', 'rg', '123.456.789.89');
    // deleteMembers('14');  

    loadPagesSample();         
}
