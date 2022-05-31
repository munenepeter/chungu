<?php

namespace Chungu\Controllers;

use Chungu\Models\Product;

class ShopController {
    public function index() {
        return view('shop');
    }
    public function earrings() {

        return view('earrings', [
            'earrings' =>  Product::all()
        ]);
    }
    public function show($id) {
        $c = Product::find($id);
        if (empty($c)) {
            throw new \Exception("There is no results for your query!", 404);
            return;
        }
        return view('product', [
            'product' =>  $c
        ]);
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
