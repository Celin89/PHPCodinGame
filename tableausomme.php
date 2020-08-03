<?php

function calc($array, $n1, $n2)
{
    
    if ($n2 <= count($array) && $n1 <= $n2 && $n1 >= 0)
    {
        $somme = array_sum($array);
    }

    else {
        $somme = $n1+$n2 ;
    }

    echo $somme;

   
    
}

$array = [1, 2, 3];
$n1 = 0;
$n2 = 0;
calc($array, $n1, $n2);
