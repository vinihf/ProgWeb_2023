<?php

$conexao = new mysqli("localhost","root","","livraria");

$sql = "INSERT INTO livros (titulo,ano,genero,autores) 
VALUES ('{$_POST['titulo']}',{$_POST['ano']},{$_POST['genero']},'{$_POST['autores']}')";

$conexao->query($sql);

header("location: index.php");

?>