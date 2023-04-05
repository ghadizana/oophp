<?php

/*
 - bilangan faktorial-> n * faktorial(n-1)
 - bag. faktorial tidak memanggil hasil 
*/

// function faktorial ($n) {
//     echo "Faktorial({$n}) = faktorial(" . ($n - 1) .")\n";

//     if($n > 2) {
//         faktorial($n - 1);
//     } 
// }

// faktorial(5);


/* faktorial dengan hasil */

function factorial ($n) {
    if ($n > 2) {
        return $n * factorial($n - 1);
    } else {
        return $n;
    }
}

// panggil fungsi
$hasil = factorial(2.1);
echo $hasil;