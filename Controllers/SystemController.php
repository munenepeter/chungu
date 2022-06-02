<?php

namespace Chungu\Controllers;

class SystemController extends Controller {
    public function index() {
        return viewLog('log');
    }
}
