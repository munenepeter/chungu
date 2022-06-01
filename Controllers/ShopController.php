<?php

namespace Chungu\Controllers;

use Chungu\Core\Mantle\Paginator;
use Chungu\Models\Product;

class ShopController extends Controller {
    public function index() {
        $earrings = Product::select('category_id', $this->category_id('earrings'));
        $earrings = Paginator::paginate($earrings, 3);

        return view('shop', [
            'earrings' =>  $earrings
        ]);
    }
    public function earrings() {
        $earrings = Product::select('category_id', $this->category_id('earrings'));
        return view('earrings', [
            'earrings' =>  $earrings
        ]);
    }
    public function show($id) {
        $c = Product::find($id);

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
