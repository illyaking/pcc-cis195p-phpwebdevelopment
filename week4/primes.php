<?php

define('NUMBER', 'number');

if (!isset($_GET[NUMBER])) {
    echo '<h1>You must supply a number!</h1>';
    exit;
}
$number = $_GET[NUMBER];
if (!is_numeric($number)) {
    echo '<h1>A numeric value must be supplied for number!</h1>';
    exit;
}

for ($p = 2; $p <= $number; $p++) {
    for ($candidate = 2; $candidate < $p; $candidate++) {
        if ($p % $candidate == 0) {
            echo '<h1>' . $p . ' is not prime!</h1>';
            continue 2;
        }
    }
    echo '<h1>' . $p. ' is prime!</h1>';
}
