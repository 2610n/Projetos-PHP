<?php
$host="127.0.0.1";
$user="root";
$senha="169811";
$bd="controle_financeiro";

$conexao=mysqli_connect($host,$user,$senha,$bd);

if(mysqli_connect_error($conexao)){
    echo "erro ao se conectar com o banco de dados";
 }



?>