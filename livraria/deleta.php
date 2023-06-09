<?php
    $conexao = new mysqli("localhost","root","","livraria");

    $sql = "DELETE FROM livros WHERE id = {$_GET['id']}";

    $conexao->query($sql);

    header("location: index.php");

?>