<?php 
$server = "localhost";
$usuario = "root";
$senha = "";
$banco = "loja_de_games";

$conexao = new mysqli ($server,$usuario,$senha,$banco);
$id = $_POST['id'];

$selVend = "SELECT * FROM vendedores WHERE ID_Vendedor='$id'";
$resVend = $conexao->query($selVend);

if($resVend->num_rows>0){
    while($vend = mysqli_fetch_assoc($resVend)){
        $nome = $vend['Nome'];
        $email = $vend['Email'];
        $tel = $vend['Telefone'];
        $sexo = $vend['Sexo'];
        $data = $vend['Data_Nascimento'];
        $cidade = $vend['Cidade'];
        $estado = $vend['Estado'];
        $endereco = $vend['Endereco'];
    }
}

/*$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['telefone'];
$sexo = $_POST['genero'];
$data = $_POST['data_nascimento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereco = $_POST['endereco']; */

//$editar = "UPDATE vendedores SET Nome='$nome', Email='$email', Telefone='$tel', Sexo='$sexo', Data_Nascimento = '$data', Cidade = '$cidade', Estado = '$estado', Endereco = '$endereco' WHERE ID_Vendedor= '$id' ";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css">
    <link rel="icon" type="image" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRDu6ge3vNBA5DFbKO34x5ObKGf29cyzqPOw&usqp=CAU">
    
    <title>Atualização de dados - Vendedores </title>
</head>
<body>
   <div class="box">
    <form action="saveEditVend.php" method="post">
     <fieldset>
        <legend><b>Atualização de dados - Vendedores </b></legend>
       <br>

    
    <div class="inputBox">
        <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
        <label for="nome" class="lableInput">Nome Completo</label>
    </div>
    <br>
    <br>

    
    <div class="inputBox">
        <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email ?>" required>
        <label for="nome" class="lableInput">Email</label>
    </div>
    <br>
    <br>

   
    <div class="inputBox">
        <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $tel ?>" required>
        <label for="nome" class="lableInput">Telefone</label>
    </div>
    <br>
    


    <p>Sexo</p>


    <input type="radio" id="feminino" name="genero" value="Feminino" <?php echo ($sexo == 'feminino')? 'checked' : ''?> required>
    <label for="feminino">Feminino</label>
    <br>

    <input type="radio" id="masculino" name="genero" value="Masculino" <?php echo ($sexo == 'masculino')? 'checked' : ''?> required>
    <label for="masculino">Masculino</label>
    <br>


    <input type="radio" id="outro" name="genero" value="Outro" <?php echo ($sexo == 'outro')? 'checked' : ''?> required>
    <label for="outro">Outros</label>
    <br>
    <br>   



    <label for="data_nascimento"><b>Data de Nascimento</b> </label>
    <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data ?>" required>
   
    <br>
    <br>


    <div class="inputBox">
        <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $cidade ?>" required>
        <label for="cidade" class="lableInput">Cidade</label>
    </div>
    <br>
    <br>


    <div class="inputBox">
        <input type="text" name="estado" id="estado" class="inputUser" value="<?php echo $estado ?>" required>
        <label for="estado" class="lableInput">Estado</label>
    </div>
    <br>
    <br>

 <div class="inputBox">
        <input type="text" name="endereco" id="endereco" class="inputUser" value="<?php echo $endereco ?>" required>
        <label for="endereco" class="lableInput">Endereço</label>
        </div>
    <br>
    <br>

    <input type="hidden" name="id" value="<?php echo $id?>">
    <a href="index.html"><input type="submit" name="update" id="update" value="ENVIAR"></a>
        
        </fieldset>   
    </form>
   </div> 
</body>
</html>