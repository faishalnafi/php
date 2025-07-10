<?php
// array
// definisi: variabel yang dapat menampung banyak nilai
// tipe data array di PHP boleh beda dalam 1 variabel
// pasangan key dan value
// key - nya adalah index, yang dimulai dari 0

// membuat array
// #CARA LAMA [sebelum php v5.4]
// struktur array di php >
// $variabel = array ("element1","element2", dan seterusnya);
// notes: gunakan kutip bila tipe data bertipe string
$hari = array("senin", "selasa", "rabu");

// #CARA BARU [php v5.4 keatas]
// struktur array di php >
// $variabel = ["element1","element2", dan seterusnya];
// notes: gunakan kutip bila tipe data bertipe string
$bulan = ["Januari", "Februari", "Maret"];

// menampilkan semua isi array
// var_dump(), print_r();
var_dump($hari);
echo "<br>";
// tiap element dalam array pasti memiliki index berupa angka, index bermula dari 0
print_r($bulan); 
echo "<br><br>";

// menampilkan 1 element dalam array, baru bisa menggunakan echo
echo $hari[2];
echo "<br>";
echo $bulan[1];
echo "<br>";

// menambahkan data dalam array;
print_r ($bulan);
$bulan[] = "April";
echo "<br>";
print_r ($bulan);

?>