<?php 

$server = "localhost";
$usuario = "root";
$senha = "";
$banco = "loja_de_games";

$conexao = new mysqli ($server,$usuario,$senha,$banco);

$id = $_POST['id'];

$del = "DELETE FROM vendedores WHERE ID_Vendedor = '$id'";

if (mysqli_query($conexao, $del)) {
    echo "<p>Vendedor excluído com sucesso!</p>";
} else {
    echo "<p>Erro ao deletar os dados</p>" . mysqli_error($conexao);
}

mysqli_close($conexao);

?>