<?php
$tips = [];

$file = @fopen('data/tips.csv', 'r');
if (!$file) {
    echo '<h1>Error! File data/tips.csv wasn\'t found!</h1>';
    exit;
}
do {
    $line = fgetcsv($file);
    if(!$line) {
        break;
    }
    $tips[] = $line;
} while($line);

$tip = $tips[array_rand($tips)];
$total = $tip[1] + $tip[2] + $tip[3];

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Adoptions per state</title>
    <style>
        h1 {
            text-align: cneter;
        }

        table {
            width: 100%;
            border-spacing: 0px;
        }

        td,
        th {
            border: 1px solid black;
            cellspacing: 0px;
            text-align: center;
        }

    </style>
</head>

<body>
    <h1>Adoptions per state</h1>
    <p>The United States Census Bureau keeps track of the number of adoptions in each State (and Washington D.C.). The data includes the population of each state as well.</p>
    <table>
        <tr>
            <th>State</th>
            <th>Adoptions</th>
            <th>Population(2014)</th>
            <th>Adoptions.per.100000</th>
        <tr>
            <td><?php echo $tip[0]; ?></td>
            <td><?php echo round(100 * $tip[1] / $total, 1) . '%'; ?></td>
            <td><?php echo round(100 * $tip[2] / $total, 1) . '%'; ?></td>
            <td><?php echo round(100 * $tip[3] / $total, 1) . '%'; ?></td>
        </tr>
    </table>
</body>

</html>
