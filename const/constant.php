<?php

/*
constant = identifier untuk menyimpan nilai
perbedaan dengan variabel = nilai yang disimpan tidak dapat diubah
nama constant ditulis dengan huruf besar
*/

// bersifat global/ constant global (tidak bisa disimpan di dalam class)
define('NAME', 'User'); 
echo NAME;
echo "\n";

// const = dapat disimpan di dalam class
const UMUR = 16;
echo UMUR;
echo "\n";

// contoh pengaplikasian
class Contoh {
    const NAMA = 'User Pertama';
}

echo Contoh::NAMA;  
echo "\n";

// magic method
echo __LINE__; // baris pada file 
echo "\n";
echo __FILE__; // menunjukkan letak file
echo "\n";
echo __DIR__; // menunjukkan direktori terakhir
echo "\n";
echo __FUNCTION__; // menunjukkan letak function
echo "\n";
echo __CLASS__; // menunjukkan sebuah method ada di class mana
echo "\n";
echo __METHOD__; // menunjukkan letak method
