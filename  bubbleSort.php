<?php

$temp  = 0;
$asc   = [];
$desc  = [];

for ($i = 0; $i < 10; $i++) {
    $asc[] = $desc[] = mt_rand(0, 100);
}

// 昇順
for ($i = 0; $i < count($asc); $i++) {
    for ($j = $i + 1; $j < count($asc); $j++) {
        if ($asc[$i] > $asc[$j]) {
            $temp = $asc[$i];
            $asc[$i] = $asc[$j];
            $asc[$j] = $temp;
        }
    }
}

// 降順
for ($i = 0; $i < count($desc); $i++) {
    for ($j = $i + 1; $j < count($desc); $j++) {
        if ($desc[$i] < $desc[$j]) {
            $temp = $desc[$i];
            $desc[$i] = $desc[$j];
            $desc[$j] = $temp;
        }
    }
}

var_export($asc);
var_export($desc);