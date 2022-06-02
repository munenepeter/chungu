<?php

namespace Chungu\Controllers;

use Chungu\Core\Mantle\Paginator;
use Chungu\Models\Product;

class ShopController extends Controller {

    private function getShopProduct($product) {
        return Paginator::paginate(Product::select('category_id', $this->category_id($product)), 3);
    }

    public function index() {     

        return view('shop', [
            'earrings' =>  $this->getShopProduct('earrings'),
            'necklaces' =>  $this->getShopProduct('necklaces'),
            'anklets' =>  $this->getShopProduct('anklets') 
        ]);
    }
    public function earrings() {
        $earrings = Product::select('category_id', $this->category_id('earrings'));
        return view('earrings', [
            'earrings' =>  $earrings
        ]);
    }

    public function necklaces() {
        $necklaces = Product::select('category_id', $this->category_id('necklaces'));
        return view('necklaces', [
            'necklaces' => $necklaces
        ]);
    }
    public function anklets() {
        return view('anklets');
    }
    public function bracelets() {
        return view('bracelets');
    }
    public function show($id) {
        $c = Product::find($id);

        return view('product', [
            'product' =>  $c
        ]);
    }
}
