<?php
define('CRPM_VERSION', '1.0');

//--Parametros para conexão com banco de dados
// ** Configurações do MySQL  ** //

/** O nome do banco de dados */
define( 'DB_NAME', 'crpm' );
/** Usuário do banco de dados MySQL */  
define( 'DB_USER', 'root' );
/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'myrootpass' );
/** Nome do host do MySQL */
define( 'DB_HOST', 'db' );
/** Porta do banco de dados */
define( 'DB_PORT', '3306' );



//--Declaração de codigo de linguagem
//--Se é UTF-8 ou ISO-8859-1
function codLinguage($cod){
    $array_codlinguage = array(
        "charset-utf" => "UTF-8"       
    );
    return $array_codlinguage[$cod];
}

//--Setando favicon
function urlFavicon($img){
    $array_favicon = array(
        "favicon" => "content/img/favicon.png"
    );
    return $array_favicon[$img];
}

//--Setando logotipo
function urlLogoTipo($img){
    $array_logo = array(
        "logo" => "content/img/logo.png"
    );
    return $array_logo[$img];
}



//--Declaração de idioma do sistema
function typeLanguage($language){
    $array_language = array(
     "langBr" => "pt_BR"     
     );
     return $array_language[$language];
}

function loadPageMain($page){
    $array_pages_load_main = array(
        "main" => "home"
    );
    return $array_pages_load_main[$page];
}

function pagesLoadArray($page){ 
    $array_pages_load = array(
        1 => "members",
        2 => "home"
    );
    return $array_pages_load[$page];
}