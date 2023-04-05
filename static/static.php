<!-- <?php

class User {
    public static function showBio() {
        echo "Nama saya Ghadiza. ";
    }
}

User::showBio();

$UserObject = new User();
$UserObject::showBio();

$this_variable = 'User';
$this_variable::showBio();
?> -->



<!-- <?php

class ContohStatic {
    public static $angka = 1;

    public static function hallo() {
        return "Halo, Folks!" .self::$angka++ . " kali."; // cara akses pake self, jangan lupa
    }
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::hallo();
echo "<hr>";
echo ContohStatic::hallo();

?> -->



<!-- Contoh static yang bernilai tetap meski di instansiasi berulang kali -->

<?php

class Contoh {
    public static $angka = 1;

    public static function halo() {
        return "Halo, Friends! " . self::$angka++ . "kali. ";
    }
}

$obj = new Contoh();
echo $obj->halo();
echo "<br>";
echo $obj->halo();
echo "<br>";
echo $obj->halo();
echo "<br>";

echo "<hr>";

$obj2 = new Contoh();
echo $obj2->halo();
echo "<br>";
echo $obj2->halo();
echo "<br>";
echo $obj2->halo();

?>