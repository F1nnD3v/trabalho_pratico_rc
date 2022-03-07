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
    <title>Exercicio 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2><a class="links" href="bemvindo.php">Página inicial</a></h2>
    <div class="form">
        <form action="" method="POST">
            <h1 style="margin-bottom: 3rem; min-width: 15rem; white-space: nowrap">Maior e menor <br> de 10 números</h1>
            <input type="text" class="inputs" placeholder="Insira 10 numeros" name="numeros">
            <input type="submit" name="submit" class="btnSubmit" value="Enviar">
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        if(empty($_POST['numeros'])){
            echo '<span id="erro"> Tem de preencher a caixa de texto!</span>';
            return;
        }
        $numeros = explode(",",$_POST['numeros']);
        if(count($numeros) != 10){
            echo '<span id="erro"> So pode colocar 10 numeros!</span>';
            return;
        }
        $numeroMaior = intval(max($numeros));
        $numeroMenor = intval(min($numeros));
        
        echo '<div>
                <span>Número maior: '. $numeroMaior .'</span>
                <span>Número menor: '. $numeroMenor .'</span>
              </div>';
    }
?>