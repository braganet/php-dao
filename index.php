<?php

require_once ('config.php');

#$sql      = new Sql();
#$usuarios = $sql->select("SELECT * FROM tb_usuarios");

$user = new Usuario();
$user->loadById(1);

echo $user;