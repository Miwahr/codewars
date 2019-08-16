<?php
// https://www.codewars.com/kata/52de553ebb55d1fca3000371
function findMissing($l) {
    
    for ($i = 1; $i < count($l)-1; $i++) {
        $d1 = $l[$i]-$l[$i-1];
        $d2 = $l[$i+1]-$l[$i];
        if ($d1 !== $d2){
            $d = (abs($d1)<abs($d2)) ? $l[$i]+$d2/2 : $l[$i]-$d1/2;
            return $d;
        }
    }
    return $l[0];
}
