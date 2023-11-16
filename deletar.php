<?php

$conexao = new mysqli("localhost","root","","godfield");
$artefatos_id = $_GET['id'];
$sql = "SELECT img FROM artefato where id = $artefatos_id";
$result = $conexao->query($sql);
$imgName = $result->fetch_assoc()['img'];

unlink("images/$imgName");

$sql = "DELETE FROM artefato WHERE id={$artefatos_id}";
$conexao->query($sql);

header("location: artefatosList.php");
 

?>