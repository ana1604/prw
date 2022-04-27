<?php

    include('conexao.php');
    $id_usuario = $_GET['id_usuario'];
    $sql = ' SELECT * FROM usuario where id_usuario ='. $id_usuario;
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html>
    <head>
        <title> EXERCICIO 1</title>
    </head>
    <body>
        <form method="GET" action="cadastro_usuario.php">
            <h2>CADASTRE-SE</h2>
            
                Digite seu nome: <input type="text" name="nome_usuario" value="<?php echo $row['nome_usuario']?> size="100" >
                <br>
                Digite seu email: <input type="text" name="email_usuario"  value="<?php echo $row['email_usuario']?> size="100">
                <br>
                Digite seu telefone: <input type="text" name="telefone_usuario" value="<?php echo $row['telefone_usuario']?> size="30" >
                <input type="submit" value="enviar">
        </form>
    </body>
</html>