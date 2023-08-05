<?php
$str = "This is String";
echo $str;
$len = strlen($str);
echo "<br> The length of this string is: " . $len . ". Thank you";
echo "<br> The number of words of this string is: " . str_word_count($str) . ". Thank you";
echo "<br> The reversed string is: " . strrev($str) . ". Thank you";
echo "<br> The search for is in this string is: " . strpos($str, "is") . ". Thank you";
echo "<br> The replaced string is: " . str_replace("is", "at", $str) . ". Thank you";
?>