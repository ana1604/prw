<?php

    $salario = 500;
    

    if($salario<=300){

         $reajuste = ($salario * 0.5);
         $aumento = $salario + $reajuste;
        echo"Reajuste de 50% é igual: ".$aumento;

        
    }
    if($salario>300){

        $reajuste2 = ($salario * 0.03);
        $aumento2 = $salario + $reajuste2;
        echo"Reajuste de 30% é igual:".$aumento2;

    }




?>