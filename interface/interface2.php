<?php

/*
Mengimplementasikan beberapa interface

*/

interface Car {
    public function setVariant($variant);
    public function getVariant();
}

interface Wheeled {
    public function setWheel($wheel);
    public function getWheel();
}

class Mercedes implements Car, Wheeled {
    private $variant;
    private $wheel;

    public function setVariant($variant) {
        $this->variant = $variant;
    }

    public function getVariant() {
        return $this->variant;
    }

    public function setWheel($wheel) {
        $this->wheel = $wheel;
    }

    public function getWheel() {
        return $this->wheel;
    }
}

$unimog = new Mercedes();
$unimog->setVariant('Unimog');
$unimog->setWheel(4);

echo "Mobil ". $unimog->getVariant() . " dengan jumlah roda " . $unimog->getWheel();