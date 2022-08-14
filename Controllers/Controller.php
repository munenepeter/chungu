<?php

namespace Chungu\Controllers;

use Chungu\Core\Mantle\Middleware;
use Chungu\Models\Product;
use Chungu\Models\Category;
use Chungu\Core\Mantle\Request;
use Chungu\Core\Mantle\Paginator;

class Controller {

   
    public function middleware($middleware){
       return (new Middleware)->middleware($middleware);
    }
    public function request(){
        return (new Request);
     }
    public function upload(array $file, string $location, int $max_size, array $mime_types) {
        return $this->request()->upload($file, $location, $max_size, $mime_types);
    }
    public function paginate(array $data, $per_page) {
        return Paginator::paginate($data, $per_page);
    }
    public function category_id($category) {
        $category = Category::where(['id'], ['name', $category])[0];
        return $category->id;
    }
    public function category($category_id) {
        $category = Category::where(['name'], ['id', $category_id])[0];
        return $category->name;
    }
    public function getProducts($product) {
        return Product::select('category_id', "=", $this->category_id($product));
    }
    public function getAvailable($product) {
        $category_id = $this->category_id($product);
        
        $count =  Product::query("select COUNT(*) as count from products where `category_id` = '{$category_id}' and `status` = 'Available'")[0];
       
        if (!empty($count)) {
            return $count['count'];
        }
        return 0;
    }
}
