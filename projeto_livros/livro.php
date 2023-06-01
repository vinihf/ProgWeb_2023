<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Livros</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

    <?php
        $mysqli = new mysqli("localhost", "root", "", "livraria");

        if ($mysqli->connect_errno) {
            echo "Falhou em conectar ao MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }

        $sql = "SELECT * FROM livros WHERE id = {$_GET['id']}";

        $retorno = $mysqli->execute_query($sql);
        
        $livro = $retorno->fetch_all(MYSQLI_ASSOC);

      
    ?>
    <div class='container'>
        <form action="cadastra.php" method="post">
            <?php
                echo "<h1>{$livro[0]['titulo']}</h1>";
            ?>
            
            <div class="grupo-entrada">
                <?php
                        echo "<div class='descricao'>Autores: {$livro[0]['autores']}</div>";
                        echo "<div class='descricao'>Ano: {$livro[0]['ano']}</div>";
                ?>
            </div>
            <div class="grupo-links">
                <a href='index.html' class="botao">Novo livro</a>
                <a href='lista.php' class="botao">Listar</a>
            </div>
        </form>
    </div>
</body>
</html>