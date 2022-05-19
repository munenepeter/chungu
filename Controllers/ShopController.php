<?php

namespace Chungu\Controllers;

class ShopController {


    public function index() {
        return view('shop');
    }

    public function earrings() {
        return view('earrings');
    }
    public function necklaces() {
        return view('necklaces');
    }
    public function anklets() {
        return view('anklets');
    }
    public function bracelets() {
        return view('bracelets');
    }
}
