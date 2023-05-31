<?php
session_start();
include('conexao.php');
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
 <div class="card">
    <div class="image-container">
      <img src="img/undraw_News_re_6uub.png" alt="Imagem de fundo">
    </div>
    <div class="content-container">
      <div class="form-container">
        <h2>Login</h2>
        <?php
                if(isset($_SESSION['nao_autenticado']))
             {
                echo '<script>alert("Mensagem de alerta!");</script>';
              }
              ?>
        <form action="login.php" method="POST">
          <input type="text" name="email" placeholder="E-mail" required>
          <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form><br>
        <form action="cadastro.php">
         <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>

