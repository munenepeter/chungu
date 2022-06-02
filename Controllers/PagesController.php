<?php

namespace Chungu\Controllers;

class PagesController {
    public function index() {
        return view('index');
    }

    public function signin() {
        return view('signin');
    }
    public function dashboard() {
        //check if the user is logged in
        return view('dashboard');
    }
    public function users() {
        //check if the user is logged in
        return view('adduser');
    }
}
