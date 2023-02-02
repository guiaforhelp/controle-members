<?php
//--Conexão banco de dados--//
abstract class classMembres {
    //--Conexão banco de dados--//   
    private $conect; 
    private $name_db;
    private $host_db;
    private $user_db;
    private $pass_db;
    private $port_db;

    //-- set functions
    protected function setNameDb($name_db){
        $this->name_db = $name_db;
    }
    protected function setHostDb($host_db){
        $this->host_db = $host_db;
    }
    protected function setUserDb($user_db){
        $this->user_db = $user_db;
    }
    protected function setPassDb($pass_db){
        $this->pass_db = $pass_db;
    }
    protected function setPortDb($port_db){
        $this->port_db = $port_db;
    }

    //-- get functions
    public function getNameDb(){
        return $this->name_db ;
    }
    public function getHostDb(){
        return $this->host_db;
    }
    public function getUserDb(){
        return $this->user_db;
    }
    public function getPassDb(){
        return $this->pass_db;
    }
    public function getPortDb(){
        return $this->port_db;
    }
}