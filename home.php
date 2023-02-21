<?php
session_start();

if(isset($_SESSION["id_usuario"])){
    echo $_SESSION["id_usuario"];
    echo $_SESSION["nome_usuario"];
}else{
    header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <a href="deslogar.php">Sair</a>
</head>
<body>
      
</body>
</html>