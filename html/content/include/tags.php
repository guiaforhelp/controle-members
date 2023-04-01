<?php
function __($date){
    $date_explode = explode('%%', $date);
    // print_r($date_explode);

    if(in_array($date_explode[1], $date_explode)){
        return '<a href="'.$date_explode[1].'">'.$date_explode[0].'</a>';
    }    
}

function __link($date, $link){
    return $date.'%%'.$link.'%%';
}