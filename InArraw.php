<?php
// https://www.codewars.com/kata/which-are-in/php
function inArray($a1, $a2) {
    $r = [];
    foreach ($a1 as $a){
        foreach ($a2 as $b) {
            if (strstr($b, $a) and !in_array($a, $r)){
                $r[]=$a;
                break;
            }
        }
    }
    sort($r);
    return $r;
}
$a2 = ["lively", "alive", "harp", "sharp", "armstrong"];
$a1 = ["live", "strong", "arp"];
print_r(inArray($a1, $a2));