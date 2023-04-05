<?php

/* Latihan Class dan Object */

class Tanaman {
    public $nama;
    public $jenis;

    public function menampilkan() {
        return "Nama buah: $this->nama <br> Jenis sayuran: $this->jenis";
    }
}

$singkong = new Tanaman();
$singkong->nama = "Singkong";
$singkong->jenis = "Ubi";

echo $singkong -> menampilkan();
?>