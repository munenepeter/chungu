<?php

namespace Chungu\Controllers;

use Chungu\Models\Category;
use Chungu\Models\Product;  

class ApiController extends Controller{
    public function index() {
        $products =  Category::all();
        echo json_encode($products);
        
    }
    public function all() {
        $products = Product::all();
        echo json_encode($products);
        
    }
    public function category($category) {
        $$category = [
            $category => $this->getProducts($category)
        ];
        echo json_encode($$category);
        
    }
}