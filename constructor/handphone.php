<?php

class Handphone {
    public $jumlah_pulsa;

    public function __construct($pulsa)
    {
        $this->jumlah_pulsa = $pulsa;
    }

    public function mengirimPesan($tarif, $jumlah_pesan = 1) {
        $this->jumlah_pulsa -= $tarif * $jumlah_pesan;
    }

    public function __destruct()
    {
        echo "\n";
        echo "Jumlah pulsa sekarang : ";
        echo $this->jumlah_pulsa;
    }
}

$hp_maryam = new Handphone(5000);

echo "Jumlah pulsa Maryam diawal : ";
echo $hp_maryam->jumlah_pulsa;

$hp_maryam->mengirimPesan(500);