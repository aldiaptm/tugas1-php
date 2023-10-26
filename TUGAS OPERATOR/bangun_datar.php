<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas Bangun Datar</title>
</head>

<body>
    <?php
    // Luas Persegi
    $s = 4;
    $luas_persegi = $s * $s;

    echo "$s * $s = $luas_persegi <br>";
    echo "Jadi luas persegi adalah" . " " . $luas_persegi . " " . "cm";
    ?>
    <hr>
    <?php
    // Luas Persegi Panjang
    $p = 12;
    $l = 5;
    $luas_persegipanjang = $p * $l;

    echo "$p * $l = $luas_persegipanjang <br>";
    echo "Jadi luas persegi panjang adalah" . " " . $luas_persegipanjang . " " . "cm";
    ?>
    <hr>
    <?php
    // Luas Segitiga
    $a = 12;
    $t = 5;
    $luas_segitiga = 1 / 2 * $a * $t;

    echo "1/2 * $a * $t = $luas_segitiga <br>";
    echo "Jadi luas segitiga adalah" . " " . $luas_segitiga . " " . "cm";
    ?>
    <hr>
    <?php
    // Luas Lingkaran
    $phi = 3.14;
    $phi2 = 22 / 7;
    $r = 14;

    if ($r % 7 == 0) {
        echo "phi * r * r = " . $luas_lingkaran = $phi2 * $r ** 2;
    } else {
        echo "phi * r * r = " . $luas_lingkaran = $phi * $r ** 2;
    }
    echo "<br>";
    echo "Jadi luas lingkaran adalah" . " " . $luas_lingkaran . " " . "cm";
    ?>
    <hr>
    <?php
    // Jajar Genjang
    $a = 15;
    $t = 8;
    $luas_jagen = $a * $t;

    echo "$a * $t = $luas_jagen <br>";
    echo "Jadi luas jajar genjang adalah" . " " . $luas_jagen . " " . "cm";
    ?>
</body>

</html>