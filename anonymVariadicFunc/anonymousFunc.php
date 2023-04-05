<?php

function introduce($fullname, $action) {
    $fullname = $action($fullname);
    return "Perkenalkan nama saya adalah $fullname";
}

$anonym = function ($fullname) {
    return strtoupper($fullname);
};

echo introduce("Miss Nina", $anonym);