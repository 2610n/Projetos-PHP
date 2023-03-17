<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styleLogin.css">
    <title>Document</title>
</head>

<body>

    <div id="container">
        <div id="form">
        <div id="icon"><img src="CSS/login.png" alt=""></div>
            <?php
               if(isset($_SESSION["mensagem"])){
                  echo $_SESSION["mensagem"];
                  unset($_SESSION["mensagem"]);
                  session_destroy();
               }
            ?><br>
                
            <form action="processa_login.php" method="post" enctype="multipart/form-data">
              
 
                <input type="text" name="login" required placeholder="Login"><br><br>
               
                <input type="password" name="senha" required placeholder="Senha"><br><br>
                <input type="submit" value="Acessar" name="btn_login" id="btn"><br>
          
            </form>
            <label for=""><a href="cadastro_usuario.php">Crie uma conta</a></label>

        </div>
    </div>
</body>

</html>