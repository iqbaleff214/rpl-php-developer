<?php

function main($candles) {
    $total = 0;
    $greatest = 0;
    foreach($candles as $candle) {
        if ($candle > $greatest) $greatest = $candle;
    }
    
    foreach($candles as $candle) {
        if ($candle == $greatest) $total++;
    }
    
    return $total;
}

$candles = [3,2,1,3];
echo "RESULT: " . main($candles) . PHP_EOL;

echo 12 == '12';
echo 12 == '12';
echo 12 === 12;