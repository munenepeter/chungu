<?php

namespace Chungu\Controllers;

use Chungu\Core\Mantle\Request;

class Controller {

    public Request $request;

    public function __construct() {
        $this->request = new Request;
    }
}
