<?php
session_start();
include('conexao.php');
?>

<!DOCTYPE html>
<html>
  <head>
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style4.css">
    <title>Inserir Notícia</title>
  </head>
  <body>
    <h2>Olá!   <?php echo $_SESSION['email'];?>   </h2>
    <h1>Inserir Notícia</h1>
    <form method="post" action="processa-noticia.php">
      <label for="titulo">Título:</label>
      <input type="text" minlength="5" maxlength="15" id="titulo" name="titulo" required><br><br>
      
      <label for="conteudo">Texto:</label>
      <input type="text" id="conteudo" name="conteudo" required><br><br>

      <label for="conteudo">Subtexto:</label>
      <input type="text" minlength="10" maxlength="50" id="subtexto" name="subtexto" required><br><br>
      
      <label for="autor">Autor:</label>
      <input type="text" id="autor" name="autor" required><br><br>

      <label for="Arquivos">Foto da Noticia:</label>
      <input type="text" id="arquivo" name="arquivo" required><br><br>
      
      <input type="submit" value="enviar">
    </form>

    <script src="Js/script.js"></script>
  </body>
</html>
