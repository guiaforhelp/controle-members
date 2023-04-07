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

        $sql = $this->conect()->prepare("SELECT * FROM $table ORDER BY nome $order");
        $sql->execute();
        $sql_member = $sql->fetchAll();

        
        foreach($sql_member as $sql_members){  
            foreach($date as $dates){
                return $sql_members[$dates];
            }         

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

    public function idUserDb($date){
        $sql = $this->conect()->prepare("SELECT * FROM `control_members`WHERE `nome` = '$date'");
        $sql->execute();
        $sql_id_user = $sql->fetchAll();

        foreach($sql_id_user as $user_id){
            return $user_id['ID'];
        }
    }

    public function countDb($date){
        $query = "SELECT count(*) as $date FROM `control_members`";
        $result = $this->conect()->prepare($query);
        $result->execute();
        return $result->fetchColumn();
    }

    public function tableDb($table, $date, $date_external, $orders){
        $array_type = array(
            'table-members' => 'control_members'
        );
        $t_db = $array_type[$table];

        $sql = $this->conect()->query("SELECT * FROM $t_db ORDER BY nome $orders");
        $sql->execute();
        $sql_tables = $sql->fetchAll();         
        

        foreach($sql_tables as $tables){
            echo '<tr>';
            foreach($date as $dates){
                $date_explode = explode('%%', $dates);
               
                if(!in_array(@$date_explode[1], $date_explode)){
                    echo '<td>'.$tables[$date_explode[0]].'</td>';                     
                }else {
                    echo '<td><a href="'.@$date_explode[1].'">'.$tables[$date_explode[0]].'</a></td>';                      
                }                                
            }   
            

            foreach($date_external as $dates_externals){
                $dates_exter = explode('%%', $dates_externals);

                if(!in_array($dates_exter[1], $dates_exter)){
                    echo '<td>'.$dates_exter[0].'</td>';                    
                }else {

                    $link_sql = explode('$', @$dates_exter[1]);                  
                    echo '<td><a href="'.@$link_sql[0].@$tables[@$link_sql[1]].'">'.$dates_exter[0].'</a></td>';  

                }
            }
            echo '</tr>';
        }
        
    }

    function crpmInsertDb($name, $id_page, $type_page){
        $insert = $this->conect()->prepare("INSERT INTO crpm_pages (name_page, id_page, type_page) VALUES (:name, :id_page, :type_page)");

        $query = "SELECT * FROM `crpm_pages` WHERE `id_page` LIKE '$id_page'";
        $result = $this->conect()->query($query)->fetchAll();

        if(count($result) < 1){
            $insert->execute(array(
                ':name' => $name,
                ':id_page' => $id_page,
                ':type_page' => $type_page
            ));
        }
    }

    function crpmSelectDb($table, $col, $date){
        
        $sql = $this->conect()->prepare("SELECT * FROM `$table` WHERE `$col` LIKE '$date'");
        $sql->execute();
        $sql_page = $sql->fetchAll();

        foreach($sql_page as $sql_pages){
           $sql_pages[$col];
        }
    }
    
}