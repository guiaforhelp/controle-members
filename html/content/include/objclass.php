<?php
require 'class/class_members.php';

// /**
//  * Fazendo a conexão com banco dados
//  */
class conectDB extends classMembres {
    public function __construct(){
        $this->setNameDb(DB_NAME);
        $this->setHostDb(DB_HOST);
        $this->setUserDb(DB_USER);
        $this->setPassDb(DB_PASSWORD);
        $this->setPortDb(DB_PORT);           
    }
    
    public function conect(){
        return new PDO('mysql:host=' 
        .$this->getHostDb(). ';port=' 
        .$this->getPortDb(). ';dbname=' 
        .$this->getNameDb(), $this->getUserDb(), $this->getPassDb());
    }  
    
    public function selectDb($table, $date, $order){

        $sql = $this->conect()->prepare("SELECT * FROM $table ORDER BY $date $order");
        $sql->execute();
        $sql_member = $sql->fetchAll();      

        foreach($sql_member as $sql_members){
            echo $sql_members[$date].'<br>';
        }
    }

    public function insertDb(
        $member, 
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
        $insert = $this->conect()->prepare("INSERT INTO control_members (
            nome, 
            rg, 	
            data_nascimento, 
            estado_civil, 
            naturalidade, 
            endereco, 
            n_endereco, 
            cep, 
            cidade, 
            data_batismo, 
            validade_carteirinha, 
            situacao_membro, 
            cargo, 
            obs) VALUES(
                :nome, 
                :rg, 	
                :data_nascimento, 
                :estado_civil, 
                :naturalidade, 
                :endereco, 
                :n_endereco, 
                :cep, 
                :cidade, 
                :data_batismo, 
                :validade_carteirinha, 
                :situacao_membro, 
                :cargo, 
                :obs)");
        
        $query = "SELECT * FROM `control_members` WHERE `nome` LIKE '$member'";
        $result = $this->conect()->query($query)->fetchAll();
        
        if(count($result) < 1){
            $insert->execute(
                array(
                    ':nome' => $member,                    
                    ':rg' => $rg, 	
                    ':data_nascimento' => $data_nascimento, 
                    ':estado_civil' => $estado_civil, 
                    ':naturalidade' => $naturalidade, 
                    ':endereco' => $endereco, 
                    ':n_endereco' => $n_endereco, 
                    ':cep' => $cep, 
                    ':cidade' => $cidade, 
                    ':data_batismo' => $data_batismo, 
                    ':validade_carteirinha' => $val_carteirinha, 
                    ':situacao_membro' => $situaco_membro, 
                    ':cargo' => $cargo, 
                    ':obs' => $obs
                ));           
        }else {
            echo 'Usuario ja está cadastrado no sistema!';
        }
    }

    public function deleteDb($date){
        $delete = $this->conect()->prepare("DELETE FROM control_members WHERE id=:id");
        $delete->execute(array(':id' => $date));
    }

    public function updateDb($id, $col, $date){
        $update = $this->conect()->prepare("UPDATE `control_members` SET $col = :nome WHERE id=:id;");
        $update->execute(array(
            ':id' => $id,
            ':nome' => $date
        ));
    }
}