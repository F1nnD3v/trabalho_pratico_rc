<?php
    if(isset($_SESSION['logado']) && $_SESSION['logado'] == true){
        header('Location: index.php');
    }
    $erro = '';
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
    <div class="form">
        <b><h1 class="titulo">Login</h1></b>
        <form method="post" action="">
            <input type="text" name="utilizador" class="inputs" placeholder="Utilizador">
            <input type="password"  name="password" class="inputs" placeholder="Palavra-passe">
            <input type="submit" name="submit" class="btnSubmit" value="Login">
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        
        $utilizador = $_POST['utilizador'];
        $password = $_POST['password'];
     
        
        if(empty($utilizador) || empty($password)){
            $erro = 'Um ou mais campos vazios!';
            return;
        }
        if($utilizador != "admin" && $password != "123"){
            $erro = 'Utilizador ou palavra-passe errados!';
            return;
        }
        if($utilizador == "admin" && $password == "123"){
            header("Location: index.php");
            return;
        }
    }
        if(!empty($erro)){
            echo '<span id="erro"> '. $erro .' </span>';
        }
?>