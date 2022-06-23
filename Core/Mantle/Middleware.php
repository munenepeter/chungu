<?php

namespace Chungu\Core\Mantle;

class Middleware{

    protected $middleware = [
        'auth'
    ];

    private function check_middleware($middleware){
       if(!in_array($middleware, $this->middleware)){

       }
    }
}