<?php

namespace Chungu\Controllers;

use Chungu\Models\Category;
use Chungu\Models\User;

class PagesController extends Controller {

    public function index() {
        return view('index');
    }

    public function signin() {
        return view('signin');
    }
    public function dashboard() {
        //check if the user is logged in
        $this->middleware('auth');

        $data = [];
        foreach (Category::all() as $category) {
            $data[$category->name]['name'] = $category->name;
            $data[$category->name]['all'] = count($this->getProducts($category->name));
            $data[$category->name]['available'] = $this->getAvailable($category->name);
        }

        return view('dashboard', [
            'data' => $data
        ]);
    }

    public function profile() {
        //check if the user is logged in
        $this->middleware('auth');

        $user = User::find(auth()->id);

        return view('profile', [
            'user' => $user
        ]);
    }
}
