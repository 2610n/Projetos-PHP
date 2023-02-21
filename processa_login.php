<?php
session_start();
require_once "conexao.php";

if(isset($_POST["btn_login"])){
   $login=mysqli_escape_string($conexao,isset($_POST["login"])?$_POST["login"]:"sem login"); 
   $senha=mysqli_escape_string($conexao,isset($_POST["senha"])?$_POST["senha"]:"sem login");
   
   $consultar="SELECT *FROM USUARIO WHERE login ='$login' AND senha ='$senha'";
   $execultar_consulta=mysqli_query($conexao,$consultar);
   
   if(mysqli_num_rows($execultar_consulta)==1){
      

   }else{
      
    $_SESSION["mensagem"]="<p>Login ou senha incorreto</p>";
    header("location:login.php");

   }



}


?>