<?php

namespace Chungu\Controllers;


use Chungu\Models\Category;
use Chungu\Models\Product;

class ShopController extends Controller {


    public function index() {

        return view('shop', [
            'earrings' =>  $this->paginate($this->getProducts('earrings'), 3),
            'necklaces' =>  $this->paginate($this->getProducts('necklaces'), 3),
            'anklets' =>  $this->paginate($this->getProducts('anklets'), 3),
            'bracelets' =>  $this->paginate($this->getProducts('bracelets'), 3)
        ]);
    }

    public function category($category) {

        if (strpos($category, '/') !== false) {

            $params = explode('/', $category);
            return $this->showItem(...$params);
        } else {
            $category =  Category::where(['name'], ['name', $category])[0]->name;
            return view('category', [
                'category_name' => $category,
                'products' =>  $this->getProducts($category)
            ]);
        }
    }
    public function showItem($category, $id) {
        $product = Product::find($id); 
        return view('item', [
            'category' => $category,
            'product' =>  $product
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
}
