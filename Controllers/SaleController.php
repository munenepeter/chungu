<?php

namespace Chungu\Controllers;

use Chungu\Models\Category;
use Chungu\Models\User;
use Chungu\Controllers\Controller;
use Chungu\Models\Product;

class SaleController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $sales = [];
        // foreach (Category::all() as $category) {
        //     $sales[$category->name]['all'] = count($this->getProducts($category->name));
        //     $sales[$category->name]['available'] = $this->getAvailable($category->name);
        // }
        $sales =  Product::select("status", "out of stock");

        $sales = array_map(function ($sales) {
            $sales->category = $this->category($sales->category_id);
            $sales->total = (int)$sales->quantity * (int)$sales->price;
            return $sales;
        }, $sales);


        return view('sales', [
            'sales' => $sales
        ]);
    }
    public function create() {

        $this->middleware('admin');
        //validate the input


        //redirect back
        return redirectback();
    }

    public function show($id) {
        $product = User::find($id);

        return view('product', [
            'product' =>  $product
        ]);
    }
    public function edit($id) {
        $product = User::find($id);

        return view('product', [
            'product' =>  $product
        ]);
    }
    public function update() {

        $id = $this->request()->form('id');
        //validate the input
     

        //redirect back
        return redirectback();
    }
    public function delete() {
        $id = $this->request()->form('id');

        User::delete('id', $id);

        notify(" User {$id} has been deleted");
        return redirectback();
    }
}
