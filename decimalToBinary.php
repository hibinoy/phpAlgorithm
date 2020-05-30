<?php

$binary = null;
$rel    = [];

echo "10進数を入力" . "\n" . "> ";
$input = (int) trim(fgets(STDIN));

if ($input >= 2) {
    while ($input >= 1) {
        $temp = $input % 2;
        array_unshift($rel, $temp);
        $input /= 2;
    }
    for ($i = 0; $i < count($rel); $i++) {
        $binary .= $rel[$i];
    }
} else {
    $binary = $input;
}
echo $binary . "\n";