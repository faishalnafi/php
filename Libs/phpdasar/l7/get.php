<?php
// mengambil data dari array associative
// $_GET = ["nama" => "faishalnafi", "nrp" => "12345"];
// var_dump($_GET);

/* 
mengambil data dari url dengan cara menambahkan queri (?) di url dengan pasangan key dan value
contoh: localhost/l7/superglobal.php?nama=faishalnafi akan menghasilkan array(1) { ["nama"]=> string(11) "faishalnafi" }
dapat menggabungkan lebih dari satu dengan karakter &
*/

$mahasiswa = [
    [
        "nama" => "faishalnafi'", 
        "id" => "12345", 
        "jurusan" => "SI",
        "gambar" => "avatar2.jpg",
        "surel" => "fi@mail.id"
    ],
    [
        "nama" => "ucupsurucup",
        "id" => "67890",
        "jurusan" => "SI",
        "gambar" => "avatar1.jpg",
        "surel" => "ucup@mail.com"
    ],
    [
        "nama" => "boediman",
        "id" => "45678",
        "jurusan" => "SI",
        "gambar" => "avatar.jpg",
        "surel" => "budi@mail.org"
    ]
];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>request post</title>
    <style>
        .hero {
            width: 100px;
        }
    </style>
</head>
<body>
    <?php foreach($mahasiswa as $mhs):?>
        <ul>
            <!-- <li><img src="img/<?= $mhs["gambar"]; ?>" alt="hero.png" class="hero"></li>
            <li><?= $mhs["id"]; ?></li> -->
            <li><a href="details-get.php?nama=<?= $mhs["nama"]; ?>&id=<?= $mhs["id"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>&surel=<?= $mhs["surel"]; ?>"><?= $mhs["nama"]; ?></a></li>
        </ul>
    <?php endforeach;?>
</body>
</html>