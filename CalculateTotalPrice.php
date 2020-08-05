<?php

$discount= 10;
$price= array(7,13,3,8,2,1);
calculateTotalPrice( $price , $discount);

function calculateTotalPrice(array $price , $discount){
 $sum = 0;
 rsort($price);
 for($i=0; $i<count($price); $i++ )
     {
        $sum = $sum + $price[$i];
        $rem = $discount/100 ;

        $total= $sum - $rem*$price[0];
     }
     return  $total;
}
 
?>




