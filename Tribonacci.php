<?php
// https://www.codewars.com/kata/556deca17c58da83c00002db
function tribonacci($s, $n) {
    if ($n <= 3) return array_slice($s, 0, $n);
    for ($i = 3; $i < $n; $i++) {
        //добавление элементов в массив
        $s[] = $s[$i-1] + $s[$i-2] + $s[$i-3];
    }
    return $s;
}


print_r(tribonacci([1,1,1],2));