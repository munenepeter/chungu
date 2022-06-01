<?php

namespace Chungu\Controllers;

use Chungu\Models\Category;
use Chungu\Models\Product;

class ProductController extends Controller {


    protected function createProduct($category) {
        $uploadlocation = '/static/imgs/' . $category;
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
            'color' => 'required',
            'quantity' => 'required'
        ]);
        //get the id of earring in the categories table
         $category_id = Category::query("Select `id` from categories  where `name` = \"$category\"")[0]['id'];
 
        //create product
       // Product::create(
            
            $data = [
            'id' => uniqid(),
            'name' => $this->request->form('name'),
            'color' => $this->request->form('color'),
            'price' => $this->request->form('price'),
            'quantity' => $this->request->form('quantity'),
            'image' => $image,
            'category_id' => $category_id,
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ];
    
    dd($data);
        //notify    
        notify("New Item added");
    }
    public function earrings() {
        return view('addearrings');
    }

    public function addearrings() {


        $this->createProduct('earrings');

      //  return view('addearrings');
    }

    public function necklaces() {
        return view('addnecklaces');
    }
    public function addnecklaces() {

        $this->createProduct('necklaces');

        return view('addnecklaces');
    }
}
