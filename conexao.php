

<?php 
define('HOST', 'us-cdbr-east-06.cleardb.net');
define('USUARIO', 	'b572a9a8bf42ae');
define('SENHA', 'c6f63de5');
define('DB', 'heroku_38c9f5ae51df506');

$conexao = mysqli_connect(HOST,USUARIO, SENHA, DB) or die('conexão não realizada! ');

$sql = "SELECT * FROM usuarios";
$result = $conexao->query($sql);

 ?>