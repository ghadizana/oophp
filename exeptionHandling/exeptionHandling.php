<?php

/* 
try {
    kode yang dapat throw exception
} catch (Exception $e) {
    kode yang berjalan saat exception tertangkap
} finally {
    kode yang selalu berjalan terlepas dari apakah exception ditangkap  
}
*/

// function divide($dividend, $divisor) {
//     if($divisor==0) {
//         throw new Exception("Division by Zero");
//     }
//     return $dividend / $divisor;
// }

// try {
//     echo divide(5,0);
// } catch (Exception $e) {
//     echo "Tidak dapat membagi. \n";
// } finally {
//     echo "Proses Selesai";
// }


function divide($dividend, $divisor) {
    if($divisor==0) {
        throw new Exception("Division by Zero");
    }
    return $dividend / $divisor;
}

try {
    echo divide(5,0);
} catch (Exception $ex) {
    $code = $ex->getCode();
    $message = $ex->getMessage();
    $file = $ex->getFile();
    $line = $ex->getLine();
    
    echo "Exception throw in $file on line $line: [Code $code] \n $message";
}
?>