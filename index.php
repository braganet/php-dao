<?php

require_once ('config.php');

#$sql      = new Sql();
#$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//Carrega 1 usuário
#$user = new Usuario();
#$user->loadById(4);

//Carrega lista de usuários
#$lista = Usuario::getList();

//Carrega lista de usuários
#$search = Usuario::search("jo");

//Carrega um usuários usando um login e senha
#$usuario = new Usuario();
#$usuario->login("jose", "123456789");

//insert new user
#$aluno = new Usuario();
#$aluno->setDeslogin("AdãoBraga");
#$aluno->setDessenha("Vlado");
#$aluno->insert();

$usuario = new Usuario();
$usuario->loadById(20);
$usuario->update("Ox", "12345");

echo $usuario;