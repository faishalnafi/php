<?php

// array associative
$mahasiswa = [
    [
        "name" => "faishalnafi'", 
        "id" => "12345", 
        "jurusan" => "SI",
        "gambar" => "avatar.jpg"
    ],
    [
        "name" => "ucupsurucup",
        "id" => "67890",
        "jurusan" => "SI",
        "gambar" => "avatar1.jpg"
    ]
];

// print_r($mahasiswa);

echo $mahasiswa[0]["name"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arra asosiatif</title>
    <style>
        .hero {
            width: 100px;
        }
    </style>
</head>
<body>
    <h1><b>DATA MAHASISWA</b></h1>
    <?php foreach($mahasiswa as $mhs): ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"] ?>" alt="hero" class="hero">
            </li>
            <li><?= $mhs["name"]; ?></li>
            <li><?= $mhs["id"]; ?></li>
            <li><?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>