<?php

/*
- memungkinkan untuk memasukkan parameter null pada parameter casting
- cara mendefinisikan cukup menambahkan tanda tanya (?) didepan type hinting
*/

class StringMutator {
    public static function bold(?string $word) {
        return sprintf('<b>%s</b>', $word);
    }
}