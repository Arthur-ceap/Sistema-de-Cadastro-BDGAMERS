<!DOCTYPE html>
<html>
<head>
<style>
    table, th, td{
        border: 1px solid black;
    }
    h1{
        text-align: center;
        color: red;
        font-family: Arial, Helvetica, sans-serif;
    }
    td,th{
        font-family: Arial, Helvetica, sans-serif;
    }
    td{
        text-align: center;
    }
</style>
</head>
<body>
    <h1>View Clientes</h1>
<?php 
$server = "localhost";
$usuario = "root";
$senha = "";
$banco = "loja_de_games";

$conexao = new mysqli ($server,$usuario,$senha,$banco);

$sel = "SELECT * from clientes";
$res = $conexao->query($sel);

if($res->num_rows>0){
    echo "<table><tr><th>ID</th><th>Nome</th><th>Email</th><th>Telefone</th><th>Sexo</th><th>D.Nasc</th><th>Cidade</th><th>Estado</th><th>Endereço</th></tr>";

    while($row = $res->fetch_assoc()){
        echo "<tr><td>".$row["ID_Cliente"]."</td><td>".$row["Nome"]."</td><td>".$row["Email"]."</td><td>".$row["Telefone"]."</td><td>".$row["Sexo"]."</td><td>".$row["Data_Nascimento"]."</td><td>".$row["Cidade"]."</td><td>".$row["Estado"]."</td><td>".$row["Endereco"]."</td></tr>";
    }
    echo "</table>";
}else{
    echo "0 resultados";
}
$conexao->close();
?>

    <form action="editClientes.php" method="post">
        <fieldset class="ex">
            <legend><b>Atualização de dados - Clientes</b></legend>
            <div class="inputBox">
                <label for="endereco" class="lableInput">ID</label>
                <input type="text" name="id" id="id" class="inputUser" placeholder="Digite o seu ID" required>
            </div>

            <a href="index.html"><input type="submit" name="submit" id="submit" value="ENVIAR"></a>
        </fieldset>

    </form>

    <form action="delClientes.php" method="post">
        <fieldset class="ex">
            <legend><b>Exclusão de dados - Clientes</b></legend>
            <div class="inputBox">
                <label for="endereco" class="lableInput">ID</label>
                <input type="text" name="id" id="id" class="inputUser" placeholder="Digite o seu ID" required>
            </div>

            <a href="index.html"><input type="submit" name="submit" id="submit" value="ENVIAR"></a>
        </fieldset>

    </form>
</body>
</html>