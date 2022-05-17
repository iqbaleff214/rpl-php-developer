<?php

// FOR
for ($i=0; $i <= 5; $i++) { 
    echo "nomer for $i" . PHP_EOL;
}

$i = 0;

// WHILE
while ($i <= 5) {
    echo "nomer while $i" . PHP_EOL;
    $i++;
}

$i = 0;

// DO WHILE
do {
    echo "nomer do-while $i" . PHP_EOL;
    $i++;
} while ($i < 5);

// BREAK - CONTINUE
for ($i=0; $i <= 5; $i++) { 
    if ($i == 2) {
        continue;
    }

    if ($i == 4) {
        break;
    }

    echo "nomer for $i" . PHP_EOL;
}

$names = ['A', 'B', 'C'];

// FOREACH
foreach ($names as $key => $value) {
    echo "\$names[$key] => $value" . PHP_EOL;
}





