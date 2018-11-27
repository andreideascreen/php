<?php

$conn = new mysqli("localhost", "root", "", "teste");

if ($conn->connect_error){
	echo "Error: ".$conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUE(?,?)");
$stmt->bind_param("ss", $login, $pass);

$login = "user3";
$pass = "123456";

$stmt->execute();

$login = "user4";
$pass = "54123";

$stmt->execute();

?>