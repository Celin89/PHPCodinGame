<?php

function findSmallestInterval($numbers)
{
    rsort($numbers);
    $small = $numbers[0] - $numbers[1];
    for($i=0 ; $i<count($numbers) - 1; $i++){

        $diff=$numbers[$i]-$numbers[$i+1];

        if($diff < $small){
            $small= $diff;
        }      
     }
   return $small;
     
} 

$numbers = array(1,6,4,8,2);
findSmallestInterval($numbers);









