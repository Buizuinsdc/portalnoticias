<?php
include('conexao.php');

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
