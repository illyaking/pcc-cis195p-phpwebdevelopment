<?php

$fruits = ["Banana", "Apple", "Cherry", "Strawberry", "Kiwi"];

$i = 0;

echo "<ul>\n";
while ($i <  count($fruits)):
    echo '    <li>' . $fruits[$i] . "</li>\n";
    $i++;
endwhile;
echo "</ul>\n";

echo "<ul>\n";
do {
    $i--;
    echo '    <li>' . $fruits[$i] . "</li>\n";
} while ($i > 0);

echo "</ul>\n";

echo "<ul>\n";
for($i = 0; $i < count($fruits); $i++) {
    echo '    <li>' . $fruits[$i] . "</li>\n";
}
echo "</ul>\n";

echo "<ul>\n";
for($i = count($fruits) - 1; $i >= 0; $i--):
    echo '    <li>' . $fruits[$i] . "</li>\n";
endfor;
echo "</ul>\n";

echo "<ul>\n";
foreach($fruits as $fruit):
    echo '    <li>' . $fruit . "</li>\n";
endforeach;
echo "</ul>\n";
$student = ["FirstName" => "John", "LastName" => "Smith", "GPA" => 4.0];
foreach($student as $property_name => $property):
    echo '<b>' . $property_name . '</b> ' . ":" . $property . '<br>' ;
endforeach;