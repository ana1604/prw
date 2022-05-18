<?php
    include('conexao.php');
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $dt_cadastro = date("Y-m-d");

    echo "<h1> Alteração de dados </h1>";
    echo "<p> Nome: " . $nome . "<p>";
    echo "<p> Apelido: " . $apelido . "<p>";
    echo "<p> Endereço: " . $endereco . "<p>";
    echo "<p> Bairro: " . $bairro . "<p>";
    echo "<p> Cidade: " . $cidade . "<p>";
    echo "<p> Estado: " . $estado . "<p>";
    echo "<p> Telefone: " . $telefone . "<p>";
    echo "<p> Celular: " . $celular . "<p>";
    echo "<p> Email: " . $email . "<p>";
    echo "<p> id: " . $id_agenda . "<p>";

    $sql = "UPDATE agenda SET
        nome='".$nome."',
        apelido='".$apelido."', 
        endereco='".$endereco."',
        bairro='".$bairro."',
        cidade='".$cidade."',
        estado='".$estado."',
        telefone='".$telefone."',
        celular='".$celular."',
        email='".$email."'
        WHERE id_cliente=".$id_cliente; 

    $result = mysqli_query($con, $sql); //acessando o banco
    if($result)
        echo "Dados alterados com sucesso <br>";
    else
        echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";

?>
<a href="index.php"> Voltar </a>