<?php

    $conexao = new mysqli("localhost","root","","godfield");  
    $sql = "SELECT * FROM usuario WHERE email = '{$_POST['email']}' and senha = '{$_POST['senha']}'";
    $result = $conexao->query($sql);
    $user = $result->fetch_all(MYSQLI_ASSOC);

    if($user){
        header("location: formLogin.php");
    }else{
        session_start();
        $_SESSION['id'] = $user[0]['id'];
        $_SESSION['email'] =  $user[0]['email'];
        $_SESSION['isAdm'] = $user[0]['isAdm'];
        header("location: index.php");
    }

?>