<?php
//Pertemuan 2 - latihan PHP
//Operator


//Operator Aritmatika
// +, -, *, /, %

$a = 10;
$b = 20;

$c = $a * $b;
echo "$c <br>";

//Operator Relation
$d = $a > $b;
echo "$a > $b : $d <br>";

$e = $a < $b;
echo "$a < $b : $e <br>";

$f = $a == $b;
echo "$a == $b : $f <br>";

$g = $a != $b;
echo "$a != $b : $g <br>";

$h = $a >= $b;
echo "$a => $b : $h <br>";

$i = $a <= $b;
echo "$a <= $b : $i <br>";

//Operator Logika
//&&, ||, !

$x = 10;
var_dump($x < 20 && $x %2 == 0);

$y = 10;
var_dump($y > 20 && $y %2 == 0);

$z = 10;
var_dump($z < 20 || $z %3 == 0);

var_dump($Z >! 20);


?>