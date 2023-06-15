<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location: formLogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria</title>
</head>
<body>
    <form method="post" action="adiciona.php">
        Título: <input type="text" name="titulo" required>
        Ano: <input type="number" name="ano" min="0" max="2023" required>
        Gênero:<select name="genero">
                    <option value="1">Terror</option>
                    <option value="2">Suspense</option>
                </select>
        Autores(as): <input type="text" name="autores" required>
        <input type="submit" name="botao" value="Cadastra">
    </form>
    <a href="index.php">Listar livros</a>
</body>
</html>




