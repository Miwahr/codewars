<?php
// https://www.codewars.com/kata/54ba84be607a92aa900000f1
function isIsogram($string) {
    $string = strtolower($string);
    $s = count_chars($string, 3);
    if (strlen($s) == strlen($string)) return true;
    return false;
}

echo isIsogram("isIsogram");