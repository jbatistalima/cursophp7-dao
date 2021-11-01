<?php

require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("wi");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("Matuzalem", "123456");

//echo $usuario;

//Criando um novo usuário
//$aluno = new Usuario("aluno", "@aluno");

//$aluno->insert();

//echo $aluno;

$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("Wilson", "matuzalem");

echo $usuario;

?>