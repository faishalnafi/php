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
        "gambar" => "avatar.jpg"
    ],
    [
        "nama" => "ucupsurucup",
        "id" => "67890",
        "jurusan" => "SI",
        "gambar" => "avatar1.jpg"
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
            <li><?= $mhs["nama"]; ?></li>
        </ul>
    <?php endforeach;?>
</body>
</html>