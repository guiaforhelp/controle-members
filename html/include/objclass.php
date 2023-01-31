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
    
    public function selectMembers(){        
        $sql = $this->conect()->prepare("SELECT * FROM `control_members` WHERE `nome` LIKE '%miqueias%'");
        $sql->execute();
        $sql_member = $sql->fetchAll();
        print_r($sql_member);
    }
}