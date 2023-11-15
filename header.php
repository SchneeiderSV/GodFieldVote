<?php
session_start();
$conexao = new mysqli("localhost","root","","godfield");
if(!isset($_SESSION['id'])){
        header("location: formLogin.php");
}
?>
