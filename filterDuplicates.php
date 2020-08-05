<?php

function doubons($data){

for($i=0;$i<count($data)-1;$i++){
for($j=$i+1;$j<count($data);$j++){
if($data[$i]==$data[$j])
$data[$j]="";
}
}

// On crée le tableau tab le tableau sans doublon
$j=0;
for($i=0;$i<count($data);$i++){
if($data[$i]!=""){
$tab[$j++]=$data[$i];
}
}

return $tab;
}

$tab= array(1,2,3,4,2,1);
doubons($tab);
 
?>

