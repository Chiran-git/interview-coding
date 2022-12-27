<?php

$array = [-7, 1, 5, 2, -4, 3, 0 ];
$length =  count($array);

for ($i = 1; $i < $length; $i++) {
    $leftSide = 0;
    $rightSide = 0;

    for ($j=$i-1; $j >= 0; $j--) {
        $leftSide += $array[$j];
    }

    for ($k = $i+1; $k < $length; $k++) {
        $rightSide += $array[$k];

        if ($leftSide == $rightSide) {
            echo $i;
            exit;
        }
    }
}