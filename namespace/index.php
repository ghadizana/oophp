<?php

require __DIR__ . '/RequestInterface.php';
require __DIR__ . '/Http/Request.php';
require __DIR__ . '/API/Request.php';

// use API\Request; // API merupakan namespace, request adalah nama class pada file API
// use Http\Request;

// keyword as
use Http\Request as HttpRequest;
use API\Request as APIRequest;

$request = new API\Request(); // menggunakan FQCN
$request->handle();
echo PHP_EOL;

$request = new HttpRequest(); // keyword as 
$request->handle();
echo PHP_EOL;



/* 
FQCN (Fully Qualified Class Name)
 - penyebutan nama class bersamaan dengan namespacenya
*/