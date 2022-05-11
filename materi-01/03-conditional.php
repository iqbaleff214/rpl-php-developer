<?php

$a = TRUE;
$b = FALSE;
$c = null;

// IF
if ($a) {
    echo 'NILAI TRUE';
}

// IF ELSE
if ($a) {
    echo 'NILAI TRUE';
} else {
    echo 'NILAI FALSE';
}

// IF ELSE IF - NESTED
if ($a && $b) {
    echo '$a TRUE $b TRUE';
} elseif ($a) {
    echo '$a TRUE';
} else {
    if ($c === null) {
        echo '$c NULL';
    } else {
        echo 'NO CONDITION';
    }
}

// SWITCH
switch ($a) {
    case true:
        echo '$a TRUE';
        break;
    case false:
        echo '$a FALSE';
        break;
    
    default:
        echo '$a OTHER';
        break;
}

// TERNARY
$d = $a === TRUE ? 'D' : 'd'; // $d = 'D'
$d = $a ? 'D' : 'd'; // $d = 'D'