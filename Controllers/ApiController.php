<?php

namespace Chungu\Controllers;

use Chungu\Models\Product;  

class PagesController {
  
    public function all() {
        $products = [
            'all' => Product::all()
        ];
        echo json_encode($products);
        
    }
    public function earrings() {
        $products = [
            'allearrings' => Product::all()
        ];
        echo json_encode($products);
        
    }
}