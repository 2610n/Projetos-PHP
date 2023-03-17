<?php
session_start();
require_once "conexao.php";

if(isset($_POST["btn_login"])){
   $login=mysqli_escape_string($conexao,isset($_POST["login"])?$_POST["login"]:"sem login"); 
   $senha=mysqli_escape_string($conexao,isset($_POST["senha"])?$_POST["senha"]:"sem login");
   $senha=md5($senha);
   
   $consultar="SELECT *FROM USUARIO WHERE login ='$login' AND senha ='$senha'";
   $execultar_consulta=mysqli_query($conexao,$consultar);
   
   if(mysqli_num_rows($execultar_consulta)==1){
      $resultado=mysqli_fetch_row($execultar_consulta);
      $_SESSION["id_usuario"]=$resultado[0];
      $_SESSION["nome_usuario"]=$resultado[1];

      header("location:home.php");

   }else{
      
    $_SESSION["mensagem"]="<p>Login ou senha incorreto</p>";
    header("location:login.php");

   }



}


?>