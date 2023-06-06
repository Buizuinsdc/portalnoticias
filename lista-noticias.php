<?php
include('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/noticiaslist.css">
  <title>Portal</title>
</head>
<body>
  <header>
    <h1>FICRNEWS</h1>
    <div class="buttons">
      <button class="rounded-button">Cadastre-se</button>
      <button class="rounded-button">Login</button>
    </div>
  </header>

  <?php
  // Buscar as notícias no banco de dados
  $sql = "SELECT * FROM noticias";
  $resultado = mysqli_query($conexao, $sql);
  ?>

  <table>
    <tr>
      <th>Título</th>
      <th>Conteúdo</th>
      <th>Autor</th>
      <th>Imagem</th>
    </tr>
    <?php
    $linha = 0;
    while ($noticia = mysqli_fetch_assoc($resultado)) {
      $linha++;
      $cor = $linha % 2 == 0 ? "#f9f9f9" : "#ebebeb";
      ?>
      <tr style="background-color: <?php echo $cor; ?>">
        <td><?php echo $noticia['titulo']; ?></td>
        <td><?php echo $noticia['conteudo']; ?></td>
        <td><?php echo $noticia['autor']; ?></td>
        <td><img src="<?php echo $noticia['arquivo']; ?>"></td>
      </tr>
    <?php } ?>
  </table>

  <?php
  // Fechar a conexão com o banco de dados
  mysqli_close($conexao);
  ?>
</body>
</html>
