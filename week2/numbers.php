<?php
$a = 1.2e3; // 1200
$b = 2.34e-2; // .0234

echo $a . " " . $b . "<br>";

$a = 0.1;
$b = 0.7;
$c = ($a + $b) * 10;

echo (int)($c + 0.000000001) . "<br>";

$an_int_value1 = 5;
$an_int_value2 = 7;
$a_float_value1 = 23.4;
$a_float_value2 = 6.2;

echo 'a / b (integer) = ' . ($an_int_value1 / $an_int_value2) . '<br>';
echo 'a / b (float) = ' . ($a_float_value1 / $a_float_value2) . '<br>';
echo 'a + b (integer) = ' . ($an_int_value1 + $an_int_value2) . '<br>';
echo 'a + b (float) = ' . ($a_float_value1 + $a_float_value2) . '<br>';
echo 'a + b (float + integer) = ' . ($a_float_value1 + $an_int_value2) . '<br>';
echo 'a * b (integer) = ' . ($an_int_value1 * $an_int_value2) . '<br>';
echo 'a * b (float) = ' . ($a_float_value1 * $a_float_value2) . '<br>';
echo 'a - b (integer) = ' . ($an_int_value1 - $an_int_value2) . '<br>';
echo 'a - b (float) = ' . ($a_float_value1 - $a_float_value2) . '<br>';
echo 'a % b (integer) = ' . ($an_int_value1 % $an_int_value2) . '<br>';
echo 'a % b (float) = ' . ($a_float_value1 % $a_float_value2) . '<br>';

echo 2 ** 3 . '<br>';
echo pow(2,3) . '<br>';

echo 16 ** 0.5 . '<br>' ;
echo 8 ** (1 / 3) . '<br>';

echo "a is " . $a . "<br>";
$a = $a + 2;
$a += 2;
$a *= 2;
$a /= 2;
$a %= 5;
echo "a is " . $a . "<br>";

$a++;
$a += 1;
$a = $a + 1;
$a--;
$a -= 1;
$a = $a -1;
echo "a is " . $a . "<br>";

++$a;
echo 'a = ' . $a++ . "<br>" . "now a = " . $a . "<br>";
echo 'a = ' . $a-- . "<br>" . "now a = " . $a . "<br>";
echo 'a = ' . ++$a . "<br>" . "now a = " . $a . "<br>";
echo 'a = ' . --$a . "<br>" . "now a = " . $a . "<br>";

$a_negative_number = -35;
$a_positive_number = 22;

echo 'abs of a negative is ' . abs($a_negative_number) . '<br>';
echo 'abs of a positive is ' . abs($a_positive_number) . '<br>';

echo '10100011 is ' . bindec('10100011') . '<br>';


$a_value = 5.1;
$b_value = 5.0;

echo "ceiling of $a_value is " . ceil($a_value) . "<br>";
echo "ceiling of $b_value is " . ceil($b_value) . "<br>";

$a_value = 5.1;
$b_value = 5.0;

echo "floor $a_value is " . floor($a_value) . "<br>";
echo "floor of $b_value is " . floor($b_value) . "<br>";

echo "round $a_value is " . round($a_value) . "<br>";
echo "round of $b_value is " . round($b_value) . "<br>";

echo fmod(22.6, 3) . "<br>";
echo max(1.2, 3.4, 6.8, -2.2, 7.8) . "<br>";
echo min(1.2, 3.4, 6.8, -2.2, 7.8) . "<br>";

$my_rand = rand(3, 33);
echo "A random number: $my_rand <br>";