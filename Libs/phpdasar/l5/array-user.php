<?php
// menampilkan seluruh data array untuk user
// pengulangan khusus array menggunakan array

$angka = [1,2,3,4,5];
$angka[] = 6;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>l5 | array user</title>
    <style>
        .loop {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear { clear: both; }
    </style>
</head>
<body>
    <!-- bila menggunakan for -->
    <?php for( $i=0; $i < count($angka); $i++) { ?>
        <div class="loop"><?= $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>
    <!-- bila mmenggunakan foreach -->
    <?php foreach( $angka as $a ) { ?>
        <div class="loop"><?= $a; ?></div>
    <?php } ?>

    <div class="clear"></div>
    <!-- memperbaiki syntax gaya penulisan templating -->
    <?php foreach( $angka as $a ) : ?>
        <div class="loop"><?= $a; ?></div>
    <?php endforeach; ?>
</body>
</html>