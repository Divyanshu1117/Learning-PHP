<?php

echo strtoupper('divyanshu');
echo "<br>";

echo strtolower('Divyanshu');
echo "<br>";

echo ucfirst('divyanshu');
echo "<br>";

echo ucwords('divyanshu mca');
echo "<br>";

echo strlen("divyanshu");
echo "<br>";

echo strlen(trim("  divyanshu  "));
echo "<br>";

echo strrev("divyanshu");
echo "<br>";

echo substr("divyanshu", 0, 3);
echo "<br>";

echo str_repeat("*", 20);
echo "<br>";

echo str_pad("divyanshu", 10, "*", STR_PAD_BOTH);
echo "<br>";


$str = "Hello, How are you, what are you doing.";

$arr1 = explode(",", $str);

foreach ($arr1 as $a) {
    echo $a . "<br>";
}

$arr2 = array("Divyanshu", " Cold", " DV");
$str2 = implode(",", $arr2);
echo $str2;

?>