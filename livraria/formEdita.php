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
    <?php

    $conexao = new mysqli("localhost","root","","livraria");

    $sql = "SELECT * from livros where id = {$_GET['id']}";

    $resultado = $conexao->query($sql);

    $livro = $resultado->fetch_all(MYSQLI_ASSOC);

    ?>


    <form method="post" action="edita.php">
        <?php
        echo "Título: <input type='text' name='titulo' value={$livro[0]['titulo']} required>";
        echo "Ano: <input type='number' name='ano' min='0' max='2023' value={$livro[0]['ano']} required>";
        echo "<input type='hidden' name='id' value={$livro[0]['id']}>";
        echo "Gênero: <select name='genero'>";
                    if($livro[0]['genero']==1){
                        echo "<option value='1' selected>Terror</option>";
                        echo "<option value='2'>Suspense</option>";
                    }else{
                        echo "<option value='1'>Terror</option>";
                        echo "<option value='2' selected>Suspense</option>";
                    }
        echo "</select>";
        
        echo "Autores(as): <input type='text' name='autores' value={$livro[0]['autores']} required>";
        echo "<input type='submit' name='botao' value='Editar'>";
        ?>
    </form>
    <a href="index.php">Listar livros</a>
</body>
</html>