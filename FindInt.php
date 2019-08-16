<?php
// https://www.codewars.com/kata/5526fc09a1bbd946250002dc
function find($int) {
    $r = abs($int[0])%2 + abs($int[1])%2 + abs($int[2])%2;
    switch ($r){
    case 2:
        $r = 0;
    case 1:
        for ($i = 0; $i < 3; $i++) {
            if (abs($int[$i])%2 == $r) return $int[$i];
        }
    case 3:
        $r = 0;
        break;
    case 0:
        $r = 1;
        break;
    }
    for ($i = 3; $i < count($int); $i++) {
        if (abs($int[$i])%2 == $r) return $int[$i];
    }
    
}
