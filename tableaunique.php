<?php

function filterDuplicates(array $data)
{

$filter = [];
$i = 0;

foreach($data as $value)
{
    $add = TRUE;

foreach($filter as $valeur)
{
if ($value == $valeur)
{
$add = FALSE;
}

}

if($add)
{
    $filter[$i]= $value ;
    $i++;
}
}

       return $filter ;
}

$tab= array(7,3,6,4,3,3,4,9);
filterDuplicates($tab);





