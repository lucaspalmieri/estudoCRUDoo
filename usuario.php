<?php

$dsn = 'mysql:host=localhost;dbname=test;charset=utf8mb4';
$db_user = 'root';
$db_pass = ''; 

$db = new PDO($dsn, $db_user, $db_pass);
$consulta = $db->query('SELECT * from registro');
$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);


foreach ($resultado as $key => $valor) {
        $identificacao = $valor['id'];
        
        echo $valor['nome'];echo '&nbsp;'?><a href="atualizar.php?id=<?php echo $identificacao;?>">Editar</a> <a href="deletar.php?id=<?php echo $identificacao;?>">Deletar</a> <br><?php
}

?>

