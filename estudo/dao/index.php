<?php
require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT *FROM tb_usuarios");

echo json_encode($usuarios);*/

$user2 = new Usuario();
$user2->loadbyID(3);
echo $user2

?>