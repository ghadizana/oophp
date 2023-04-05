<?php
/*
Latihan constanta
nama, umur, hobby, alamat
2 define, 2 const
*/

define('NAMA', 'Rianti');
define('UMUR', 16);

class Profile {
    const hobby = 'Membaca';
    const alamat = 'Depok';
}

echo "Nama : " . NAMA;
echo "\n";
echo "Umur : " . UMUR;
echo "\n";
echo "Hobby : " . Profile::hobby;
echo "\n";
echo "Alamat : " . Profile::alamat;

