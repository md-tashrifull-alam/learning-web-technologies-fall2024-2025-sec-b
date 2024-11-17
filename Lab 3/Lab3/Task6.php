<?php

$numbers = array(10, 20, 30, 40, 50, 60, 70);
$search = 40; 
$found = false;


foreach ($numbers as $num) {
    if ($num == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "$search Found.";
} else {
    echo "$search Not found.";
}
?>