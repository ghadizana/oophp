<?php

// public
// protected
// private

class Kendaraan {
    
    public $price = 25000;
    protected $harga = 50000;
    private $uang = 20000;

    public function harga() {
        return $this->harga;
    }

    public function uang() {
        return $this->uang;
    }
}

class Mobil extends Kendaraan { 
    public $merk ="Avanza";
    public $jumlahRoda;
}

// protected
$Mobil = new Mobil();
echo "Merk: " .$Mobil->merk;
echo "<br>";
echo "Harga: " .$Mobil->harga(); 

// public
$Car = new Mobil();
echo "<br>";
echo $Car->price;

// private
$motor = new Mobil();
echo "<br>";
echo $motor->uang();

?>