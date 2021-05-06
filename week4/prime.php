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

for ($candidate = 2; $candidate < $number; $candidate++) {
    if ($number % $candidate == 0) {
        break;
    }
}

if ($number == $candidate) {
    echo '<h1>' . $number . ' is prime!</h1>';
} else {
    echo '<h1>' . $number . ' is not prime!</h1>';
}

