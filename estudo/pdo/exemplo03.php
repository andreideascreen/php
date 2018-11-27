<?php
$conn = new PDO("mysql:dbname=teste;localhost", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUE(:LOGIN, :PASSWORD)");

$login = "jose";
$password = "123456";

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);


$stmt->execute();

echo "Inserido OK!";



?>