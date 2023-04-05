<?php

/* 
    penanganan error
    1. simple die() laporan
    2. set handler error (custom error)
    3. trigger error => memicu kesalahan 

*/

# contoh menggunakan die()

// if(!file_exists('welcome.txt')) {
//     die('File not found => File tidak ditemukan');
// } else {
//     $file=fopen('welcome.txt', 'r');
// }


# pengujian error handler untuk variable tanpa output

// error handler function
// function customError($errno, $errstr) {
//     echo "\n Error: \n [$errno] $errstr";
// }

// // set error handler
// set_error_handler("customError");

// // trigger error
// echo ($test);

// $test=2;
// if($test>1) {
//     trigger_error("Value must be 1 or below");
// }


# error user warning

// error handler function
// function customError($errno, $errstr) {
//     echo "\n Error: \n [$errno] $errstr";
//     echo "Ending script";
// }

// // set error handler 
// set_error_handler("customError", E_USER_WARNING);

// // trigger error
// echo ($test);

// $test=2;
// if($test>1) {
//     trigger_error("Value must be 1 or below \n", E_USER_WARNING);
// }

# kirim error

function customError($errno, $errstr) {
    echo "\n Error : \n [$errno] $errstr";
    echo "Webmaster has been notified";
    error_log("Error : [$errno] $errstr", 1, 
    "ghadizanauraaliya@gmail.com", "From: webmaster@example.com");
}

set_error_handler("customError", E_USER_WARNING);

echo ($test);

$test=2;
if($test>1) {
    trigger_error("Value must be 1 or below \n", E_USER_WARNING);
}

?>