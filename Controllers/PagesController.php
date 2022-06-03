<?php

namespace Chungu\Controllers;

use Chungu\Models\User;

class PagesController extends Controller {
   
    private function getAvailable($product) {
        # code...
    }
    public function index() {
        return view('index');
    }

    public function signin() {
        return view('signin');
    }
    public function dashboard() {
        //check if the user is logged in
        $this->getAvailable('earrings');
        

        return view('dashboard', [
            'allEarrings' => count($this->getProducts('earrings'))
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
