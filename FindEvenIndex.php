<?php
// https://www.codewars.com/kata/5679aa472b8f57fb8c000047
function find_even_index($arr){
    $sum_l = 0;
    $sum_r = array_sum($arr)-$arr[0];
    if ($sum_l == $sum_r) return 0;
    for ($i = 0; $i < count($arr)-1; $i++) {
        $sum_l += $arr[$i];
        $sum_r -= $arr[$i+1];
        if ($sum_l == $sum_r) return $i+1;
    }
    return -1;
}
