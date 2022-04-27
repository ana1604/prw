<?php

include ('conexao.php');

$nome = $_GET['nome_usuario'];
$email = $_GET['email_usuario'];
$telefone = $_GET['telefone_usuario'];

echo "<br>";
echo "Nome do usuário: " .$nome ."<br>";
echo "O email do usuário: " .$email ."<br>";
echo "O telefone do usuário: " .$telefone;

$sql = "INSERT INTO usuario (nome_usuario, email_usuario, telefone_usuario)
        values ('".$nome. "','".$email."', '".$telefone."')";

        $result = mysqli_query($con, $sql);
        
        if($result)
            echo "Dados inseridos com sucesso";
            else
                echo "Erro ao inserir dados: ".mysqli_error($con);

?>