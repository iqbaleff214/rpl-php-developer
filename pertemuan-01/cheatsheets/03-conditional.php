<?php

$a = TRUE;
$b = FALSE;
$c = null;

// IF
if ($a) {
    echo 'NILAI TRUE' . PHP_EOL;
}

// IF ELSE
if ($a) {
    echo 'NILAI TRUE' . PHP_EOL;
} else {
    echo 'NILAI FALSE' . PHP_EOL;
}

// IF ELSE IF - NESTED
if ($a && $b) {
    echo '$a TRUE $b TRUE' . PHP_EOL;
} elseif ($a) {
    echo '$a TRUE' . PHP_EOL;
} else {
    if ($c === null) {
        echo '$c NULL' . PHP_EOL;
    } else {
        echo 'NO CONDITION' . PHP_EOL;
    }
}

// SWITCH
switch ($a) {
    case true:
        echo '$a TRUE' . PHP_EOL;
        break;
    case false:
        echo '$a FALSE' . PHP_EOL;
        break;
    
    default:
        echo '$a OTHER' . PHP_EOL;
        break;
}

// TERNARY
$d = $a === TRUE ? 'D' : 'd'; // $d = 'D'
$d = $a ? 'D' : 'd'; // $d = 'D'