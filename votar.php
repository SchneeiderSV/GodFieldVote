<?php 
session_start();
$conexao = new mysqli("localhost","root","","godfield");

$idArtefato = $_GET['id'];
$voto = $_GET['vote'];

$sql = "INSERT INTO usuario_artefato(usuarioID,artefatoID,voto) values({$_SESSION['id']},{$idArtefato},{$voto})";


$conexao->query($sql);



header("location: index.php");
?>