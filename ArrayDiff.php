<?php
// https://www.codewars.com/kata/523f5d21c841566fde000009
function arrayDiff($a, $b) {
    $r = array_diff($a, $b);
    $r = array_values($r);
    return $r;
}
