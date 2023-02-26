<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
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
            <?php
            if(isset($_SESSION["mensagem"])){
                  echo $_SESSION["mensagem"];
                  unset($_SESSION["mesagem"]);
                  session_destroy();
            }
            ?>
                                <div id="titulo"><h3>Cadastro</h3></div>

                     <form action="validar_cadastro_usuario.php" method="post">
                        
                             <input type="text" name="nome" required placeholder="Nome"><br><br>
                           
                            <input type="text" name="login" required placeholder="Login"><br><br>

                            
                            <input type="password" name="senha" id="" required placeholder="Digite a senha"><br><br>
                            
                            <input type="password" name="senha2" id="" required placeholder="Digite novamente a senha"><br><br>
                            <input type="submit" value="Cadastrar" name="btn_cadastro" id="btn">


                     </form>
                     <a href="login.php">Login</a>
        </div>
        </div>
</body>
</html>