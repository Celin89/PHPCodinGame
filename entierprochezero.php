<?php   

function computeClosestToZero(array $ts) {
  if (empty($ts)){
   return 0;
  }

  $temp=null;
  rsort($ts);
  foreach($ts as $key){
    if(is_null($temp)|| $temp>abs($key)){
      $temp!==$key ? $temp=$key :'';

    }
    
  }
  return $temp;

}
