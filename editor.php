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
      <input type="text" id="titulo" name="titulo"><br><br>
      
      <label for="conteudo">Texto:</label>
      <input type="text" id="conteudo" name="conteudo"><br><br>
      
      <label for="autor">Autor:</label>
      <input type="text" id="autor" name="autor"><br><br>

      <label for="Arquivos">Foto da Noticia:</label>
      <input type="text" id="arquivo" name="arquivo"><br><br>
      
      <input type="submit" value="enviar">
    </form>

    <script src="Js/script.js"></script>
  </body>
</html>
