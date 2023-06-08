<?php
include('conexao.php');
session_start();

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select nome from usuarios where email = '{$email}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){

	$_SESSION['email'] = $email;
	header('location: lista-noticias.php');
	exit();
}else{
	header('Location: index.php');
	exit();
	}