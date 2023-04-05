<?php

/*
- kelas abstrak yang sama sekali tidak memiliki implementasi 
- murni sebagai template
- tidak terdapat property, hanya mendeklarasikan methodnya saja
- method bersifat public
- keyword: interface and implements(extends)
- tidak bisa diinstansiasi menjadi objek
*/

interface Car {
    public function setVariant($variant);
    public function getVariant();
    public function setGear(); // memasukkan gigi
}

class Mercedes implements Car {
    private $variant;

    public function setVariant($variant) {
        $this->variant = $variant;
    }

    public function getVariant() {
        return $this->variant;
    }

    public function setGear() {
        
    }
}

class Manual implements Car {
    private $variant;

    public function setVariant($variant) {
        $this->variant = $variant;
    }

    public function getVariant() {
        return $this->variant;
    }

    public function setGear() {
        $step1 = "Injak kopling \n";
        $step2 = "Masukan gigi \n";
        $step = $step1.$step2;

        return $step;
    }
}

class Matic implements Car {
    public $variant;

    public function setVariant($variant) {
        $this->variant = $variant;
    }

    public function getVariant() {
        return $this->variant;
    }

    public function setGear() {
        $step1 = "";
        $step2 = "Masukan gigi \n";
        $step = $step1.$step2;

        return $step;
    }
}

$unimog = new Mercedes();
$unimog->setVariant('Unimog');
echo $unimog->getVariant();

echo "\n";

$avanza = new Manual();
echo "Mobil manual: \n";
echo $avanza->setGear();

echo "Mobil matic: \n";
$brio = new Matic();
echo $brio->setGear();