<?php

namespace Chungu\Controllers;

use Chungu\Models\User;
use Chungu\Core\Mantle\Request;

class UserController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $users =  User::all();
        return view('users', [
            'users' => $users
        ]);
    }
    public function create() {

        $this->middleware('admin');
        //validate the input
        $this->request()->validate($_POST, [
            'firstname' => 'required',
            'lastname' => 'required',
            'role' => 'required'
        ]);

        if (!empty(Request::$errors)) {
            return view('users', [
                'errors' => Request::$errors
            ]);
      
        }
        //username

        //flastname
        $username = mb_substr($this->request()->form('firstname'), 0, 1, "UTF-8") . $this->request()->form('lastname');
        //create user
        User::create([
            'id' => uniqid('CU-'),
            'first_name' => $this->request()->form('firstname'),
            'last_name' => $this->request()->form('lastname'),
            'username' => strtolower($username),
            'email' => strtolower(trim($username . "@chungu.co.ke")),
            'role' => $this->request()->form('role'),
            'password' => md5('1234'), //default one
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        //notify    
        notify("New User added");

        //redirect back
        redirect("/-/users");
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
            `username` = '$username',
            `email` = '$email', 
            `role` = '$role',  
            `updated_at` = '$updated_at' 
            ",
            'id',
            $id
        );



        //redirect back
        redirect("/-/users");
        //notify    
        notify("User {$id} has been updated");
    }
    public function delete() {
        $id = $this->request()->form('id');

        User::delete('id', $id);

        notify(" User {$id} has been deleted");
        redirect("/-/users");
    }


    public function account() {

        $user = User::find(auth()->id);

        return view('account', [
            'user' => $user
        ]);
    }

    public function account_edit() {

        $user = User::find(auth()->id);

        return view('account_edit', [
            'user' => $user
        ]);
    }
    public function account_edit_store() {



        $data = $this->request()->handleAjaxForm();

        $this->request()->validate($_POST, [
            'first_name' => 'required',
            'last_name' => 'required'
        ]);

        //validate

        $first_name = $this->request()->form('first_name');
        $last_name = $this->request()->form('last_name');
        $gender = $this->request()->form('gender');
        $phone_no = $this->request()->form('phone_no');
        $address = $this->request()->form('address');
        $birthday = $this->request()->form('birthday');
        //  $password = md5($this->request()->form('password')); 
        $updated_at = date('Y-m-d H:i:s', time());
        //create product
        User::update(
            "
            `first_name` = '$first_name',
            `last_name` = '$last_name',
            `gender` = '$gender', 
            `phone_no` = '$phone_no', 
            `address` = '$address', 
            `birthday` = '$birthday',          
            `updated_at` = '$updated_at' 
            ",
            'id',
            auth()->id
        );

        $data['message'] = "Successfully Updated your details!";

        echo  json_encode($data);
        return;
    }
}
