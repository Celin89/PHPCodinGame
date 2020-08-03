<?php
function calc($array, $n1, $n2){

 if ($n2 > count($array) || $n1 > $n2 || $n1 < 0){
     echo 'erreur';
 }
 else {
$somme=0;
for ($i=$n1 ; $i<=$n2 ; $i++)
{
    $somme = $somme + $array[$i];         
}
echo $somme;
}
}

$array = [0,1,2,3,4,5,3];
$n1 = 0;
$n2 = 8;
calc($array, $n1, $n2);
