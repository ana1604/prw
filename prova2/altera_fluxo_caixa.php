<?php //formulário que tem os dados do formulario do usuario
    include('conexao.php');
    $id = $_GET['id'];
    $sql='SELECT * FROM fluxo_caixa where id  ='.$id;
    $result = mysqli_query($con, $sql);
    $row=mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Agendamento</title>
</head>
<body>
    <h1>Cadastro de agendamento</h1>

    <div id="teste">
        <form method="post" action="altera_fluxo_caixa_exe.php" enctype="multipart/form-data">
            <fieldset>
            <legend>Cadastro</legend>
                <div class="form-item">
                    <label for="data">Data:</label>
                    <input type="text" id="data" name="data" placeholder="Digite a data" value="<?php echo $row['data'] ?>">
                </div>
                <div class="form-item">
                Tipo: <input type="radio" name="tipo" value="entrada">
                <label for="entrada">entrada</label>

                <input type="radio" name="tipo" value="saida">
                <label for="saida">saída</label>
                <?php //echo $row['tipo'] ?>
                </div>

                <div class="form-item">
                    <label for="valor">Valor:</label>
                    <input type="text" id="valor" name="valor" placeholder="Digite o valor" value="<?php echo $row['valor'] ?>">
                </div>
                <div class="form-item">
                    <label for="historico">Historico:</label>
                    <input type="text" id="historico" name="historico" placeholder="Digite o historico" value="<?php echo $row['historico'] ?>">
                </div>
                <div class="form-item">
                    <label for="cheque">Cheque:</label>
                    <select name="cheque" value=0 size=1>
                        <option>sim</option>
                        <option>nao</option>
                    </select><?php //echo $row['cheque'] ?>
                </div>
                
                <div class="form-item">
                    <input id="btn" type="submit" value="Enviar" >
                </div>
                <input name="id" type="hidden" value="<?php echo $row['id']?>">
            </fieldset>
        </form>

    </div>
    
</body>
</html>