<?php

$array = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

echo "<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 4; $j++) {
        echo $array[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<br>";


echo "<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3 - $i; $j++) {
        echo $array[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<br>";

for ($i = 0; $i < 3; $i++) {
    for ($j = 3 - $i - 1; $j < 4; $j++) {
        echo $array[$i][$j] . " ";
    }
    echo "<br>";
}
?>