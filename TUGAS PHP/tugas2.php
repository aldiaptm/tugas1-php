<?php
for ($i = 1; $i <= 10; $i++) {      /*Pertama diinisialisasi atau perulangan dimulai dari 1 -> $i = 1
                                      dilakukan sebanyak 10 kali -> $i <= 10
                                      dilakukan Increment atau penambahan 1 ($i + 1) -> $i++*/

    for ($j = 10; $j >= $i; $j--) { /*Pada perulangan kedua diinisialisasi $j = 10, di mulai dari 10
                                      dilakukan pengecekan bahwa perulangan dilakukan selama $j <= $i
                                      dilakukan Decrement atau pengurangan 1 ($i - 1) -> $i--*/
                                      
        echo "*";                   /*Perulangan kedua mencetak * (bintang)*/
    }
    echo "<br>";                    /*Perulangan kedua mencetak break/ enter*/
}
?>