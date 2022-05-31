<?php

namespace Chungu\Controllers;

use Chungu\Models\Product;  

class ApiController {
  
    public function all() {
        $products = [
            'all' => Product::all()
        ];
        echo json_encode($products);
        
    }
    public function earrings() {
        $earrings = [
            'allearrings' => Product::all()
        ];
        echo json_encode($earrings);
        
    }
}