<?php

namespace Chungu\Controllers;


use Chungu\Models\Product;

class ShopController extends Controller {

    private function getProducts($product) {
        return Product::select('category_id', $this->category_id($product));
    }

    public function index() {

        return view('shop', [
            'earrings' =>  $this->paginate($this->getProducts('earrings'), 3),
            'necklaces' =>  $this->paginate($this->getProducts('necklaces'), 3),
            'anklets' =>  $this->paginate($this->getProducts('anklets'), 3)
        ]);
    }
    public function earrings() {

        return view('earrings', [
            'earrings' =>  $this->getProducts('earrings')
        ]);
    }

    public function necklaces() {
        return view('necklaces', [
            'necklaces' => $this->getProducts('necklaces')
        ]);
    }
    public function anklets() {
        return view('anklets', [
            'anklets' => $this->getProducts('anklets')
        ]);
    }
    public function bracelets() {
        return view('bracelets', [
            'bracelets' => $this->getProducts('bracelets')
        ]); 
    }
    public function show($id) {
        $product = Product::find($id);

        return view('product', [
            'product' =>  $product
        ]);
    }
}
