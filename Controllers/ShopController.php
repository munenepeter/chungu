<?php

namespace Chungu\Controllers;

use Chungu\Core\Mantle\Paginator;
use Chungu\Models\Product;

class ShopController extends Controller {
    public function index() {
        $earrings = Product::select('id', $this->category_id('earrings'));
        $earrings = Paginator::paginate($earrings, 3);
        
        $necklaces = Product::select('id', $this->category_id('necklaces'));
        $necklaces = Paginator::paginate($necklaces, 3);

        $anklets = Product::select('id', $this->category_id('anklets'));
        $anklets = Paginator::paginate($anklets, 3);

        return view('shop', [
            'earrings' =>  $earrings,
            'necklaces' =>  $necklaces,
            'anklets' =>  $anklets
        ]);
    }
    public function earrings() {
        $earrings = Product::select('id', $this->category_id('earrings'));
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
