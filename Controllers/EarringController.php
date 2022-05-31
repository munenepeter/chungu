<?php

namespace Chungu\Controllers;

use Chungu\Models\Product;
use Chungu\Core\Mantle\Upload;
use Chungu\Core\Mantle\Request;

class EarringController extends Controller {

    public function index() {
        return view('addearrings');
    }

    public function addearrings() {
        $uploadlocation = '/static/imgs/earrings';
        $image = "path-to_dummy";



        $image =  $this->upload(
            $_FILES['image'],
            $uploadlocation,
            10, //mbs 
            ['image/jpeg', 'image/png']
        );

        //validate the input
        $this->request->validate($_POST, [
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ]);
        //get the id of earring in the categories table
        $category_id = 1;
        //create product
        Product::create([
            'id' => uniqid(),
            'name' => $this->request->form('name'),
            'price' => $this->request->form('price'),
            'quantity' => $this->request->form('quantity'),
            'image' => $image,
            'category_id' => $category_id,
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);

        Request::$errors =  ["New Item added"];

        return view('addearrings');
    }
}
