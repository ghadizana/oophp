<?php

/* pengulangan menggunakan for */
// for($i = 1; $i <= 100; $i++) {
//     echo "Perulangan ke- {$i} \n";
// }

/* pengulangan menggunakan recursive */
function tampilkanAngka(int $jumlah, int $index = 1) {
    echo "Sebelum memanggil diri sendiri [{$index}] \n";

    if($index < $jumlah) {
        tampilkanAngka($jumlah, $index + 1);
    } else {
        echo "Proses berakhir \n";
    }

    echo "Sebelum memanggil diri sendiri [{$index}] \n";
}

tampilkanAngka(5);