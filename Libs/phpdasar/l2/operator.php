<?php

// operator aritmatika
echo 1+1;

$a = 10;
$b = 5;

echo $a + $b;
/*
+ penambahan
- pengurangan
/ pembagian
* perkalian
% modulus
*/
echo "<br>";
// penggabungan string / concatenation / concat
// operatornya .
//  kalau di javascript pakai +
// jangan menggunakan - dalam menggabung kata
// misal nya $nama-depan      #ini salah!!!!

$x="faishal";
$y="nafi";
$z="rabbani";
echo $x.$y." ".$z."<br>";

// menimpa value variabel
$x=10;
echo $x."<br>";
$x=25;
echo $x;

echo "<br><br> operator assignment <br>";

// operator assignment
/*
=
+=
-=
*=
/=
%=
.=
*/

$q=7;
$q += 3;
echo $q;

// operator perbandingan
// > < >= <= == !=
// operator perbandingan tidak cek tipe data, hanya nilainya saja
echo "<br><br> operator perbandingan <br>";
var_dump (1 < 5);
var_dump (1 > 5);
var_dump (1 == "1");
var_dump (3 != 5);

// operator identitas
// === !==
echo "<br><br> operator identitas <br>";
var_dump (1 === "1");

// operator logika
// && || !
echo "<br><br> operator logika <br>";