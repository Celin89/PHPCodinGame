<?php

function calc($array, $n1, $n2)
{

    if ( $n2 <= count($array) && $n1 <= $n2 && $n1 >= 0)
    {
        return array_sum($array);
    }
    
}







