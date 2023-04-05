<?php
declare(strict_types = 1); // untuk membuat tipe data tidak mencampur atau untuk memvalidasi

class ParameterCasting {
    public function __construct (array $arrayType) {

    }
    public function stringCast (string $stringType) {

    }
    public function intCast (int $intType) {

    }
    public function floatCast (float $floatType) {

    }
    public function booleanCast (bool $booleanType) {

    }
}

$obj = new ParameterCasting(array());
$obj->floatCast(1);
$obj->intCast(1.0);