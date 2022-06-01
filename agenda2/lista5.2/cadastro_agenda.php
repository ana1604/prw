<?php
include ('conexao.php');
// Upload da foto     
$fotoNome = $_FILES['foto']['name'];
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
// Select file type
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif");

// Check extension
if( in_array($imageFileType,$extensions_arr) ){        
    // Upload file
    if(move_uploaded_file($_FILES['foto']['tmp_name'],$target_dir.$fotoNome)){
        $fotoBlob = addslashes(file_get_contents($target_dir.$fotoNome));
    }
}

$nome = $_POST['nome_agenda'];
$apelido = $_POST['apelido_agenda'];
$endereco = $_POST['endereco_agenda'];
$bairro =  $_POST['bairro_agenda'];
$cidade = $_POST['cidade_agenda'];
$estado = $_POST['estado_agenda'];
$celular = $_POST['celular_agenda'];
$email = $_POST['email_agenda'];
$telefone = $_POST['telefone_agenda'];
$data = date('Y-m-d');

echo "<br>";
echo "Nome do usuário: " .$nome ."<br>";
echo "Apelido do usuário: " .$apelido ."<br>";
echo "Telefone do usuário: " .$telefone . "<br>";
echo "Endereço do usuario: " .$endereco ."<br>";
echo "Bairro: " .$bairro ."<br>";
echo "Cidade: " .$cidade ."<br>";
echo "Estado: " .$estado ."<br>";
echo "Celular: " .$celular ."<br>";
echo "Email: " .$email ."<br>";
echo "Data:" .$data."<br>";



$sql ="INSERT INTO agenda (nome,foto_blob,foto_nome, email, telefone, apelido, endereco, bairro, cidade, 
                            estado, celular, dt_cadastro)
        VALUES('".$nome. "','".$fotoBlob."', '".$fotoNome."','".$email."', '".$telefone."','".$apelido."', 
        '".$endereco."','".$bairro."', '".$cidade."','".$estado."','".$celular."','".$data."')";

        $result = mysqli_query($con, $sql);
        
        if($result)
            echo "Dados inseridos com sucesso";
            else
                echo "Erro ao inserir dados: ".mysqli_error($con);
?>
<br><br><a href="index.php">Voltar</a>