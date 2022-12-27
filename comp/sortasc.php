<?php
/**
 * Sort an array in ascending order
 */

$arr = [3,6,-2,0,1,8,6,4];
$count = count($arr);
$temp = 0;

 

for ($i=0; $i<$count; $i++) {
    for ($j=$i+1; $j<$count ;$j++) {

        if ($arr[$i] > $arr[$j]) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
        }
    }
}
print_r($arr);