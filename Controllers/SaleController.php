<?php

namespace Chungu\Controllers;

use Chungu\Models\User;

class SaleController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() { 
        return view('sales');
    }
    public function create() {
        
        $this->middleware('admin');  
        //validate the input
        $this->request()->validate($_POST, [
            'username' => 'required',
            'email' => 'required',
            'role' => 'required'
        ]);
        //create user
        User::create([
            'username' => $this->request()->form('username'),
            'email' => $this->request()->form('email'),
            'role' => $this->request()->form('role'),
            'password' => md5('1234'), //default one
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        //notify    
        notify("New User added");

        //redirect back
        return redirectback();
    }

    public function show($id) {
        $product = User::find($id);

        return view('product', [
            'product' =>  $product
        ]);
    }
    public function edit($id) {
        $product = User::find($id);

        return view('product', [
            'product' =>  $product
        ]);
    }
    public function update() {

        $id = $this->request()->form('id');
        //validate the input
        $this->request()->validate($_POST, [
            'username' => 'required'
        ]);


        $username = $this->request()->form('username');
        $email = $this->request()->form('email');
        $role = $this->request()->form('role');
        $updated_at = date('Y-m-d H:i:s', time());
        //create product
        User::update(
            "
            'username' = '$username',
            'email' = '$email', 
            'role' = '$role',  
            'updated_at' = '$updated_at' 
            ",
            'id',
            $id
        );

        notify("User {$id} has been updated");

        //redirect back
        return redirectback();
    }
    public function delete() {
        $id = $this->request()->form('id');

        User::delete('id', $id);

        notify(" User {$id} has been deleted");
        return redirectback();
    }
}
