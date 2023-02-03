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