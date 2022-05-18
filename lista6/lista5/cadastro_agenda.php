<?php

include ('conexao.php');

$nome = $_GET['nome_agenda'];
$apelido = $_GET['apelido_agenda'];
$endereco = $_GET['endereco_agenda'];
$bairro =  $_GET['bairro_agenda'];
$cidade = $_GET['cidade_agenda'];
$estado = $_GET['estado_agenda'];
$celular = $_GET['celular_agenda'];
$email = $_GET['email_agenda'];
$telefone = $_GET['telefone_agenda'];
$data = date('Y-m-d');

echo "<br>";
echo "Nome do usuário: " .$nome ."<br>";
echo "Apelido do usuário: " .$apelido ."<br>";
echo "Telefone do usuário: " .$telefone;
echo "Endereço do usuario: " .$endereco ."<br>";
echo "Bairro: " .$bairro ."<br>";
echo "Cidade: " .$cidade ."<br>";
echo "Estado: " .$estado ."<br>";
echo "Celular: " .$celular ."<br>";
echo "Email: " .$email ."<br>";
echo "Data:" .$data."<br>";



$sql ="INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, celular, email, telefone, dt_cadastro)
values ('".$nome. "','".$email."', '".$telefone."','".$apelido."', '".$endereco."','".$bairro."', '".$cidade."','".$estado."','".$celular."','".$data."')";

echo $sql;


        $result = mysqli_query($con, $sql);
        
        if($result)
            echo "Dados inseridos com sucesso";
            else
                echo "Erro ao inserir dados: ".mysqli_error($con);

?>