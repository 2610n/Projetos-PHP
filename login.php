<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div id="container">
        <div id="form">
            <?php
               if(isset($_SESSION["mensagem"])){
                  echo $_SESSION["mensagem"];
                  unset($_SESSION["mensagem"]);
               }
            ?>

            <form action="processa_login.php" method="post" enctype="multipart/form-data">

                <label for="">Login</label><br>
                <input type="text" name="login"><br>
                <label for="">Senha</label><br>
                <input type="password" name="senha"><br>
                <input type="submit" value="Acessar" name="btn_login"><br>
          
            </form>

        </div>
    </div>
</body>

</html>