<?php
function simple($mNbr)
{
    $nbr=(String)$mNbr;
    $cumul=$mNbr;
    for ($i=0;$i<strlen($nbr); $i++) $cumul+=substr($nbr, $i,1);
    return $cumul;
}

function computeJoinPoint($mS1,$mS2)
{
  $i=0;
 while($mS1!=$mS2 && $i<2000000)
     {
        $i++;
        $mS1=simple($mS1);
        $mS2=simple($mS2);
        return $mS1.'-'.$mS2 ;
     }
}

$mS1=471;
$mS2=480;
computeJoinPoint($mS1,$mS2);









