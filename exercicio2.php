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
    <title>Exercicio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2><a class="links" href="bemvindo.php">Página inicial</a></h2>
    <div class="form">
        <h1>Gerador de senhas</h1>
        <p style="white-space: nowrap">Senha gerada: <?php echo gerarSenha(); ?></p>
        <form action="" method="post">
            <input type="submit" value="Gerar senha" class="btnSubmit">
        </form>
    </div>
</body>
</html>

<?php
    function gerarSenha(){
        $password = '';
        $array = array('~','!','@','#','$','%','^','&','*','(',')','{','}','[',']',',','.','/','?','A','B','C','D','E','F','G','H','I','K','L','M','N','O','P','Q','R','S','T','V','X','Y','Z','1','2','3','4','5','6','7','8','9','0');
        for($i = 0; $i < 8; $i++){
            $password .= $array[rand(0, count($array))];
        }
        return $password;
    }
?>