<?php
    include 'classes/classDeletar.php';

    $deletar = new Deletar();
    $deletar->excluir();
    header('location: usuario.php');
?>

