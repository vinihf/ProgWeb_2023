<?php

$conexao = new mysqli("localhost","root","","livraria");

$sql = "INSERT INTO usuarios (nome,login,senha) 
VALUES ('{$_POST['nome']}','{$_POST['login']}','{$_POST['senha']}')";

$conexao->query($sql);

header("location: index.php");

?>