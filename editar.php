<?php

$conexao = new mysqli("localhost", "root", "", "godfield");



if (!isset($_FILES['img'])) {
    $diretorio = "images/";
    $name = $_FILES['img']['name'];
    $info_name = explode(".", $name);
    $extensao = end($info_name);

    $file = uniqid() . "." . $extensao;

    if (move_uploaded_file($_FILES["img"]["tmp_name"], $diretorio . $file)) {
        echo "Upload realizado com sucesso.";

        $sql = "UPDATE artefato SET nome = '{$_POST['nome']}', img = '{$file}' WHERE id = '{$_POST['id']}'";
        $conexao->query($sql);
    }
} else {
    $sql = "UPDATE artefato SET nome = \"{$_POST['nome']}\" WHERE id = {$_POST['id']}";
    $conexao->query($sql);
}
header("location: artefatosList.php");

?>