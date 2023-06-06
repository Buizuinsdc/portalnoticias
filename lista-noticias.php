<?php
include('conexao.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Página de Notícias</title>
  <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
  <header>
    <h1>Notícias</h1>
    <div class="botoes-topo">
      <a href="#" class="botao-cadastro">Cadastro</a>
      <a href="#" class="botao-login">Login</a>
    </div>
  </header>

  <div class="destaque">
    <h2>Notícia em Destaque</h2>
    <div class="card-destaque">
      <img src="caminho-da-imagem.jpg" alt="Imagem da Notícia">
      <div class="card-content">
        <h3>Título da Notícia</h3>
        <p>Conteúdo da notícia...</p>
        <p class="data">Publicado em: 01 de janeiro de 2023</p>
      </div>
    </div>
  </div>

  <div class="noticias">
    <h2>Outras Notícias</h2>
    <?php
    $sql = "SELECT * FROM noticias";
    $resultado = mysqli_query($conexao, $sql);

    while ($noticia = mysqli_fetch_assoc($resultado)) {
      echo "<div class='card-noticia'>";
      echo "<img src='" . $noticia['arquivo'] . "' alt='Imagem da Notícia'>";
      echo "<div class='card-content'>";
      echo "<h3>" . $noticia['titulo'] . "</h3>";
      echo "<p>" . $noticia['conteudo'] . "</p>";
      echo "<p class='data'>Publicado em: " . $noticia['data'] . "</p>";
      echo "</div>";
      echo "</div>";
    }

    mysqli_close($conexao);
    ?>
  </div>

  <footer>
    &copy; 2023 Notícias. Todos os direitos reservados.
  </footer>
</body>
</html>
