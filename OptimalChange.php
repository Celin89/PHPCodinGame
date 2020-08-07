<?php

class Change {
    public $coin2 =0;
    public $bill5 =0;
    public $bill10 =0;
}
 
function optimalChange ($s){
     
    if($s<2 or $s===3) return NULL;
     
    $bill10=intval($s/10);
    $s=$s%10;
    $bill5=intval($s/5);
    $s1=$s%5;
    $s2=$s%2;
    if($s2===0){
        $coin2=intval($s1/2);
    }
    else{
        $bill5=0;
        $coin2=intval($s/2);
    }
     
    return array("bill10"=>$bill10,"bill5"=>$bill5,"coin2"=>$coin2);
}
 
optimalChange(20);



