<?php
  session_start();
  require_once "conexao.php";

  if(isset($_POST["btn_cadastro"])){

      $nome_usu=mysqli_escape_string($conexao,isset($_POST["nome"])?$_POST["nome"]:"sem nome");
      $senha_usu=mysqli_escape_string($conexao,isset($_POST["senha"])?$_POST["senha"]:"sem senha");
      $login_usu=mysqli_escape_string($conexao,isset($_POST["login"])?$_POST["login"]:"sem login");
      $senha_usu=md5($senha_usu);//criptografia de senha

      $consulta_usuario="SELECT *FROM usuario WHERE  login='$login_usu'";
      
       $executar_consulta=mysqli_query($conexao,$consulta_usuario);
       $linha=mysqli_num_rows($executar_consulta);
       if($linha >0){
            $_SESSION["mensagem"]="<p style='color:red'>este login já existe tente outro</p>";
            header("location:cadastro_usuario.php");

       }else{
                $_SESSION["mensagem"]="<p style='color:green'>Login cadastrado com sucesso!!!</p>";
                $inserir_dados="INSERT INTO usuario (nome,login,senha) values ('$nome_usu','$login_usu','$senha_usu')";
                mysqli_query($conexao,$inserir_dados);
                header("location:cadastro_usuario.php");
       }
  }
