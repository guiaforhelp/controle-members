<?php
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


//--Declaração de idioma do sistema
function typeLanguage($language){
    $array_language = array(
     "langBr" => "pt_BR",
     "langEn" => "en"
     );
     return $array_language[$language];
}