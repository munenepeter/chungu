<?php

namespace Chungu\Controllers;

class PagesController {
    public function index() {
        return view('index');
    }

    public function login() {
        return view('login');
    }
}
