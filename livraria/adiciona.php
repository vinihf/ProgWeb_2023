<?php
session_start();
$conexao = new mysqli("localhost","root","","livraria");

$sql = "INSERT INTO livros (titulo,ano,genero,autores,idUsuario) 
VALUES ('{$_POST['titulo']}',{$_POST['ano']},{$_POST['genero']},'{$_POST['autores']}',{$_SESSION['id']})";

$conexao->query($sql);

header("location: index.php");

?>