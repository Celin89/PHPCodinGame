<?php

class Change {
    public $coin2 =0;
    public $bill5 =0;
    public $bill10 =0;
}

function optimalChange($s) 
{
    // exceptions
    if ($s <= 1 || $s === 3 || $s > 2 ** 31 - 1) {
        // should throw an exception or check if $m instanceof Change in the test code
        return null;
    }
    
    $lastNumber = (int)substr($s, -1);
    
    $firstPart = $s - $lastNumber;
    
    $change = new Change();
    
    $change->bill10 = $firstPart / 10;

    if ($lastNumber === 1) { 
        if ($firstPart >= 10) {
            $change->bill10--;
        }
        $change->bill5 = 1;
        $change->coin2 = 3;
    } else if ($lastNumber % 2 === 0) {
        // 2 | 4 | 6 | 8
        $change->coin2 = $lastNumber / 2;
    } else if ($lastNumber === 3) {
        if ($firstPart >= 10) {
            $change->bill10--;
        }
        $change->bill5 = 1;
        $change->coin2 = 4;
    } else {
        // 5 | 7 | 9
        $change->bill5 = 1;
        $change->coin2 = ($lastNumber - 5) / 2;
    }
    
    return $change;
}

var_dump(optimalChange(8));

?>