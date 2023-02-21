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
        <div class="container">
            <?php
            if(isset($_SESSION["mensagem"])){
                  echo $_SESSION["mensagem"];
                  unset($_SESSION["mesagem"]);
            }
            ?>
                                     
                     <form action="validar_cadastro_usuario.php" method="post">
                            <label for="">Nome</label><br>
                             <input type="text" name="nome"><br>
                            <label for="">Login</label><br>
                            <input type="text" name="login"><br>
                            <label for="">Senha</label><br>
                            <input type="password" name="senha" id=""><br>
                            <label for="">Confirmar senha</label><br>
                            <input type="password" name="senha2" id=""><br>
                            <input type="submit" value="Cadastrar" name="btn_cadastro">


                     </form>
                     <a href="login.php">Login</a>
        </div>
</body>
</html>