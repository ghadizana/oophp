<?php

class Laptop {
    protected $ip = 7439849485;
    private $address = "Indonesia";
    protected $pemilik = "Ghadiza";
    private $seri = "MG7869";
    protected $warna = "Grey";

    public function ip() {
        return $this->ip;
    }

    public function address() {
        return $this->address;
    }

    public function pemilik() {
        return $this->pemilik;
    }

    public function seri() {
        return $this->seri;
    }

    public function warna() {
        return $this->warna;
    }
}

$HP = new Laptop();
echo "Merk Laptop: HP";
echo "<br>";
echo "Alamat IP: " .$HP->ip();
echo "<br>";
echo "Negara Asal: " .$HP->address();
echo "<br>";
echo "Pemilik Barang: " .$HP->pemilik();
echo "<br>";
echo "Nomor Seri: " .$HP->seri();
echo "<br>";
echo "Warna Barang: " .$HP->warna();


?>