<?php

namespace Chungu\Controllers;

use Chungu\Models\Category;

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
            $data[$category->name]['image'] = $category->image;
            $data[$category->name]['all'] = count($this->getProducts($category->name));
            $data[$category->name]['available'] = $this->getAvailable($category->name);
        }

        return view('dashboard', [
            'data' => $data
        ]);
    }

    public function privacy() {
        return view('privacy-policy');
    }
}
