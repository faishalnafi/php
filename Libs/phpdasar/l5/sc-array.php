<?php
    $mahasiswa = ["Nafi'", "SI", "12345", "care@nafi.id"];
    $siswa = [["Nafi'", "SI", "12345", "care@nafi.id"], ["Faishal", "SI", "67890", "mail@nafi.id"], ["Rabbani", "SI", "45678", "cust@nafi.id"]];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktik Study Case Array Loop</title>
</head>
<body>
    <h1>Daftar Mahasiswa Array Single Dimensi</h1>
    <p>menggunakan get data manual</p>
    <ul>
        <li><?= $mahasiswa[0]; ?></li>
        <li><?= $mahasiswa[1]; ?></li>
        <li><?= $mahasiswa[2]; ?></li>
        <li><?= $mahasiswa[3]; ?></li>
    </ul><br><br>
    <p>Menggunakan foreach</p>
    <ul>
        <?php foreach ($mahasiswa as $mhs): ?>
            <li><?= $mhs; ?></li>
        <?php endforeach; ?>
    </ul><br><br><br>

    <h1>Daftar Mahasiswa Array Multi Dimensi</h1>
    <p>Menggunakan gabungan foreach dan get data manual</p>
    <?php foreach($siswa as $ssw): ?>
        <ul>
            <li><?= $ssw[0]; ?></li>
            <li><?= $ssw[1]; ?></li>
            <li><?= $ssw[2]; ?></li>
            <li><?= $ssw[3]; ?></li>
        </ul>
    <?php endforeach; ?><br><br>

    <p>Menggunakan foreach dan loop</p>
    <?php foreach($siswa as $ssw): ?>
        <ul>
            <?php foreach ($ssw as $a): ?>
                <li><?= $a; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
    
</body>
</html>