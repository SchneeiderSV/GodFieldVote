<?php

$conexao = new mysqli("localhost","root","","godfield");

$artefatos_id = $_GET['id'];

$sql = "DELETE FROM artefato WHERE id={$artefatos_id}";

$conexao->query($sql);

header("location: artefatosList.php");


?>