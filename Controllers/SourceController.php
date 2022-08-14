<?php

namespace Chungu\Controllers;

use Chungu\Models\Source;

class SourceController extends Controller {

    public function index() {
        $this->middleware('auth');

        return view('sources', [
            'sources' => Source::all()
        ]);
    }

    public function store_source()
    {
        $this->middleware('auth');  
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
            'name' => $this->request()->form('name'),
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
   
}
