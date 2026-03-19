<?php
$a = array(10, 20, 30, 40, 50);

echo "Original Array:-<br>";
for ($i = 0; $i < count($a); $i++) {
    echo $a[$i] . "<br>";
}

array_push($a, 60);

echo "<br> Updated Array:-<br>";
for ($i = 0; $i < count($a); $i++) {
    echo $a[$i] . "<br>";
}

?>