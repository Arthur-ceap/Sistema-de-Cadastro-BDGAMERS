<?php 
$server = "localhost";
$usuario = "root";
$senha = "";
$banco = "loja_de_games";

$conexao = new mysqli ($server,$usuario,$senha,$banco);

$id=$_POST['id'];

$del = "DELETE FROM clientes WHERE ID_Cliente = '$id'";

if (mysqli_query($conexao, $del)) {
    echo "<p>Dados excluídos com sucesso</p>
    <a href='verClientes.php'>Ver os outros clientes</a>";
  } else {
    echo "Erro ao excluir os dados: " . mysqli_error($conexao);
  }
  
  mysqli_close($conexao);
?>  