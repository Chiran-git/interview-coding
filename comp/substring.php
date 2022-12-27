<?php

/**
 * find all palindrome substrings in a string
 */
function findAllPalindromeInSubstrings($input, $j, $k)
{
    $count = 0;
    while ($j >= 0 && $k < strlen($input)) {
    if ($input[$j] != $input[$k]) {
        break;
    }
    echo(substr($input,$j, $k + 1));
    echo ("\n");
    $count++;
    $j--;
    $k++;
  }
  return $count;
}

function findAllPalindromeSubstrings($input)
{
  $count = 0;
  for ($i=0; $i < strlen($input); $i++) {
    $count += findAllPalindromeInSubstrings($input, $i - 1, $i + 1);
    $count += findAllPalindromeInSubstrings($input, $i, $i + 1);
  }
  return $count;
}


$palindrome = "aabbbaa";

$palindrome_count = findAllPalindromeSubstrings($palindrome);
echo("Total palindrome substrings: $palindrome_count");

?>