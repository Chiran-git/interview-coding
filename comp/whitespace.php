<?php
/**
 * Remov all the whitespace from a string
 */
//output: "this string has lots of spaces";
$input = "  this                 string     has    lots    of spaces     ";

$explodedArray = explode(" ", $input);
$words  = [];

foreach ($explodedArray as $value) {
    if (strlen($value) > 0) {
        $words[] = $value;
    }
}
$finalString = '';
foreach ($words as $index => $word) {
    if ($index == 0) {
        $finalString .= $word;
    } else {
        $finalString .= ' ' . $word;
    }
}

echo $finalString;

?>
