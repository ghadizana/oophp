<?php

// final tidak bisa di extends karena sudah final, walaupun visibilitynya public

class Induk
{
    final public function Test() 
    {
        return "Display Test Pada Induk";
    }
}

// class Anak extends Induk 
// {
//     public function Test()
//     {
//         return "Display Test Pada Anak";
//     }
// }

$obj = new Anak();
echo $obj->Test();

?>