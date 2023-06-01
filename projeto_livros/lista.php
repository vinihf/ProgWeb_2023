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

        $sql = "SELECT id,titulo FROM livros";

        $retorno = $mysqli->execute_query($sql);
        
        $livros = $retorno->fetch_all(MYSQLI_ASSOC);

      
    ?>
    <div class='container'>
        <form action="cadastra.php" method="post">
            <h1>Lista de Livros</h1>
            <div class="grupo-entrada">
                <?php
                    foreach($livros as $livro){
                        echo "<a class='item' href='livro.php?id={$livro['id']}'>{$livro['titulo']}</a>";
                    } 
                ?>
            </div>
            <div class="grupo-links">
                <a href='index.html' class="botao">Novo livro</a>
            </div>
        </form>
    </div>
</body>
</html>