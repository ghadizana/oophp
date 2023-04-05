<?php

namespace Http;
use RequestInterface; 

class Request implements RequestInterface {
    public function handle() {
        echo 'Handle HTTP Request';
    }
}
