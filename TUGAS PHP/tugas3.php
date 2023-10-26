<?php
for ($i = 0; $i < 9; $i++) {            /*Pertama diinisialisasi atau perulangan dimulai dari 0 -> $i = 0
                                          dilakukan sebanyak 9 kali -> $i < 9
                                          dilakukan Increment atau penambahan 1 ($i + 1) -> $i++*/

    for ($j = 0; $j <= $i; $j++) {      /*Pada perulangan kedua diinisialisasi $j = 0, di mulai dari 0
                                          dilakukan pengecekan bahwa perulangan dilakukan selama $j <= $i
                                          dilakukan Decrement atau pengurangan 1 ($i + 1) -> $i++*/

        echo $j;                        /*Perulangan kedua mencetak variabel j ($j)*/
    }
    echo "<br>";                        /*Perulangan kedua mencetak break/ enter*/
}
?>