<?php

include('header.php');
$sql = "UPDATE usuario SET usuario.nome = '{$_POST['nome']}' WHERE usuario.id = {$_SESSION['id']}";
$conexao->query($sql);
$sql = "UPDATE usuario SET usuario.senha = '{$_POST['senha']}' WHERE usuario.id = {$_SESSION['id']}";
$conexao->query($sql);

header("location: formUserEdit.php");

?>