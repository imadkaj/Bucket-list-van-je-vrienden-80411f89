<?php
$a = array();
$B =  array();
$i = 1;
echo ("Hoeveel vrienden heb je  \n");
$amount = readline();

if (is_numeric($amount)) {
    echo (var_export($amount) . "\n");
} else {
    echo (var_export($amount) . " is geen getal, vul een getal in. \n");
    exit();
}

for($i = 1; $i <= $amount; $i++){
    echo "\n Wat is je naam? ".  PHP_EOL;
    $B[] = readline();
    echo "Wat is jouw droom? ".  PHP_EOL;
    $a[] = readline();
}

foreach($a as $key => $value)
{echo $B[$key] . " heeft dit als droom:".PHP_EOL . $value . PHP_EOL;}