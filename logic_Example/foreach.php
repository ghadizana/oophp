<?php

/* Capital city in ASEAN */ 

$capitals = [
    'Indonesia' => 'Jakarta',
    'Malaysia' => 'Kuala Lumpur',
    'Singapura' => 'Singapura',
    'Brunei' => 'Bandar Seri Begawan',
    'Laos' => 'Vientiane',
    'Myanmar' => 'Naypyidaw',
    'Thailand' => 'Bangkok',
    'Kamboja' => 'Phnom Penh',
    'Filipina' => 'Manila',
    'Vietnam' => 'Hanoi'
];

foreach ($capitals as $country => $capital) {
    echo "Ibukota negara dari {$country} adalah {$capital}" . '<br>';
}

?>