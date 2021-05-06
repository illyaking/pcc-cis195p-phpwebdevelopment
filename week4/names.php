<?php

define('YEAR', 'year');
define('GENDER', 'gender');
define('COUNT', 'count');

define('NAME_FIELD', 0);
define('GENDER_FIELD', 1);
define('COUNT_FIELD', 2);

define('MIN_YEAR', 1880);
define('MAX_YEAR', 2019);
define('GENDER_MALE', 'M');
define('GENDER_FEMALE', 'F');
define('COUNT_ALL', 'all');

$header = ['Rank', 'Name', 'Metaphone', 'Gender', 'Count', 'Percent'];

if (!isset($_GET[YEAR])) {
    echo "<h1>ERROR!</h1>\n";
    echo "<p>Year must be supplied!</p>\n";
    exit;
}
if (!isset($_GET[GENDER])) {
    echo "<h1>ERROR!</h1>\n";
    echo "<p>Gender must be supplied!</p>\n";
    exit;
}
if (!isset($_GET[COUNT])) {
    echo "<h1>ERROR!</h1>\n";
    echo "<p>Count must be supplied!</p>\n";
    exit;
}

$year = $_GET[YEAR];
$gender = $_GET[GENDER];
$count = $_GET[COUNT];

if (!is_numeric($year)) {
    echo "<h1>ERROR!</h1>\n";
    echo "<p>Year must be a number!</p>\n";
    exit;
}

if (!is_numeric($count) && $count != COUNT_ALL) {
    echo "<h1>ERROR!</h1>\n";
    echo "<p>Count must be a number or \"all\"!</p>\n";
    exit;
}

if ($gender != GENDER_FEMALE && $gender != GENDER_MALE) {
    echo "<h1>ERROR!</h1>\n";
    echo "<p>Gender must be \"M\" or \"F\"!</p>\n";
    exit;
}

if ($year < MIN_YEAR || $year > MAX_YEAR) {
    echo "<h1>ERROR!</h1>\n";
    echo "<p>Year must be between " . MIN_YEAR . " and " . MAX_YEAR . "!</p>\n";
    exit;
}

$names = [];
$file = fopen('data/yob' . ((int) $year) . '.txt', 'r');

if (!$file) {
    echo "<h1>ERROR!</h1>\n";
    echo "Couldn\'t read data file data/yob" . ((int) $year) . "!</p>\n";
    exit;
}

do {
    $line = fgetcsv($file);
    if(!$line) {
        break;
    }
    if($line[GENDER_FIELD] == $gender) {
        $names[] = $line;
    }
} while($line);

fclose($file);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Popular Names</title>
    <style>
        table {
            width: 100%;
            border: 1px solid black;
            border-spacing: 0px;
        }
        td, th {
            border: 1px solid black;
            text-align: center;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
<?php
$total = array_sum(array_column($names, COUNT_FIELD));

    echo "    <h1>Popular " . ($gender == GENDER_MALE ? "male" : "female") . " names from " . $year . "</h1>\n";
    echo "    <table>\n";
    echo "      <tr>\n";
    for ($h = 0; $h < count($header); $h++) {
        echo "          <th>" . $header[$h] . "</th>\n";
    }
    echo "      </tr>\n";
    for ($i = 0; $i < count($names) && ($count == 'all' || $i < $count); $i++) {
        echo "                <tr>\n";
        echo "                    <td>" . ($i + 1) . "</td>\n";
        echo "                    <td>" . $names[$i][NAME_FIELD] . "</td>\n";
        echo "                    <td>" . metaphone($names[$i][NAME_FIELD]) . "</td>\n";
        echo "                    <td>" . $names[$i][GENDER_FIELD] . "</td>\n";
        echo "                    <td>" . $names[$i][COUNT_FIELD] . "</td>\n";
        $percent = 100 * $names[$i][COUNT_FIELD] / $total;
        echo "                    <td>" . number_format($percent, 4) .  "%</td>\n";
        echo "                </tr>\n";
    }
    echo "        </table>\n";
?>
</body>
</html>
