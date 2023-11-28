<?php 
$server = "localhost";
$usuario = "root";
$senha = "";
$banco = "loja_de_games";

$conexao = new mysqli ($server,$usuario,$senha,$banco);
$id = $_POST['id'];

$sel = "SELECT * FROM clientes WHERE ID_Cliente='$id'";
$res = $conexao->query($sel);

if($res->num_rows>0){
    while($info = mysqli_fetch_assoc($res)){
        $nome = $info['Nome'];
        $email = $info['Email'];
        $tel = $info['Telefone'];
        $sexo = $info['Sexo'];
        $data = $info['Data_Nascimento'];
        $cidade = $info['Cidade'];
        $estado = $info['Estado'];
        $endereco = $info['Endereco'];
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formularioClientes.css">
    <link rel="icon" type="image" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRDu6ge3vNBA5DFbKO34x5ObKGf29cyzqPOw&usqp=CAU">
    
    <title>Atualização de dados - Cliente </title>
</head>
<body>
   <div class="box">
    <form action="saveEdit.php" method="post">
     <fieldset>
        <legend><b>Atualização de dados - Cliente </b></legend>
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


    <input type="radio" id="feminino" name="genero" value="Feminino" <?php echo ($sexo == 'Feminino')? 'checked' : ''?> required>
    <label for="feminino">Feminino</label>
    <br>

    <input type="radio" id="masculino" name="genero" value="Masculino" <?php echo ($sexo == 'Masculino')? 'checked' : ''?> required>
    <label for="masculino">Masculino</label>
    <br>


    <input type="radio" id="outro" name="genero" value="Outro" <?php echo ($sexo == 'Outro')? 'checked' : ''?> required>
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