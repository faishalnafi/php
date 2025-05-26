<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>praktek ke 1</title>
    <style>
        .warna {
            background-color: silver;
        }
    </style>
</head>
<body>
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
    </table><br>

    <table border="1" cellspacing="0" cellpadding="10">
        <?php
            for($i=1; $i<=5; $i++) {
                echo "<tr class='warna'>";
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
            <?php if($i%2 == 0): ?>
            <tr class="warna">
            <?php else: ?>
            <tr>
            <?php endif; ?>
                <?php for ($j=1; $j<=5; $j++) { ?>
                    <td><?= "$i,$j"; ?></td> <!-- hanya dapat digunakan untuk menggantikan echo-->
                <?php } ?>
            </tr>
        <?php endfor; ?>
    </table>

    <br>
    <table border="1" cellspacing="0" cellpadding="10">
        <?php for($i=1; $i<=5; $i++) : ?>
            <?php if($i%2 == 1): ?>
            <tr class="warna">
            <?php else: ?>
            <tr>
            <?php endif; ?>
                <?php for ($j=1; $j<=5; $j++) { ?>
                    <td><?= "$i,$j"; ?></td>
                <?php } ?>
            </tr>
        <?php endfor; ?>
    </table>

    <!-- memisahkan tag html dan php -->
    <br><br><br>
    <table border="1" cellspacing="0" cellpadding="10">
        <?php for($i=1; $i<=5; $i++) : ?>
            <tr>
                <?php for ($j=1; $j<=5; $j++) { ?>
                    <?php if($j%2 == 0): ?>
                    <td class="warna"><?= "$i,$j"; ?></td>
                    <?php else: ?>
                    <td><?= "$i,$j"; ?></td>
                    <?php endif;?>
                <?php } ?>
            </tr>
        <?php endfor; ?>
    </table>

    <br>
    <table border="1" cellspacing="0" cellpadding="10">
        <?php for($i=1; $i<=5; $i++) : ?>
            <tr>
                <?php for ($j=1; $j<=5; $j++) { ?>
                    <?php if($j%2 == 1): ?>
                    <td class="warna"><?= "$i,$j"; ?></td>
                    <?php else: ?>
                    <td><?= "$i,$j"; ?></td>
                    <?php endif;?>
                <?php } ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>