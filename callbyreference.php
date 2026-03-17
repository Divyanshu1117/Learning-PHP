<?php
// Call By Reference:-

function sum(&$x, &$y)
{
    $x = 50;
    $y = 60;
    echo "<br>Inside Function:- " . $x . "  " . $y;
}

$a = 30;
$b = 40;

echo "Before Function Call:- " . $a . "   " . $b;
sum($a, $b);
echo "<br>After Function Call:- " . $a . "   " . $b;

?>