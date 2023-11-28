<?php 
$server = "localhost";
$usuario = "root";
$senha = "";
$banco = "loja_de_games";

$conexao = new mysqli ($server,$usuario,$senha,$banco);

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $editar = "UPDATE clientes SET Nome = '$nome', Email = '$email', Telefone = '$tel', Sexo = '$sexo', Data_Nascimento = '$data', Cidade = '$cidade', Estado = '$estado', Endereco = '$endereco' WHERE ID_Cliente = '$id'";

    if(mysqli_query($conexao, $editar)){
        echo "<p>Dados atualizados com sucesso!</p>
        <a href = 'verClientes.php' target = '_blank'>Visualize os outros clientes</a>";
    }else{
        echo "<p>Erro ao atualizar os dados</p>" . mysqli_error($conexao);
    }
    mysqli_close($conexao);
}
?>