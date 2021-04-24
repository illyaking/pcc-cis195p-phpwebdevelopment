<?php
$state = [

    ["Alabama", 548, 4849377, round(11.300420652)],
    ["Alaska", 367, 736732, round(49.81458658)],
    ["Arizona", 3090, 6731484, round(45.903696718)],
    ["Arkansas", 743, 2966369, round(25.047457009)],
    ["California", 5471, 38802500, round(14.099606984)],
    ["Colorado", 769, 5355866, round(14.358088869)],
    ["Connecticut", 502, 3596677, round(13.957327833)],
    ["Delaware", 84, 935614, round(8.978061465)],
    ["District of Columbia", 107, 658893, round(16.239359046)],
    ["Florida", 3265, 19893297, round(16.412563488)],
    ["Georgia", 887, 10097343, round(8.7844891473)],
    ["Hawaii", 121, 1419561, round(8.5237619236)],
    ["Idaho", 218, 1634464, round(13.337705817)],
    ["Illinois", 1648, 12880580, round(12.794454908)],
    ["Indiana", 850, 6596855, round(12.884927742)],
    ["Iowa", 878, 3107126, round(28.25762457)],
    ["Kansas", 695, 2904021, round(23.932333823)],
    ["Kentucky", 909, 4413457, round(20.596099611)],
    ["Louisiana", 622, 4649676, round(13.37727618)],
    ["Maine", 295, 1330089, round(22.178966971)],
    ["Maryland", 340, 5976407, round(5.689036908)],
    ["Massachusetts", 589, 6745408, round(8.7318661821)],
    ["Michigan", 2137, 9909877, round(21.56434434)],
    ["Minnesota", 642, 5457173, round(11.764332925)],
    ["Mississippi", 314, 2994079, round(10.48736523)],
    ["Missouri", 1291, 6063589, round(21.291020879)],
    ["Montana", 234, 1023579, round(22.860961391)],
    ["Nebraska", 461, 1881503, round(24.501688278)],
    ["Nevada", 729, 2839099, round(25.677160254)],
    ["New Hampshire", 120, 1326813, round(9.0442285386)],
    ["New Jersey", 1021, 8938175, round(11.422913514)],
    ["New Mexico", 315, 2085572, round(15.103770093)],
    ["New York", 1997, 19746227, round(10.113324434)],
    ["North Carolina", 1164, 9943964, round(11.705593464)],
    ["North Dakota", 96, 739482, round(12.982060415)],
    ["Ohio", 1404, 11594163, round(12.109541672)],
    ["Oklahoma", 1382, 3878051, round(35.636457592)],
    ["Oregon", 847, 3970239, round(21.333728272)],
    ["Pennsylvania", 1849, 12787209, round(14.459762095)],
    ["Rhode Island", 202, 1055173, round(19.143780214)],
    ["South Carolina", 449, 4832482, round(9.2912917213)],
    ["South Dakota", 159, 853175, round(18.636270402)],
    ["Tennessee", 1161, 6549352, round(17.726944589)],
    ["Texas", 5221, 26956958, round(19.367912359)],
    ["Utah", 605, 2942902, round(20.557939068)],
    ["Vermont", 161, 626562, round(25.695781104)],
    ["Virginia", 632, 8326289, round(7.5904163307)],
    ["Washington", 1362, 7061530, round(19.287604811)],
    ["West Virginia", 852, 1850326, round(46.045940013)],
    ["Wisconsin", 735, 5757564, round(12.765815543)],
    ["Wyoming", 75, 584153, round(12.839102085)],
];

$tip = $state;

?>
<!DOCUTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Adoptions per state</title>
        <style>
            body {
                max-width: 900px;
                margin: auto;
            }
            h1 {
                text-align: center;
            }
            table {
                width: 100%;
                border-spacing: 0px;
            }
            td, th {
                border: 1px solid black;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Adoptions per state</h1>
        <p>The United States Census Bureau keeps track of the number of adoptions in each State (and Washington D.C.). The data includes the population of each state as well.</p>
        <table>
            <th>State</th>
            <th>Adoptions</th>
            <th>Population(2014)</th>
            <th>Adoptions.per.100000</th>
            <?php if (count($tip) > 0): ?>
                <?php foreach ($tip as $row): array_map('htmlentities', $row); ?>
            <tr>
            <td><?php echo implode('</td><td>', $row); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        
<?php endif; ?>
    </body>
</html>
