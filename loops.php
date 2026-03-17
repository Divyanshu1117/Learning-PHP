<?php

echo "For Loop:- <br>";
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

echo "<br>While Loop:- <br>";
$i = 1;
while ($i <= 10) {
    echo $i . "  ";
    $i++;
}

echo "<br>Do While Loop:- <br>";
$i = 1;
do {
    echo $i . "  ";
    $i++;
} while ($i <= 10);

?>