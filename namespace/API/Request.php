<?php

namespace API; // pakai namespace biar bisa dipanggil di file index.php
use  RequestInterface; // karena class disini merupakan child

class Request implements RequestInterface {
    public function handle() {
        echo 'Handle API request';
    }
}