<?php

namespace Chungu\Controllers;

use Chungu\Models\Category;
use Chungu\Models\Product;

class ProductController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }

    protected function createProduct($category) {
        $uploadlocation = '/static/imgs/' . $category;
        $image = "path-to_dummy";

        $image =  $this->upload(
            $_FILES['image'],
            $uploadlocation,
            10, //mbs 
            ['image/jpeg', 'image/png']
        );

        //validate the input
        $this->request()->validate($_POST, [
            'name' => 'required',
            'price' => 'required',
            'color' => 'required',
            'quantity' => 'required'
        ]);
        //get the id of earring in the categories table

        $category_id = $this->category_id($category);
        //create product
        Product::create([
            'id' => uniqid(),
            'name' => $this->request()->form('name'),
            'color' => $this->request()->form('color'),
            'price' => $this->request()->form('price'),
            'quantity' => $this->request()->form('quantity'),
            'image' => $image,
            'category_id' => $category_id,
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        //notify    
        notify("New Item added");
    }




    public function index() {
        $products =  Product::all();
        return view('products', [
            'products' => $products
        ]);
    }
    public function create() {

        $categories =  Category::all();

        return view('addproduct', [
            'categories' => $categories
        ]);
    }
    public function store() {

        $category = $this->request()->form('category');

        $this->createProduct($category);

        $this->index();
    }

    public function show($id) {
        $product = Product::find($id);

        return view('product', [
            'product' =>  $product
        ]);
    }
    public function update() {

        $id = $this->request()->form('id');
        //validate the input
        $this->request()->validate($_POST, [
            'id' => 'required'
        ]);

        $name = $this->request()->form('name');
        $quantity = $this->request()->form('quantity');
        $price = $this->request()->form('price');
        $color = $this->request()->form('color');
        $status = $this->request()->form('status');

        $updated_at = date('Y-m-d H:i:s', time());

        //update product
        Product::update(
            "
            'name' = '$name',
            'quantity' = '$quantity', 
            'price' = '$price',  
            'color' = '$color',  
            'status' = '$status',  
            'updated_at' = '$updated_at' 
            ",
            'id',
            $id
        );

        notify("{$name} has been updated!");

        return redirectback();
    }

    public function delete($id) {
        $product = Product::find($id);

        return view('product', [
            'product' =>  $product
        ]);
    }
}
