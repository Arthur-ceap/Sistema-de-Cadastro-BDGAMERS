
<?php
$server = "localhost";
$usuario = "root";
$senha = "";
$banco = "loja_de_games";

$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['telefone'];
$sexo = $_POST['genero'];
$data = $_POST['data_nascimento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereco = $_POST['endereco'];

$conexao = new mysqli ($server,$usuario,$senha,$banco);

$sql = "INSERT INTO clientes(Nome,Email,Telefone,Sexo,Data_Nascimento,Cidade,Estado,Endereco) VALUES ('$nome', '$email', '$tel','$sexo','$data','$cidade','$estado','$endereco')";

if (mysqli_query($conexao,$sql)){
    echo "<p>Dados cadastrados com sucesso $nome</p>
    <a href ='formularioClientes.html' target = '_blank'>Faça mais cadastros</a>
    <a href ='verClientes.php' target = '_blank'>Veja os outros clientes</a>";
}else{
    echo "<p>Erro ao cadastrar os dados</p>" . mysqli_error($conexao);
}
mysqli_close($conexao); 
?>