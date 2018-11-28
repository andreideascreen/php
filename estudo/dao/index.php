<?php
require_once("config.php");

// $sql = new Sql();
// $usuarios = $sql->select("SELECT *FROM tb_usuarios");
// echo json_encode($usuarios);


//Carrega somente um usuario
// $user2 = new Usuario();
// $user2->loadbyID(3);
// echo $user2

//Carrega uma lista de usuarios
// $lista = Usuario::getList();
// echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
// $search = Usuario::search("user");
// echo json_encode($search);

//Carrega um usuário usando o login e senha
// $usuario = new Usuario();
// $usuario->login("user2","123456");
// echo $usuario;

//Insere um novo usuário
// $aluno = new Usuario("aluno", "@lun0");
// $aluno->insert();
// echo $aluno;

//Atualiza um usuario
$usuario = new Usuario();
$usuario->loadByid(10);
$usuario->update("professor","asdfghjkl");
echo $usuario;

?>