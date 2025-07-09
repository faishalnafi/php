<?php

/*
fungsi / function dalam bahasa php adalah sebuah potongan program yang dapat dipanggil dan digunakan kapan saja.
php terkenal banyak menyediakan fungsi dikenal dengan build-in function
juga menyediakan buatan user sendiri dikenal dengan user-defined function

// build-in function
# date/time
> time()
> date()
> mktime()
> strtotime()

# string
> strlen()
> strcmp()
> explode()
> htmlspecialchars()

# utility / fungsi bantuan
> var_dump()
> isset() | cek telah membuat sebuah variabel atau blm, menghasilkan boolean
> empty ()
> die()
> sleep ()

*/

// struktur fungsi di php > >
// namaFungsi ( $parameter1; $parameter2);

// date!!
echo date("l, d-M-Y"); //date harus memberikan minimal 1 parameter agar dapat dijalankan, menggunakan echo agar dapat ditampilkan pada frame;
echo "<p>manual dokumentasi: <a href='https://www.php.net/manual/en/function.date.php' target='_blank'>sebagai berikut</a>.</p><br><br>";

// time!!
// UNIX Timestamp / EPOCH time
// jumlah detik yang sudah berlalu sejak 1 januari 1970
echo time();
echo "<br>";
echo date("l, d-M-Y", time()+60*60*24*7);
echo "<br>";

// mktime!!
// membuat sendiri waktu (detik), memiliki 6 parameter (0,0,0,0,0,0) | jam menit detik bulan tanggal tahun;
echo date("l, d M Y", mktime(0,0,0,4,18,2005));
echo "<br>";

// strtotime!!
echo date("l, d M Y", strtotime("18 apr 2005"));
echo "<br>";