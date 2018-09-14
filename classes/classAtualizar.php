<?php



class Atualizacao{
    
    public $dsn;
    public $db_user;
    public $db_pass; 

    public function __construct(){
        $this->dsn = 'mysql:host=localhost;dbname=test;charset=utf8mb4';
        $this->db_user = 'root';
        $this->db_pass = '';
    }
    
    public function atualizacao(){
        try{
            session_start();
            $db = new PDO($this->dsn, $this->db_user, $this->db_pass);
            if($_GET){
              $_SESSION['position'] = $_GET['id'];
            }

            if($_POST){
                $query = $db->prepare("UPDATE registro SET nome = :nome, cpf_cnpj = :cpf_cnpj, nascimento = :nascimento, endereco = :endereco, cidade = :cidade, estado = :estado, telefone = :telefone, email = :email, senha = :senha WHERE id = :id");
                $resultado = $query->execute([
                    ':id' => $_SESSION['position'],
                    ':nome' => $_POST['nome'],
                    ':cpf_cnpj' => $_POST['cpf_cnpj'],
                    ':nascimento' => $_POST['nascimento'],
                    ':endereco' => $_POST['endereco'],
                    ':cidade' => $_POST['cidade'],
                    ':estado' => $_POST['estado'],
                    ':telefone' => $_POST['telefone'],
                    ':email' => $_POST['email'],
                    ':senha' => $_POST['senha']
                ]);
                ?><script>alert('Usuario alterado com sucesso!')</script><?php
            }

        
        
    }

    catch(PDOException $Exception){
        echo $Exception->getMessage();
    }
}
}

?>