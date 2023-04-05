<?php

function fibonacci ($n) {
    if ($n == 0) {
        return 0;
    } else if ($n == 1) {
        return 1;
    } else {
        return (fibonacci($n - 1) + fibonacci($n - 2));
    }
}

for ($a = 0; $a < $n; $a++ ) {
    echo fibonacci($a);
}

// for ($hasil = 0; $hasil < $n; $hasil++) {
//     echo fibonacci($hasil), '';
// } return 0;



echo fibonacci (10);