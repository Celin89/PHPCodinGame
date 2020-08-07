<?php

$numbers = array(-1,9,14,19,1);
findSmallestInterval($numbers);

function findSmallestInterval($numbers)
{
    rsort($numbers);
    $small=$numbers[0]-$numbers[1];
    for($i=0 ; $i<count($numbers)-1; $i++)
    {
        $diff=$numbers[$i]-$numbers[$i+1];
        if($diff < $small && 0 < $small)
        {
           $small= $diff;
        }      
    }
   return $small;    
} 










