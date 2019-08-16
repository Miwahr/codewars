<?php
// https://www.codewars.com/kata/57feb00f08d102352400026e
function flap_display($lines, $rotors) {
    $alph = "ABCDEFGHIJKLMNOPQRSTUVWXYZ ?!@#&()|<>.:=-+*/0123456789";
    $arres = [];
    for ($i = 0; $i < count($lines); $i++) {
        $res = "";
        $move = 0;
        for ($j = 0; $j < strlen($lines[$i]); $j++) {
            $move += $rotors[$i][$j];
            $pos = strpos($alph, $lines[$i][$j]) + $move;
            while($pos>=54 or $pos<0){
            $pos = ($pos>=54) ? $pos-54 : $pos;
            $pos = ($pos<0) ? $pos+54 : $pos;
            }
            $res.=$alph[$pos];
        }
        $arres[]=$res;
    }
    return $arres;
}
