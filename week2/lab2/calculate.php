<?php

$diameter = $_GET['diameter'];
$depth = $_GET['depth'];
$radius = $diameter / 2;
$volume = pi() * $radius ** 2 * $depth;
$gallons = $volume * 7.48052;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Swimming Pool Calculator!</title>
        <style>
            body {
                margin: auto;
                max-width: 500px;
                padding-top: 10%;
            }
            h1 {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Swimming Pool Calculator</h1>
        <p>The volume of a swimming pool that is <?php echo $diameter; ?>' in
            diameter and <?php echo $depth; ?> ' deep is <?php echo number_format($gallons, 1); ?>  gallons.</p>
    </body>
</html>

