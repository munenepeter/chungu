<?php

namespace Chungu\Controllers;

use Chungu\Models\Category;
use Chungu\Models\Product;

class CategoryController extends Controller {

    public function index() {
        $categories =  Category::all();
        return view('categories', [
            'categories' => $categories
        ]);
    }
    public function create() {

 
        $uploadlocation = '/static/imgs/categories';
        $image = "path-to_dummy";

        $image =  $this->upload(
            $_FILES['image'],
            $uploadlocation,
            10, //mbs 
            ['image/jpeg', 'image/png']
        );

        //validate the input
        $this->request->validate($_POST, [
            'category' => 'required'
        ]);

        //create product
        Category::create([
            'id' => uniqid('cat-'),
            'name' => $this->request->form('category'),
            'image' => $image,
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        //notify    
        notify("New Category added");

        $this->index();
    }
   
    public function show($id) {
        $product = Product::find($id);

        return view('product', [
            'product' =>  $product
        ]);
    }
    public function edit($id) {
        $product = Product::find($id);

        return view('product', [
            'product' =>  $product
        ]);
    }
    public function update($id) {
        $product = Product::find($id);

        return view('product', [
            'product' =>  $product
        ]);
    }
    public function delete($id) {
        $product = Product::find($id);

        return view('product', [
            'product' =>  $product
        ]);
    }
}
