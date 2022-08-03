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
    public function dashboard(){
        $data = [];
        foreach (Category::all() as $category) {
            $data[$category->name]['name'] = $category->name;
            $data[$category->name]['image'] = $category->image;
            $data[$category->name]['all'] = count($this->getProducts($category->name));
            $data[$category->name]['available'] = $this->getAvailable($category->name);
            $data[$category->name]['sold'] = $data[$category->name]['all'] - (int)$data[$category->name]['available'];
        }
        echo json_encode($data);
    }
}