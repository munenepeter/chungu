<?php

namespace Chungu\Controllers;

use Chungu\Models\Category;
use Chungu\Models\Product;

class CategoryController extends Controller {

    public function __construct() {
        $this->middleware('admin');
    }

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
            ['image/jpeg', 'image/png', 'image/svg+xml']
        );

        //validate the input
        $this->request()->validate($_POST, [
            'category' => 'required'
        ]);

        //create product
        Category::create([
            'id' => uniqid('cat-'),
            'name' => slug($this->request()->form('category')),
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
        $category_id = Category::find($id);

        $uploadlocation = '/static/imgs/categories';
        $image = "path-to_dummy";

        $image =  $this->upload(
            $_FILES['image'],
            $uploadlocation,
            10, //mbs 
            ['image/jpeg', 'image/png']
        );

        //validate the input
        $this->request()->validate($_POST, [
            'category' => 'required'
        ]);

        //create product
        Category::update([
            'name' => $this->request()->form('category'),
            'image' => $image,
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ], 'id', $category_id);

        notify("Category {$category_id} has been updated");

        $this->index();
    }
    public function delete() {
        $id = $this->request()->form('id');
        $image = Category::find($id)->image;

        if (!delete_file(__DIR__ . "/../$image")) {
            notify(" Product could not deleted");
            redirect("/-/products");
        }

        Category::delete('id', $id);

        notify("Category {$id} has been deleted");
        return redirectback();
    }
}
