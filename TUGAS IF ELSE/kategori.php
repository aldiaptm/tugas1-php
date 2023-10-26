<?php
$nama = "Aldi Pratama";
$tinggi_badan = 1.74;
$berat_badan = 84;
$bmi = ($berat_badan / $tinggi_badan**2);

echo "Nama = $nama <br>";
echo "Tinggi Badan = $tinggi_badan <br>";
echo "Berat Badan = $berat_badan <br>";

if ($bmi > 30) {
    echo "Halo $nama<br> Nilai BMI anda adalah $bmi, anda termasuk obesitas";
}elseif ($bmi > 25){
    echo "Halo $nama<br> Nilai BMI anda adalah $bmi, anda termasuk gemuk";
}elseif ($bmi >= 18.5){
    echo "Halo $nama<br> Nilai BMI anda adalah $bmi, anda termasuk sedang";
}elseif ($bmi < 18.5){
    echo "Halo $nama<br> Nilai BMI anda adalah $bmi, anda termasuk kurus";
}
?>
