<?php 

//dados do servidor

$ipServidorSistema = "localhost";
$portaSistema = "3306";
$userSistema = "user";
$passwordSistema = "Kvothe1995@.";
$dbSistemaNome = "sistema_teste";


$conn = new mysqli($ipServidorSistema, $userSistema, $passwordSistema, $dbSistemaNome, $portaSistema);
	if ($conn->connect_error) {
		die("ERRO CONEXÂO SERVIDOR UNICO: " . $conn->connect_error);
	}
$conn->set_charset("utf8mb4");
?>