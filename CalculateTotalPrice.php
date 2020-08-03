<?php

function calculateTotalPrice(array $price , $discount){

    $sum = array_sum($price);
     
    $prod= (max($price)*$discount)/100 ;

    $total= $sum - $prod;

    echo  $total;
     


}

$discount= 25;
$price= array(1,2,3,4,2,1);
calculateTotalPrice( $price , $discount);
