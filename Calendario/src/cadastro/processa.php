<?php 
session_start();
include_once("conexao.php");


//captura valores do input
$nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
$user = mysqli_real_escape_string($conn, trim($_POST['user']));
$email = mysqli_real_escape_string($conn, trim($_POST['email']));
$senha = mysqli_real_escape_string($conn, trim(md5($_POST['senha'])));
$confirma = mysqli_real_escape_string($conn, trim(md5($_POST['confirma'])));

//Cadastra usuário
$sql = "INSERT INTO usuario(nome, usuario, email, senha) VALUES ('$nome', '$user', '$email', '$senha')";


$conn->query($sql);
//header('Location: sucesso.html');
$conn->close();
exit();
?>

