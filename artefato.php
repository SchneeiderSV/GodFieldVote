<?php

$conexao = new mysqli("localhost","root","","godfield");

$sql = "INSERT INTO artefato (nome, img) 
VALUES ('{$_POST['nome']}','{$_POST['img']}')";

$conexao->query($sql);

header("location: index.php");

?>