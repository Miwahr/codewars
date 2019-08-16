<?php
// https://www.codewars.com/kata/585d7d5adb20cf33cb000235
function find_uniq($a) {
    sort($a);
    if ($a[0]==$a[1]) return array_pop($a);
    else return $a[0];
}

echo find_uniq([0, 0, -0.55, 0, 0]);