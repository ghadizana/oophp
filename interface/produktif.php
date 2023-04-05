<?php

interface Produktif {
    public function setTodo($toDo);
    public function getTodo();
    public function langkah();
}

class Nyuci implements Produktif {
    private $toDo;

    public function setTodo($toDo) {
        return $this->toDo = $toDo;
    }

    public function getTodo() {
        return $this->toDo = $toDo;
    }

    public function langkah() {
        $langkah1 = "1. Nyalain mesin <br>";
        $langkah2 = "2. Masukkan detergen dan pakaian <br>";
        $langkah3 = "3. Tunggu hingga memutar <br>";
        $langkah4 = "4. Jangan lupa dijemur 🏃‍♀️ <br>";

        $langkah = $langkah1.$langkah2.$langkah3.$langkah4;

        return $langkah;
    }
}

class Belajar implements Produktif {
    private $toDo;

    public function setTodo($toDo) {
        return $this->toDo;
    }

    public function getTodo() {
        return $this->toDo;
    }

    public function langkah() {
        $langkah1 = "1. Siapkan alat belajar <br>";
        $langkah2 = "2. Hilangkah distraksi seperti gadget, sosial media, dll <br>";
        $langkah3 = "3. Mulailah belajar, istirahat bila lelah, tapi jangan kelamaan, ntar males :) 🥱🥱 <br>";

        $langkah = $langkah1.$langkah2.$langkah3;

        return $langkah;
    }
}

echo "<br>";

$nyuci = new Nyuci();
echo "Tutorial Produktif Nyuci: <br>";
echo $nyuci->langkah(); 

echo "<br>";
echo "<br>";

$belajar = new Belajar();
echo "Tutorial Produktif Belajar: <br>";
echo $belajar->langkah();