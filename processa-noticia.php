<?php
include('conexao.php');

// Obter os dados do formulário
$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];
$subtexto = $_POST['subtexto'];
$autor = $_POST['autor'];
$arquivo = $_POST['arquivo'];

// Inserir os dados no banco de dados
$sql = "INSERT INTO noticias (titulo, conteudo, autor, subtexto, arquivo) VALUES ('$titulo', '$conteudo', '$autor','$subtexto' ,'$arquivo')";

if (mysqli_query($conexao, $sql)) {
  echo "Notícia inserida com sucesso!";
  header('Location: lista-noticias.php');
  
} else {
  echo "Erro ao inserir notícia: " . mysqli_error($conexao);
}

// Fechar a conexão com o banco de dados
mysqli_close($conexao);
?>
