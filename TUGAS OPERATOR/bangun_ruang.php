<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Ruang</title>
</head>

<body>
    <?php
    // Volume Kubus
    $s = 7;
    $volume_kubus = $s ** 3;

    echo "Volume kubus = s x s x s <br>";
    echo "$s * $s * $s = $volume_kubus <br>";
    echo "Jadi volume kubus adalah" . " " . $volume_kubus;
    ?>
    <hr>
    <?php
    // Volume Balok
    $p = 7;
    $l = 12;
    $t = 4;
    $volume_balok = $p * $l * $t;

    echo "Volume Balok = p x l x t <br>";
    echo "$p * $l * $t = $volume_balok <br>";
    echo "Jadi volume balok adalah" . " " . $volume_balok;
    ?>
    <hr>
    <?php
    // Volume Limas Persegi Panjang
    $p = 7;
    $l = 12;
    $t = 4;
    $volume_limaspp = 1 / 3 * $p * $l * $t;

    echo "Volume Limas Persegi Panjang = 1/3 x p x l x t <br>";
    echo "1/3 * $p * $l * $t = $volume_limaspp <br>";
    echo "Jadi volume balok adalah" . " " . $volume_limaspp;
    ?>
    <hr>
    <?php
    // Volume Bola
    $phi = 3.14;
    $phi2 = 22/7;
    $r = 15;

    if ($r % 7 == 0){
        echo "V = (4/3) x phi x r^3 = ".$vol_bola = 4/3 * $phi2 * $r**3;
    } else {
        echo "V = (4/3) x phi x r^3 = ".$vol_bola = 4/3 * $phi * $r**3;
    }

    echo "<br>";
    echo "Jadi volume bola adalah"." ".$vol_bola;
    ?>

</body>

</html>