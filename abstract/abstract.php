<?php

/*
- abstract class = class yang tidak dapat diinstansiasi
- minimal memiliki satu method abstrak
- hanya child class yang bisa diinstansiasi
- diikuti dengan kata abstract
*/


abstract class Mobil {
    abstract function spec(); 
}

class Inova extends Mobil {
    function spec() {
        $nama = "Nama Mobil : Inova";
        $kapasitas = "Kapasitas: 5 orang";

        echo $nama;
        echo "\n";
        echo $kapasitas;
    }
}

$inova = new Inova();
$inova->spec();

