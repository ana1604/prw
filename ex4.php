<?php
    $n1 = 9;
    $n2 = 5;
    $n3 = 3;
//do maior pro menor 
    if( $n1 > $n2 && $n1> $n3)

        if($n2 > $n3)

            echo $n1, ', ', $n2, ', ', $n3; 

        else 

            echo $n1, ', ', $n3, ', ', $n2; 

    else if( $n2 > $n1 && $n2> $n3)
            if($n1 > $n3)
                echo $n2, ', ', $n1, ', ', $n3; 
            else
                echo $n2, ', ', $n3, ', ', $n1;
    else 
        if($n2 > $n1)

            echo $n3, ', ', $n2, ', ', $n1; 
        else 
            echo $n3, ', ', $n1, ', ', $n2; 
        
    
       



      
     
       



?>