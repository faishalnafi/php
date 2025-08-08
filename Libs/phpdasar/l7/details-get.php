<?php
if( !isset($_GET["nama"]) || !isset($_GET["id"]) || !isset($_GET["jurusan"]) || !isset($_GET["gambar"]) || !isset($_GET["surel"]) ) {
    header("Location: get.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail dokumen</title>
    <style>
        .hero {
            width: 100px;
        }
    </style>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>" alt="hero.png" class="hero"></li>
        <li><?= $_GET["id"]; ?></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
        <li><?= $_GET["surel"]; ?></li>
    </ul>

    <a href="get.php">Kembali ke beranda</a>
</body>
</html>