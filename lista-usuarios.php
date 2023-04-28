<?php
include('conexao.php');

$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexao, $sql);
?>

<table>
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Email</th>
    
  </tr>
  
  <?php while($linha = mysqli_fetch_array($resultado)) { ?>
    <tr>
      <td><?php echo $linha['id']; ?></td>
      <td><?php echo $linha['nome']; ?></td>
      <td><?php echo $linha['email']; ?></td>
    </tr>
  <?php } ?>
</table>
