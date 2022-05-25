<?php
  include('conexao.php');
  $id_usuario = $_POST['id_usuario'];
  $sql = 'SELECT * FROM usuario where id_usuario='.$id_usuario;
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html>
    <head>
        <title> EXERCICIO 1</title>
    </head>
    <body>
    <?php echo "<img class='center' src='data:image/jpeg;base64,".base64_encode( $row["foto_blob"] )."' align='center' width='150' height='150'/>"; ?>  
    <div id="teste">
        <form method="post" action="altera_usuario_exe.php" enctype='multipart/form-data'>
            <h2>CADASTRE-SE</h2>
            
                Digite seu nome: <input type="text" name="nome_usuario" value="<?php echo $row['nome_usuario']?> size="100" >
                <br>
                Digite seu email: <input type="text" name="email_usuario"  value="<?php echo $row['email_usuario']?> size="100">
                <br>
                Digite seu telefone: <input type="text" name="telefone_usuario" value="<?php echo $row['telefone_usuario']?> size="30" >
                <input type="file" id="foto" name="foto" accept="image/*"/>
                <input id="btn" type="submit" value="enviar">
                <a href='index.php'> Voltar</a>

                <input name="id_usuario" type="hidden" value="<?php echo $row['id_usuario']?>">

        </form>
    </body>
</html>