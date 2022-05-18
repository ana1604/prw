<?php
    include('conexao.php');
    $sql = 'SELECT * FROM agenda';
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
    <title> Listagem Agenda </title>
</head>
<body>
    <h1>Listagem de Agenda  </h1>
    <table align="center" border="1" width=500>
       <tr>
           <th>Codigo</th>
           <th>Nome</th>
           <th>E-mail</th>
           <th>Telefone</th>
           <th>Apelido</th>
           <th>Bairro</th>
           <th>Cidade</th>
           <th>Estado</th>
           <th>Endereço</th>
           <th>celular</th>
           
       </tr>
       
       <?php
         while($row = mysqli_fetch_array($result))
         {
             echo "<tr>";
             echo"<td>". $row['id_agenda'] . "</td>";
             echo "<td><a href='agenda_altera.php?id_agenda=".$row['id_agenda']."'>" .$row['nome']. "</a></td>";
             echo"<td>". $row['email'] . "</td>";
             echo"<td>". $row['telefone'] . "</td>";
             echo"<td>". $row['apelido'] . "</td>";
             echo"<td>". $row['bairro'] . "</td>";
             echo"<td>". $row['cidade'] . "</td>";
             echo"<td>". $row['estado'] . "</td>";
             echo"<td>". $row['endereco'] . "</td>";
             echo"<td>". $row['celular'] . "</td>";
             echo "<td>" .$row['dt_cadastro']. "</td>";
             echo "<td><a href='excluir_agenda.php?id_agenda=".$row['id_agenda']."'>Excluir</a></td>";  
             echo"</tr>";
         }
          
       ?>
    </table>
    
</body>
</html>