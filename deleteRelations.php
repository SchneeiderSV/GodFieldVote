<?php

include("header.php");
$sql = "DELETE FROM usuario_artefato WHERE usuario_artefato.usuarioID = {$_SESSION['id']}";
$conexao->query($sql);

header("location: index.php");

?>