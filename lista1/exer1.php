<?php
    $soma=0;

    for($cont=0; $cont<100;$cont++)
    {

        if($cont%2 ==0) 
        {
            $soma = $cont+ $soma;

        }
    }
        echo "Soma dos numeros pares é igual a: " .$soma; 
        




?>