<?php

$a = 40;
$b = 20;
$c = 30;

if ($a > $b) {
    if ($a > $c) {
        echo "A is Greater";
    } else {
        echo "C is Greater";
    }
} else {
    if ($b > $c) {
        echo "B is Greater";
    } else
        echo "C is Greater";
}

?>