<?php 

class Confirmacao {

    public $dsn;
    public $db_user;
    public $db_pass; 

    public function __construct(){
        $this->dsn = 'mysql:host=localhost;dbname=test;charset=utf8mb4';
        $this->db_user = 'root';
        $this->db_pass = '';
    }
    
    public function cadastrar($nome, $cpf_cnpj, $nascimento, $endereco, $cidade, $estado, $telefone, $email, $senha){
      try{
        $db = new PDO($this->dsn, $this->db_user, $this->db_pass);

            $query = $db->prepare('INSERT INTO registro (nome, cpf_cnpj, nascimento, endereco, cidade, estado, telefone, email, senha) VALUES (:nome, :cpf_cnpj, :nascimento, :endereco, :cidade, :estado, :telefone, :email, :senha)');
            $resultado = $query->execute([
                ':nome' => $nome,
                ':cpf_cnpj' => $cpf_cnpj,
                ':nascimento' => $nascimento,
                ':endereco' => $endereco,
                ':cidade' => $cidade,
                ':estado' => $estado,
                ':telefone' => $telefone,
                ':email' => $email,
                ':senha' => $senha
            ]);
            echo 'Usuario adicionado com sucesso!';
            ?><br><a href="usuario.php">Vá para a página de usuarios</a><?php
        
        
    }
    catch(PDOException $Exception){
        echo $Exception->getMessage();
    }
}
}
?>