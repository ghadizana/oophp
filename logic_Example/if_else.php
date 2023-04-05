<?php

/* If elseif Umur */

echo "Masukkan umur anda: "; 
$age = fgets(STDIN);

if ($age >= 20) {
    echo 'Anda berada di masa dewasa';
} elseif ($age >= 12) {
    echo 'Anda berada di masa remaja';
} elseif ($age >= 5 ) {
    echo 'Anda berada di masa anak-anak';
} elseif ($age >= 2) {
    echo 'Anda berada di masa balita';
} else {
    echo 'Anda masih bayi';
}
?>