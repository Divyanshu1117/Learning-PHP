<?php

$a = array();

$a[0] = array(4, 5, 6);
$a[1] = array(7, 8, 9);
$a[2] = array(1, 2, 3);

echo "Matrix is :- <br>";

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $a[$i][$j] . "  ";
    }
    echo "<br>";
}

?>