<?php

/*
fungsi / function dalam bahasa php adalah sebuah potongan program yang dapat dipanggil dan digunakan kapan saja.
php terkenal banyak menyediakan fungsi dikenal dengan build-in function
juga menyediakan buatan user sendiri dikenal dengan user-defined function

// user-defind function
#

*/

// struktur fungsi di php > >
// function namaFungsi ( $parameter1; $parameter2) {
// blok kode yang dijalankan
// .....
// return $nilaiKembalian; //Opsional, jika fungsi mengembalikan nilai
// }

function welcome ($time = "Welcome", $name = "Administrator") {
    return "$time, $name!!";
    // seluruh argumen/parameter harus diisi, bia membuat 2 argumen/parameter maka harus diisi keduanya/semuanya tidak dapat salah satu, dan seterusnya;
    // bila mengisinya tidak lengkap maka akan terjadi eror;
    // ==============================================================================================================================================================
    // bisa diakali agar tidak eror dengan memberikan parameter default, jadi bila tidak ada isinya maka akan menamilkan parameter default, bila ada isinya maka akan ditimpa dengan parameter yang ada;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>l4</title>
</head>
<body>
    <h1><?= welcome("Good Morning", "Nafi'"); ?><br></h1>
    <!-- mencoba tidak memberikan parameter -->
    <h1><?= welcome(); ?><br></h1>
    <!-- hanya salah satunya -->
    <h1><?= welcome('',"Nafi'"); ?><br></h1>
    <h1><?= welcome("Goood Morning"); ?><br></h1>
</body>
</html>