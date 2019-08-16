<?php
// https://www.codewars.com/kata/52449b062fb80683ec000024
function generateHashtag($str) {
    $str = str_replace(" ", "", ucwords($str));
   if (strlen($str)>=140 or strlen($str)==0) return FALSE;
   $str = "#".$str;
   return $str;
}

echo generateHashtag(str_repeat("a", 140));