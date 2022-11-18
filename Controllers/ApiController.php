<?php

namespace Chungu\Controllers;

use Chungu\Models\Category;
use Chungu\Models\Product;

class ApiController extends Controller {
    public function __construct() {
        header('Content-Type: application/json; charset=utf-8');
    }
    public function index() {
        $products =  Category::all();
        echo json_encode($products);
    }
    public function all() {
        $products = Product::query("SELECT p.id, p.name, p.color,p.price, p.quantity, p.status, p.image, p.created_at, p.updated_at, c.id as category_id, c.name as category, c.image as category_image FROM products p INNER JOIN categories c WHERE p.`category_id` = c.`id`;");
        echo json_encode($products);
    }
    public function category($category) {
        $$category = [
            $category => $this->getProducts($category)
        ];
        echo json_encode($$category);
    }
    public function dashboard() {
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
