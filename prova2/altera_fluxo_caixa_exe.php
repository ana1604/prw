<?php
    include('conexao.php');

    $id = $_POST['id'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];

    echo "<h1> Alteração de dados </h1>";
    echo "<p> Data: " . $data. "<p>";
    echo "<p> Tipo: " . $tipo . "<p>";
    echo "<p> Valor: " . $valor . "<p>";
    echo "<p> Historico: " . $historico . "<p>";
    echo "<p> cheque: " . $cheque . "<p>";
    echo "<p> id: " . $id . "<p>";



    $sql = "UPDATE fluxo_caixa SET
                
                data = '".$data."',
                tipo ='" . $tipo . "',
                valor='".$valor."',
                historico='".$historico."',
                cheque = '" . $cheque . "'
                WHERE id =".$id;
               


    $result = mysqli_query($con, $sql); //acessando o banco

    if($result)
        echo "Dados alterados com sucesso <br>";
    else
        echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";
?>
<a href="index.php"> Voltar </a>