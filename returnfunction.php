<?php
// Returning Value From FUnction:-

function sum()
{
    $a = 10;
    $b = 20;
    $c = $a + $b;
    return $c;
}

function multiply()
{
    $a = 10;
    $b = 20;
    $c = $a * $b;
    return $c;
}

$res = sum();
echo "Sum Result = " . $res;

echo "<br> Multiply Result = " . multiply();

?>