<?php

$fruits = ["Banana", "Apple", "Cherry", "Strawberry", "Kiwi"];

echo "<ul>\n";
while ($fruit = current($fruits)):
    echo '    <li>' . $fruit . "</li>\n";
    next($fruits);
endwhile;
echo "</ul>\n";

end($fruits);
echo "<ul>\n";
while ($fruit = current($fruits)):
    echo '    <li>' . $fruit . "</li>\n";
    prev($fruits);
endwhile;
echo "</ul>\n";

$student = ["FirstName" => "John", "LastName" => "Smith", "GPA" => 4.0];

while($property = current($student)):
    echo '<b>' . key($student) . '</b> ' . ":" . $property . '<br>' ;
    next($student);
endwhile;

end($student);

while($property = current($student)):
    echo '<b>' . key($student) . '</b> ' . ":" . $property . '<br>' ;
    prev($student);
endwhile;