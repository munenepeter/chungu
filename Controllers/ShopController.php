<?php

namespace Chungu\Controllers;

use Chungu\Core\Mantle\Session;
use Chungu\Models\Category;
use Chungu\Models\Product;

class ShopController extends Controller {


    public function index() {

        return view('shop', [
            'categories' =>  Category::all()
        ]);
    }

    public function new_arrivals() {
        
        $products = [];

        return view('new-arrivals', [
            'products' =>  $products
        ]);
    }

    public function items($category) {

        if (strpos($category, '/') !== false) {

            $params = explode('/', $category);
            return $this->showItem(...$params);
        } else {
            $category =  Category::where(['name'], ['name', $category])[0]->name;
            return view('items', [
                'category_name' => $category,
                'products' =>  $this->getProducts($category)
            ]);
        }
    }

 
    public function showItem($category, $id) {
        $product = Product::find($id);
        return view('item', [
            'category' => $category,
            'product' =>  $product
        ]);
    }


    public function cart() {
        $product =  new \Chungu\Models\Product();
        if (!empty($_POST["action"])) {
            switch ($_POST["action"]) {
                case "add":
                    if (!empty($_POST["quantity"])) {
                        $productByID = $product->query("SELECT * FROM products WHERE id='" . trim($_POST["code"]) . "'")[0];
                        $itemArray = [
                            $productByID['id'] => [
                                'id' => $productByID['id'],
                                'name' => $productByID['name'],
                                'image' => $productByID['image'],
                                'quantity' => $_POST["quantity"],
                                'price' => $productByID['price']
                            ]
                        ];

                        if (!empty(Session::get("cart_item"))) {
                            if (in_array($productByID['id'], Session::get("cart_item"))) {
                                foreach (Session::get("cart_item") as $k => $v) {
                                    if ($productByID['id'] == $k)
                                        Session::get("cart_item")[$k]["quantity"] = $_POST["quantity"];
                                }
                            } else {
                                $_SESSION["cart_item"] = array_merge(Session::get("cart_item"), $itemArray);
                            }
                        } else {
                            $_SESSION["cart_item"] = $itemArray;
                        }
                    }
                    break;
                case "remove":
                    if (!empty(Session::get("cart_item"))) {
                        foreach (Session::get("cart_item") as $k => $v) {
                            if ($_POST["code"] === $k)
                                unset($_SESSION["cart_item"][$k]);
                            if (empty(Session::get("cart_item")))
                                Session::unset("cart_item");
                        }
                    }
                    break;
                case "empty":
                    Session::unset("cart_item");
                    break;
            }
        }
        if (!empty(Session::get("cart_item"))) {
            echo json_encode(Session::get("cart_item"));
        } else {
            echo json_encode('No Items');
        }

        exit;
        return view('cart');
    }
    public function cart_show() {
        return view('cart');
    }
    public function like() {
        $id = $this->request()->form('id');

        //  Like::create([
        //     'product_id' => $id
        //  ]);

        return redirectback();
    }
}
