<?php

class Deletar{

    public $dsn;
    public $db_user;
    public $db_pass; 
    
    public function __construct(){
        $this->dsn = 'mysql:host=localhost;dbname=test;charset=utf8mb4';
        $this->db_user = 'root';
        $this->db_pass = '';
    }
    
    public function excluir(){
        try{
            session_start();
            $db = new PDO($this->dsn, $this->db_user, $this->db_pass);
            if($_GET){
                $_SESSION['position'] = $_GET['id'];
                $query = $db->prepare("DELETE FROM registro WHERE id = :id");
                $resultado = $query->execute([
                    ':id' => $_GET['id']
                ]);
                ?><script>alert('Usuario deletado com sucesso!')</script><?php
                
            }
    
        
        
    }
    
    catch(PDOException $Exception){
        echo $Exception->getMessage();
    }
    }
    }



?>