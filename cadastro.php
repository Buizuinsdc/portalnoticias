<?php 
session_start();
include('conexao.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Cadastro de Usuário</title>
</head>
<body>
  <h1>Cadastro de Usuário</h1>
  <form method="post" action="processa-cadastro.php">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome"><br><br>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email"><br><br>

    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha"><br><br>

    <input type="submit" value="Cadastrar">
  </form>
</body>
</html>