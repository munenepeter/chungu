<?php

namespace Chungu\Controllers;

use Chungu\Models\Category;
use Chungu\Models\Source;
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
            $data[$category->name]['image'] = $category->image;
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
    public function sources() {
        //check if the user is logged in
        //$this->middleware('auth');
        return view('sources');
    }
    public function store_source()
    {
        //$this->middleware('admin');  
        //validate the input
        $this->request()->validate($_POST, [
            'name' => 'required',
            'email' => 'required',
            'location' => 'required',
            'link' => 'required',
            'phone' => 'required',
        ]);
        //create user
        Source::create([
            'name' => $this->request()->form('username'),
            'email' => $this->request()->form('email'),
            'location' => $this->request()->form('location'),
            'link' => $this->request()->form('link'),
            'phone' => $this->request()->form('phone'), 
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        //notify    
        notify("New Source added");

        //redirect back
        return redirectback();
    }
    public function privacy() {
        return view('privacy-policy');
    }
}
