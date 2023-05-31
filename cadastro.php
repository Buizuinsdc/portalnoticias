<php 
  session_start();
  include('conexao.php');
?>


<!DOCTYPE html>
<html>
<head>
  <title>Cadastro</title>
  <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
  <div class="card">
    <div class="content-container">
      <div class="form-container">
        <h2>Cadastro</h2>
        <form method="post" action="processa-cadastro.php">
          <input type="text" name="nome" placeholder="Nome de usuário" required>
          <input type="email" name="email" placeholder="E-mail do usuario" required>
          <input type="password" name="senha" placeholder="Senha" required>
          <button id="button" type="submit">Entrar</button>
        </form>
        <p>Ja tem uma conta? <a href="index.php">faça seu Login</a></p>
      </div>
    </div>
    <div class="image-container">
      <img src="img/undraw_News_re_6uub.png" alt="Imagem de fundo">
    </div>
  </div>
</body>
</html>
