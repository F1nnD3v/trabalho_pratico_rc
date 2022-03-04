<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header('index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        echo '<div class="navbar">;
                <h1> Bem vindo/a,'. $_SESSION['user'] . '</h1>
                <input type="button" name="submit" value="Login">
              </div>';
    ?>
    <div class="container">
        <h1 style="text-align: center;">Exercícios</h1>
        <ul id="exercicios">
            <li><a href="exercicio1.php">Exercício 1</a></li>
            <li><a href="exercicio2.php">Exercício 2</a></li>
            <li><a href="exercicio3.php">Exercício 3</a></li>
        </ul>
    </div>
</body>
</html>
