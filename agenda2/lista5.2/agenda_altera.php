<?php //formulário que tem os dados do formulario do usuario
    include('conexao.php');
    $id_agenda=$_GET['id_agenda'];
    $sql='SELECT * FROM agenda where id_agenda ='.$id_agenda;
    $result = mysqli_query($con, $sql);
    $row=mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de agendamento</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Cadastro de agendamento</h1>
    <?php 
        echo "<img class='center' src='data:image/jpeg;base64,".base64_encode( $row["foto_blob"] )."' align='center' width='150' height='150'/>"; 
    ?>  
    <div id="teste">
        <form method="post" action="agenda_altera_exe.php" enctype="multipart/form-data">
            <fieldset>
            <legend>Cadastro</legend>
                <div class="form-item">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite o nome" value="<?php echo $row['nome'] ?>">
                </div>
                <div>
                <input type="file" id="foto" name="foto" accept="image/*"/>
                </div>
                <div class="form-item">
                    <label for="apelido">Apelido:</label>
                    <input type="text" id="apelido" name="apelido" placeholder="Digite o apelido" value="<?php echo $row['apelido'] ?>">
                </div>
                <div class="form-item">
                    <label for="endereco">Endereço:</label>
                    <input type="text" id="endereco" name="endereco" placeholder="Digite o endereço" value="<?php echo $row['endereco'] ?>">
                </div>
                <div class="form-item">
                    <label for="bairro">Bairro:</label>
                    <input type="text" id="bairro" name="bairro" placeholder="Digite o bairro" value="<?php echo $row['bairro'] ?>">
                </div>
                <div class="form-item">
                    <label for="cidade">Cidade:</label>
                    <input type="text" id="cidade" name="cidade" placeholder="Digite a cidade" value="<?php echo $row['cidade'] ?>">
                </div>
                <div class="form-item">
                    <label for="estado">Estado:</label>
                    <input type="text" id="estado" name="estado" placeholder="Digite o estado" value="<?php echo $row['estado'] ?>">
                </div>
                <div class="form-item">
                    <label for="telefone">Telefone:</label>
                    <input type="text" id="telefone" name="telefone" placeholder="Digite o telefone" value="<?php echo $row['telefone'] ?>">
                </div>
                <div class="form-item">
                    <label for="celular">Celular:</label>
                    <input type="text" id="celular" name="celular" placeholder="Digite o celular" value="<?php echo $row['celular'] ?>">
                </div>
                <div class="form-item">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="...@gmail.com" value="<?php echo $row['email'] ?>">
                </div>
                <div class="form-item">
                    <input id="btn" type="submit" value="Enviar" >
                </div>
                <input name="id_agenda" type="hidden" value="<?php echo $row['id_agenda']?>">
            </fieldset>
        </form>
    </div>
</body>
</html>