<?php 

class Mobil { // class
    public $nama = "nama"; // property
    public $merk = "merk";
    public $warna = "warna";
    public $tipeMesin = "tipeMesin";
    public $kecepatanMaksimal = 0;

    public function tambahKecepatan() { 
        // isinya method
    }

    public function kurangiKecepatan() {

    }

    public function belokKiri() {

    }

    public function belokKanan() {

    }

    public function sayHello() {
        return "Hello, Driver!"; // isi dari method
    }

    public function getLabel() {
        
        return "$this->nama, $this->merk";
    }
}

$mobil_user = new Mobil(); // bikin object
$mobil_aku = new Mobil(); // bikin object
$mobil_pengguna = new Mobil(); // bikin object

$mobil_user->nama = "Avanza"; // nambahin nilai dari object
$mobil_user->merk = "Toyota"; //nambahin nilai dari object

var_dump($mobil_user); // manggil data secara berurutan
echo "Mobil User: ". $mobil_user->nama, $mobil_user->merk; // memanggil data dengan spesifik nama dan merk
echo "\n";

echo $mobil_user -> sayHello(); // menampilkan data dari method, jangan lupa pake echo
echo "\n";

echo $mobil_user -> getLabel();

?>