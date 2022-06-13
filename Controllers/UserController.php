<?php

namespace Chungu\Controllers;

use Chungu\Models\User;
use Chungu\Models\Product;
use Chungu\Models\Category;

class UserController extends Controller {

    public function index() {
        $users =  User::all();
        return view('users', [
            'users' => $users
        ]);
    }
    public function create() {
        //validate the input
        $this->request->validate($_POST, [
            'username' => 'required',
            'email' => 'required',
            'role' => 'required'
        ]);
        //create user
        User::create([
            'id' => uniqid(),
            'username' => $this->request->form('username'),
            'email' => $this->request->form('email'), 
            'role' => $this->request->form('role'), 
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
        $this->request->validate($_POST, [
            'category' => 'required'
        ]);

        //create product
        Category::update([
            'name' => $this->request->form('category'),
            'image' => $image,
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ], 'id', $category_id);

        notify("Category {$category_id} has been updated");

        $this->index();
    }
    public function delete() {
        $id = $this->request->form('id');
        $image = Category::find($id)[0]->image;

        delete_file(__DIR__ . "/../$image");

        Category::delete('id', $id);

        notify("Category {$id} has been deleted");
        return redirectback();
    }
}
