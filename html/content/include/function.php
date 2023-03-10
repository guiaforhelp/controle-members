<?php
/**
 * Configurações do sistema
 * Registros de classes
 * 
 * @package Control Members
 * 
 */

require 'objclass.php';
require 'config.php';

function selectMembers($date, $order){
    
    $selectM = new conectDB();
    $selectM->selectDb('control_members', $date, $order);
}

function insertMembers(
    $nome, 
    $rg, 
    $data_nascimento, 
    $estado_civil, 
    $naturalidade, 
    $endereco, 
    $n_endereco, 
    $cep, 
    $cidade, 
    $data_batismo, 
    $val_carteirinha, 
    $situaco_membro, 
    $cargo, 
    $obs){
    $insert = new conectDB();    
    $insert->insertDb(
        $nome,  
        $rg, 
        $data_nascimento, 
        $estado_civil, 
        $naturalidade, 
        $endereco, 
        $n_endereco, 
        $cep, 
        $cidade, 
        $data_batismo, 
        $val_carteirinha, 
        $situaco_membro, 
        $cargo, 
        $obs);
}

function deleteMembers($date){
    $delete = new conectDB();
    $delete->deleteDb($date);
}

function updateMembers($id, $col, $date){
    $update = new conectDB();
    $update->updateDb($id, $col, $date);
}

function insertPage($name, $id_page, $type_page){
    $crpmdb = new conectDB();
    $crpmdb->crpmInsertDb($name, $id_page, $type_page);
}

function selectPageDb($table, $type_page, $default){
    $crpmdb = new conectDB();
    $crpmdb->crpmSelectDb($table, $type_page, $default);
}

function favicon($src_favicon) {
    $array_favicon = array(
        "rel" => "link rel='shortcut icon'",
        "src" => 'href=',
        "type" => "type='image/x-icon'"
    );

    return "<".$array_favicon['rel']." "
    .$array_favicon['src'].$src_favicon." "
    .$array_favicon['type']."> \n";
}

function enqueueStyle($name, $src, $url, $ver){    
    if($ver == null){
        $ver = CRPM_VERSION;
    }

    if($url == false){
        $url = 'content/css/';
    }

    $style_array = array(
        "rel" => 'link rel="stylesheet"',        
        "type" => 'type="text/css"',
        "src" => 'href="'.$url.$src.'.css?',
        "ver" => 'ver='.$ver.'"',
        "id" => 'id="'.$name.'"'
    );

    return "<".$style_array['rel']." ".$style_array['src'].$style_array['ver']." ".$style_array['id'].">";
}

function enqueueScript($name, $src, $url, $ver, $defer, $url_externo){   
    $script_array = array(        
        "js" => '.js',
        "ver" => 'ver='       
    );

    if($url == false){
        $url = 'content/js/';
    }

    if($url_externo){
        $src = $url_externo;
    }elseif($name == 'jquery'){
        $src = $script_array['url_jquery'];
        $ver = null;
    }else {
        $src = $url.$src.$script_array['js'];
    }

    if($defer){
        $defer = 'defer';
    }else {
        $defer = null;
    }

    if($url_externo){
        $ver = null;
    }elseif($ver == null && $name == 'jquery'){
        $ver = null;
    }elseif($ver == null){
        $ver = '?ver='.CRPM_VERSION;
    }else {
        $ver = '?ver=' . $ver;
    }

     return "<script src='".$src.$ver."' id=".$name." ".$defer."></script>";
    
}


function sanitization($input, $value, $type){
    $type_array = array(
        "special_chars" => FILTER_SANITIZE_SPECIAL_CHARS,
        "int" => FILTER_SANITIZE_NUMBER_INT,        
        "emai" => FILTER_SANITIZE_EMAIL,
        "url" => FILTER_SANITIZE_URL    
    );

    $input_array = array(
        "get" => INPUT_GET,
        "post" => INPUT_POST
    );

    return filter_input($input_array[$input], $value, $type_array[$type]); 
}

function pluginUrl($url){     
    $url = explode('html', $url);
    return $url[1];
}

function Host(){
    return 'http://'.$_SERVER['HTTP_HOST'];
}