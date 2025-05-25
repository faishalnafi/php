<?php
// pengulangan
/*
for
while
do while
foreach    ##spesifik untuk array
*/

echo "pengulangan<br>";
for($i=0; $i<5; $i++) {
    echo $i;
}
echo "<br>";

$i=0;
while($i<5) {
    echo $i;
    $i++;
}
echo "<br>";

$i=5;
do {
    echo $i;
    $i++;
} while($i<5);
// di while menjalankan terlebih dahuu baru dicek kondisi while nya;
echo "<br>";

?>

<!-- penerapan interface dalam html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pengulangan</title>
</head>
<body>
    <br><br><br>
    <table border="1" cellspacing="0" cellpadding="10">
        <?php
            for($i=1; $i<=5; $i++) {
                echo "<tr>";
                for ($j=1; $j<=5; $j++) {
                    echo "<td>$i,$j</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>

    <!-- memisahkan tag html dan php -->
    <br><br><br>
    <table border="1" cellspacing="0" cellpadding="10">
        <?php for($i=1; $i<=5; $i++) : ?>
            <tr>
                <?php for ($j=1; $j<=5; $j++) { ?>
                    <td><?php echo "$i,$j"; ?></td>
                <?php } ?>
            </tr>
        <?php endfor; ?>
    </table>
    <!-- bila kode sudah banyak dan bersarang maka penutup kurung kurawal di php dalam html sangat membingungkan
     terdapat saran dan triknya, untuk { => ubah menjadi : dan menutupnyaa } => ubah menjadi end[perintahnya];
     misalnya perintah for maka endfor,bila perintah if maka endif, bila foreach maka enforeach dan seterusnya. -->
</body>
</html>