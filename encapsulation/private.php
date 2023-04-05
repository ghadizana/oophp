<?php
 
// visibility: private
// private: tidak bisa diakses kecuali di dalam kelas itu sendiri, di object juga tidak bisa
// cara akses private di luar? membuat public function yang berhubungan dengan property yang private

class Mobil {
    private $namaMobil, $merk, $warnaMobil, $jenisMobil; // semacam shortcut apabila objek memiliki visibility yang sama

    /*
    Bagaimana cara akses?
    Membuat public function
    */

    private function __construct($nama, $merkMobil, $warna, $jenis) // construct
    {
        $this->namaMobil = $nama;
        $this->merk = $merkMobil;
        $this->warnaMobil = $warna;
        $this->jenisMobil = $jenis;
    }

    public function namaMobil() {
        return $this->namaMobil;
    }

    public function merk() {
        return $this->merk;
    }

    public function setCat() {
        return $this->warnaMobil;
    }

    public function jenis() {
        return $this->jenisMobil;
    }

    public function tambahKecepatan() {
        
    }

    public function kurangiKecepatan() {

    }

    public function getLabel() {
        return "$this->namaMobil, $this->warnaMobil";
    }
}

// child dari parent class
class MobilSport extends Mobil {

}

$mobil_maryam = new Mobil("Fortuner", "Toyota", "Merah", "SUV"); // dalam kurung harus diisi
$mobil_maryam->setCat("merah");

$mblsport_reyhan = new MobilSport("Ferrari", "Ferrari", "Hitam", "Sport");
$mblsport_reyhan->setCat("hitam");

echo "Mobil Maryam: " . $mobil_maryam->getLabel();
echo "\n";
echo "Mobil Reyhan: " . $mblsport_reyhan->getLabel();

