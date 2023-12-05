<?php

$conexao = new mysqli("localhost", "root", "", "godfield");


//validação do email
$email = mysqli_real_escape_string($conexao, $_POST['email']);
if (empty($email)) {
    
    echo "<script>alert('Email é obrigatório.'); window.location.href='formRegister.php';</script>";
    exit;
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strpos($email, "@aluno.feliz.ifrs.edu.br") === false) {
    echo "<script>alert('Email inválido. Apenas emails @aluno.feliz.ifrs.edu.br são aceitos.'); window.location.href='formRegister.php';</script>";
    exit;
}
// validacao da senha
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
if (empty($senha)) {
    echo "<script>alert('Senha é obrigatória.'); window.location.href='formRegister.php';</script>";
    exit;
} else if (strlen($senha) < 5) {
    echo "<script>alert('Senha deve ter pelo menos 5 caracteres.'); window.location.href='formRegister.php';</script>";
    exit;
}

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if ($conexao->query($sql)) {
=
    header("location: formLogin.php");
} else {

    echo "Erro ao registrar usuário: " . $conexao->error;
}

$conexao->close();

?>