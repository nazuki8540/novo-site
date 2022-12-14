<?php 
require_once("../config/query.php");

$procuraUsuario = "SELECT * FROM sistema_usuarios WHERE nome_usuario = '".$_POST['email-username']."' AND password = '".$_POST['password']."'";

$sucesso = $conn->query($procuraUsuario);

if($row = $sucesso->fetch_assoc()){
    header("location: ../front/index.php?erro=3");
}else{
    header("location: ../front/login.php?erro=4");
}




?>