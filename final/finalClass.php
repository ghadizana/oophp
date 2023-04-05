<?php

final class Induk 
{
    public function Test() 
    {
        return "Display test pada induk";
    }
}

// class Anak extends Induk 
// {
//     public function Test() 
//     {
//         return "Display test pada anak";
//     }
// }

$obj = new Induk;
echo $obj->Test();
?>