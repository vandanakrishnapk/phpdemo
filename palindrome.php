<?php

$n=131;
$original =$n;
$reversed = 0;
    while ($n!=0) {
        $remainder = $n % 10;
        $reversed = $reversed * 10 + $remainder;
        $n =$n/ 10;
    }

    // palindrome if orignal and reversed are equal
    if ($original == $reversed)
    {
        echo "$original is palindrom";
    }
       
    else
    {
        echo "$original is not a palindrome";
    }
    

?>