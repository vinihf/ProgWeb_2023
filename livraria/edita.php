<?php

$conexao = new mysqli("localhost","root","","livraria");

$sql = "UPDATE livros set titulo = '{$_POST['titulo']}',ano = {$_POST['ano']}, genero = {$_POST['genero']}, autores = '{$_POST['autores']}' where id = {$_POST['id']}";

echo $sql;

$conexao->query($sql);

header("location: index.php");

?>