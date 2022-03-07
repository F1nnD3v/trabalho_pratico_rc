<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2><a class="links" href="bemvindo.php">Página inicial</a></h2>
    <div class="form">
        <form action="" method="post">
            <h1 style="min-width: 1rem; white-space: pre-wrap;">Gerador de números aleatórios</h1>
            <input name="numeroUm" type="text" class="inputs" placeholder="1º número">
            <input name="numeroDois" type="text" class="inputs" placeholder="2º número">
            <input  name="submit" type="submit" value="Gerar" class="btnSubmit">
            <div id="numerosGerados">

            </div>
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $numeroUm = intval($_POST['numeroUm']);
        $numeroDois = intval($_POST['numeroDois']);
        if(empty($numeroUm) || empty($numeroDois)){
            echo "Porfavor preencha todos os campos!";
            return;
        }
        if($numeroUm > $numeroDois){
            echo "O número um deve ser menor que o numero dois";
            return;
        }
        if($numeroUm < 0 || $numeroDois < 0){
            echo "Os números devem ser maiores que 0";
            return;
        }
        for($i = 0; $i<20; $i++){
            echo rand($numeroUm, $numeroDois) . '<br>';
        }
    }
?>