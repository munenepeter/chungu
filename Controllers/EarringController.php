<?php

namespace Chungu\Controllers;

use Chungu\Models\Product;
use Chungu\Core\Mantle\Upload;
use Chungu\Core\Mantle\Request;

class EarringController {
    public function index() {
        return view('addearrings.view.php');
    }
    //addearring
    public function addearrings() {
        $uploadlocation = '/static/imgs/earrings';
        $image = "path-to_dummy";

        // upload the file
        if (!empty($_FILES['image'])) {

            $upload = Upload::factory($uploadlocation);

            $upload->file($_FILES['image']);

            //set max. file size (in mb)
            $upload->set_max_file_size(10);

            //set allowed mime types
            $upload->set_allowed_mime_types(['image/jpeg', 'image/png']);

            $results = $upload->upload();

            $image = $results['path'];
        }

        /*
        $request->upload(
            $_FILES['images'],
             path, 
             max, 
             allowed mime
        );
        
        */


        $request =  new Request();
        //validate the input
        $request->validate($_POST, [
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ]);
        //get the id of earring in the categories table
        $category_id = 1;
        //create product
        Product::create([
            'id' => uniqid(),
            'name' => $request->form('name'),
            'price' => $request->form('price'),
            'quantity' => $request->form('quantity'),
            'image' => $image,
            'category_id' => $category_id
        ]);
    }
}
