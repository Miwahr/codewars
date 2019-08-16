<?php
// https://www.codewars.com/kata/55aa075506463dac6600010d
function listSquared($m, $n) {
    $res = [];
    for ($i = $m; $i < $n; $i++) {
        $temp = 0;
        for ($j = 1;  $j<= $i/2; $j++) {
            $temp += ($i%$j == 0) ? $j*$j : 0;
        }
        $temp += $i*$i;
        if (fmod($temp**0.5, 1) == 0) $res[] = [$i, $temp];
    }
    return $res;
}

print_r(listSquared(2, 250));