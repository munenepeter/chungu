<?php

namespace Chungu\Controllers;

use Chungu\Models\User;

class PagesController extends Controller {
    
    public function index() {
        return view('index');
    }
    public function test() {
        return view('test');
    }
    public function post_test() {
       dd($_POST);
    }

    public function signin() {
        return view('signin');
    }
    public function dashboard() {
        //check if the user is logged in
        $data = [
            'allEarrings' => count($this->getProducts('earrings')), 
            'aEarrings' => $this->getAvailable('earrings'),
            'allNecklaces' => count($this->getProducts('necklaces')), 
            'aNecklaces' => $this->getAvailable('necklaces'),
            'allAnklets' => count($this->getProducts('anklets')), 
            'aAnklets' => $this->getAvailable('anklets'),
            'allBracelets' => count($this->getProducts('bracelets')), 
            'aBracelets' => $this->getAvailable('bracelets')   
        ];
        return view('dashboard', [
            'data' => $data            
        ]);
    }
    public function users() {
        //check if the user is logged in
        $users =  User::all();
        return view('adduser', [
            'users' => $users
        ]);
    }
}
