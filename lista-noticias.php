

<?php
include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/noticiaslist.css"
  <title>Portal</title>
</head>
<body>
<?php
  // Buscar as notícias no banco de dados
$sql = "SELECT * FROM noticias";
$resultado = mysqli_query($conexao, $sql);

// Exibir as notícias em uma tabela HTML
echo "<table>";
echo "<tr><th>Título</th><th>Conteúdo</th><th>Autor</th><th>Imagem</th></tr>";
while ($noticia = mysqli_fetch_assoc($resultado)) {
  echo "<tr>";
  echo "<td>" . $noticia['titulo'] . "</td>";
  echo "<td>" . $noticia['conteudo'] . "</td>";
  echo "<td>" . $noticia['autor'] . "</td>";
  echo "<td><img src="  . $noticia['arquivo'] .   "></td>";
  echo "</tr>";
}
echo "</table>";

// Fechar a conexão com o banco de dados
mysqli_close($conexao);
?>
</body>
</html>
