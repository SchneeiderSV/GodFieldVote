<?php

$conexao = new mysqli("localhost", "root", "", "godfield");

header("location: index.php");

$diretorio = "images/";
$name = $_FILES['img']['name'];
$info_name = explode(".", $name);
$extensao = end($info_name);

$file = uniqid() . "." . $extensao;

if (move_uploaded_file($_FILES["img"]["tmp_name"], $diretorio . $file)) {
    echo "Upload realizado com sucesso.";

    $sql = "INSERT INTO artefato (nome, img) 
        VALUES ('{$_POST['nome']}','{$file}')";
    $conexao->query($sql);
} else {
    echo "Upload não foi realizado.";
}

?>