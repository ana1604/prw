<?php
    include('conexao.php');
    $sql = 'SELECT * FROM fluxo_caixa';
    //retorna todos os dados para consulta
    $result = mysqli_query($con, $sql);
    
    //retorna a primeira linha
    //$row = mysqli_fetch_array($result);
    //print_r($row);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem fluxo de caixa</title>
</head>
<body>
    <h1>Listagem de Fluxo de Caixa  </h1>
    <table align="center" border="1" width=500>
       <tr>
           <th>Codigo</th>
           <th>Data</th>
           <th>Tipo</th>
           <th>Valor</th>
           <th>Historico</th>
           <th>Cheque</th>
           <th>Excluir</th>
           <th><a href="index.php">voltar</a></th>
       </tr>
       

       <?php
        while($row = mysqli_fetch_array($result))
         {
             echo "<tr>";
             echo"<td>". $row['id'] . "</td>";
             echo"<td>". $row['data'] . "</td>";
             echo"<td>". $row['tipo'] . "</td>";
             echo"<td>". $row['valor'] . "</td>";
             echo "<td><a href='altera_fluxo_caixa.php?id=".$row['id']."'>" .$row['historico']. "</a></td>";
             echo"<td>". $row['cheque'] . "</td>";
             
             echo "<td><a href='excluir_fluxo_caixa.php?id=".$row['id']."'>Excluir</a></td>";  
             echo"</tr>";
            
         }
          
       ?>

    </table>
</body>
</html>