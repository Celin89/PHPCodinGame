<?php

$discount= 10;
$price= array(7,13.5,3,8,2,1);
calculateTotalPrice( $price , $discount);

function calculateTotalPrice(array $price , $discount){
   
 $sum = 0;
 rsort($price);
 $rem = $discount/100 ;
 for($i=0; $i<count($price); $i++ )
     {
        $sum = $sum + $price[$i];
        $total= $sum - $rem*$price[0];
     }
      return floor($total);
}


?>




