

<?php 
define('HOST', '127.0.0.1');
define('USUARIO', 	'root');
define('SENHA', '987449807');
define('DB', 'portalnoticias');

$conexao = mysqli_connect(HOST,USUARIO, SENHA, DB) or die('conexão não realizada! ');

$sql = "SELECT * FROM usuarios";
$result = $conexao->query($sql);

 ?>