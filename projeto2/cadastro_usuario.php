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
$nome = $_POST['nome_usuario'];
$email = $_POST['email_usuario'];
$telefone = $_POST['telefone_usuario'];

echo "<br>";
echo "Nome do usuário: " .$nome ."<br>";
echo "O email do usuário: " .$email ."<br>";
echo "O telefone do usuário: " .$telefone;

$sql = "INSERT INTO usuario (nome_usuario,email_usuario,telefone_usuario, foto_blob, foto_nome) 
	        VALUES ('".$nome."','".$email."','".$telefone."','".$fotoBlob."','".$fotoNome."')";

$result = mysqli_query($con, $sql);
        
        if($result)
            echo "Dados inseridos com sucesso";
            else
                echo "Erro ao inserir dados: ".mysqli_error($con);

?>