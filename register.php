<?php

$conexao = new mysqli("localhost","root","","godfield");

$sql = "INSERT INTO usuario (nome,email,senha) 
VALUES ('{$_POST['nome']}','{$_POST['email']}','{$_POST['senha']}')";

$conexao->query($sql);

header("location: formLogin.php");

?>