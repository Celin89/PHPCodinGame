<?php

function simple($mNbr)
{
    $nbr=(String)$mNbr;
    $cumul=$mNbr;
    for ($i=0;$i<strlen($nbr); $i++) $cumul+=substr($nbr,$i,1);
    
    return $cumul;

}

function computeJoinPoint($s1, $s2) 
{

    if($s1 <= 0 || $s2 <= 0 || $s1 >= 20000000 || $s2 >= 20000000)
    {
        return 0;
    }

    while($s1 != $s2)
    {
    if($s1 < $s2)
     {
         $s1 = simple($s1);
     }
     else 
      {
         $s2 = simple($s2);
      }
    }

     return $s1;
}

$s1=471;
$s2=480;
computeJoinPoint($s1, $s2); 
