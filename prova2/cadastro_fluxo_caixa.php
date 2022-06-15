<?php
    include ('conexao.php');


$data = $_POST['data'];
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];
$historico = $_POST['historico'];
$cheque = $_POST['cheque'];


echo "<br>";
echo "Data: " .$data ."<br>";
echo "Tipo: " .$tipo ."<br>";
echo "Valor: " .$valor ."<br>";
echo "Histórico: " .$historico . "<br>";
echo "Cheque: " .$cheque ."<br>";




$sql ="INSERT INTO fluxo_caixa ( data, valor, tipo , historico, cheque)
        VALUES('".$data. "','".$valor."','".$tipo."', '".$historico."', '".$cheque."')";

        $result = mysqli_query($con, $sql);
        
        if($result)
            echo "Dados inseridos com sucesso";
            else
                echo "Erro ao inserir dados: ".mysqli_error($con);
?>
<br><br><a href="index.php">Voltar</a>
