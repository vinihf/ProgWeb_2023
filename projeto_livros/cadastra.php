<?php

$mysqli = new mysqli("localhost", "root", "", "livraria");

if ($mysqli->connect_errno) {
    echo "Falhou em conectar ao MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$sql = "INSERT INTO livros (titulo, ano, autores) values ('{$_POST['titulo']}',{$_POST['ano']},'{$_POST['autor']}')";

$return = $mysqli->execute_query($sql);

header("location:lista.php");