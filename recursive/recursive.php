<?php

/*
- recursive function : function yang memanggil dirinya sendiri
- tidak memiliki keyword khusus krn hanya function biasa
*/

function sayHello() {
    echo "Hello World!";
    sayHello();
}

sayHello();
