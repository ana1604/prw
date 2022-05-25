<?php
    include('conexao.php');
    $sql = 'SELECT * FROM usuario';
    //retorna todos os dados da consulta
    $result = mysqli_query($con, $sql);
    //retorna a primeira linha
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Listagem de usuários </title>
</head>
<body>
    <h1>Listagem de usuários </h1>
    <table align="center" border="1" width=500>
       <tr>
           <th>Código</th>
           <th>Nome</th>
           <th>Foto</th>
           <th>E-mail</th>
           <th>Telefone</th>
       </tr>
       
       <?php
         while($row = mysqli_fetch_array($result))
         {
             echo "<tr>";
             echo"<td>". $row['id_usuario'] . "</td>";
             echo"<td> <a href= 'altera_usuario.php?id_usuario=".$row['id_usuario']."'>". $row['nome_usuario'] . "</a></td>";
             echo "<td><img src='data:image/jpeg;base64,".base64_encode( $row["foto_blob"] )."' width='150' height='150'/></td>";
             echo"<td>". $row['email_usuario'] . "</td>";
             echo"<td>". $row['telefone_usuario'] . "</td>";
             echo "<td><a href='excluir_usuario.php?id_usuario=".$row['id_usuario']."'>Excluir</a></td>";
             echo"</tr>";
         }
          
       ?>
    </table>
    
</body>
</html>
