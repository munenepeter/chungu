<?php

namespace Chungu\Controllers;

class EarringController {
    public function index() {
        return view('addearrings.view.php');
    }
    //addearring
    public function addearrings() {
    
       dd($_POST);
    }
}
