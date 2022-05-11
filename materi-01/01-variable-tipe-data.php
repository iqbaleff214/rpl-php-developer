<?php

// VARIABLE
$variable = 'OK';
// Check is variable exist
isset($variable); // true
isset($variabel); // false
// Delete variable
unset($variable);

// NUMBER
// OVERFLOW: 2147483647 (32bit), 9223372036854775807 (64bit)
$decimal = 1234;
$octal = 0123;
$hexa = 0x1A;
$binary = 0b11111111;
$underscore = 1_000_000;
$float = 1.234;
$float_e_plus = 1.2e3;
$float_e_minus = 7e-3;
$float_underscore = 1_234.4321;

// BOOLEAN
$bool = true;
$bool = TRUE;
$bool = True;
$bool = false;

// STRING
$string1 = 'Rekayasa';
$string2 = "Perangkat Lunak";
$string3 = <<<RPL
Pembelajaran baru
RPL;
// MANIPULATION
$string[0]; // R
$string[1]; // e
$string1 . $string2; // RekayasaPerangkat Lunak
$string1 . ' ' . $string2; // Rekayasa Perangkat Lunak
"$string1 $string2"; // Rekayasa Perangkat Lunak
"{$string1} {$string2}"; // Rekayasa Perangkat Lunak

// NULL
$null = null;
$null = NULL;
$null = Null;
// Check data/variable if null
is_null($null); // true

// ARRAY
$array1 = [
    1,
    1.1,
    1_111,
    true,
    'OK',
    "SIP",
    [
        1,
        2,
        [
            'A',
            'B'
        ]
    ],
];
$array2 = [
    'name' => 'RPL',
    'total_class' => 4,
    'classes' => [
        'RPL 1',
        'RPL 2',
        'RPL 3',
        'RPL 4',
    ],
    'students' => [
        'RPL-1' => [
            'A',
            'B',
            'C'
        ]
    ]
];
// ACCESS
$array1[1]; // 1.1
// Count array element
count($array); // 7

// CONSTANT
define('SEKOLAH', 'SMKN 4 BANJARMASIN');
$sekolah = SEKOLAH;
