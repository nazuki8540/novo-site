<?php 
require_once('../databases/database.php');

$usuarioJaCadastrado = "SELECT * FROM sistema_usuarios WHERE nome_usuario = '".$_POST['nomeUsuario']."' ";

$sucesso = $conn->query($usuarioJaCadastrado);

if($row = $sucesso->fetch_assoc()){
    header('location: ../registro.php?err=1');
}else{
    header('location: ../front/index.php');
}

$emailJaCadastrado = "SELECT * FROM sistema_usuarios WHERE email = '".$_POST['email']."' ";

$sucess = $conn->query($emailJaCadastrado);

if($row2 = $sucess->fetch_assoc()){
    header('location: ../registro.php?err=2');
}else{
    header('location: ../front/index.php');
}

$inserindoUsuario = "INSERT INTO sistema_usuarios (nome_usuario,email,password) VALUES 
(
    '".$_POST['nomeUsuario']."',
    '".$_POST['email']."',
    '".$_POST['password']."')";

$tudoCerto = $conn->query($inserindoUsuario);

if($tudoCerto != false){
    header('location: ../front/registroSucess.php');
    
}else{
    echo 'deu ruim';
}


?>