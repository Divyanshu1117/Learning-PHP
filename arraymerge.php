<?php

$a = array(10, 20, 30, 40, 50);
$b = array(60, 70, 80, 90, 100);

echo "First Array:-<br>";
for ($i = 0; $i < count($a); $i++) {
    echo $a[$i] . "<br>";
}

echo "<br>Second Array:-<br>";
for ($i = 0; $i < count($b); $i++) {
    echo $b[$i] . "<br>";
}

$c = array_merge($a, $b);

echo "<br>Merged Array:-<br>";
for ($i = 0; $i < count($c); $i++) {
    echo $c[$i] . "<br>";
}

?>