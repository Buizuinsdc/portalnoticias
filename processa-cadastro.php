<?php
include('conexao.php');

// Obter os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);

// Inserir os dados no banco de dados
$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if (mysqli_query($conexao, $sql)) {
   echo '<script>alert("Conta criada com sucesso!");</script>';
  header('Location: login.php');
} else {
  echo "Erro ao cadastrar usuário: " . mysqli_error($conexao);
}

// Fechar a conexão com o banco de dados
mysqli_close($conexao);
?>
