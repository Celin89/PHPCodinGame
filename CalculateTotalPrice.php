<?php

function calculateTotalPrice(array $price , $discount){

 $sum = 0;
 rsort($price);
 for($i=0; $i<count($price); $i++ )
     {
        $sum = $sum + $price[$i];
        $rem = $discount/100 ;

        $total= $sum - $rem*$price[0];
     }
     echo  $total;
}
 

$discount= 10;
$price= array(1,2,3,100,2,1);
calculateTotalPrice( $price , $discount);


