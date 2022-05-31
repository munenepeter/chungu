<?php

namespace Chungu\Controllers;

use Chungu\Core\Mantle\Request;

class Controller {

    public Request $request;

    public function __construct() {
        $this->request = new Request;
    }
    public function upload(array $file, string $location, int $max_size, array $mime_types){
       return $this->request->upload($file,$location,$max_size, $mime_types);
    }
}
