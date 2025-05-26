<?php
// pengondisian / percabangan
/*
if else
if elseif else
ternary
switch
 */

echo "pengondisian <br>";
$x=10;
$p=20;
if($x < $p) {
    echo "Benar <br><br>";
}

$x=50;
$p=20;
if($x < $p) {
    echo "Benar <br>";
}
echo "Salah <br><br>";

$x=10;
$p=20;
if($x < $p) {
    echo "Benar <br>";
}
echo "Salah <br><br>";

$x=50;
$p=20;
if($x < $p) {
    echo "Benar <br>";
} else {
echo "Salah <br><br>";
}

$x=50;
if($x < 10) {
    echo "Benar <br>";
} elseif ($x == 50) {           //bisa mengguakan else if atau disambung elseif
    echo "Bingo!! <br><br>";
} else {
echo "Salah <br><br>";
}