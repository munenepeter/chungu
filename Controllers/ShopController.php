<?php

namespace Chungu\Controllers;


use Chungu\Models\Category;
use Chungu\Models\Product;

class ShopController extends Controller {


    public function index() {

        return view('shop', [
            'earrings' =>  $this->paginate($this->getProducts('earrings'), 3),
            'necklaces' =>  $this->paginate($this->getProducts('necklaces'), 3),
            'anklets' =>  $this->paginate($this->getProducts('anklets'), 3),
            'bracelets' =>  $this->paginate($this->getProducts('bracelets'), 3)
        ]);
    }

    public function category($category) {

        if (strpos($category, '/') !== false) {

            $params = explode('/', $category);
            return $this->showItem(...$params);
        } else {
            $category =  Category::where(['name'], ['name', $category])[0]->name;
            return view('category', [
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
                        $productByCode = $product->query("SELECT * FROM products WHERE id='" . $_POST["code"] . "'")[0];
                        $itemArray = array($productByCode['id'] => array('name' => $productByCode['name'], 'code' => $productByCode['id'], 'quantity' => $_POST["quantity"], 'price' => $productByCode['price']));

                        if (!empty($_SESSION["cart_item"])) {
                            if (in_array($productByCode['id'], $_SESSION["cart_item"])) {
                                foreach ($_SESSION["cart_item"] as $k => $v) {
                                    if ($productByCode['id'] == $k)
                                        $_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
                                }
                            } else {
                                $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);
                            }
                        } else {
                            $_SESSION["cart_item"] = $itemArray;
                        }
                    }
                    break;
                case "remove":
                    if (!empty($_SESSION["cart_item"])) {
                        foreach ($_SESSION["cart_item"] as $k => $v) {
                            if ($_POST["code"] == $k)
                                unset($_SESSION["cart_item"][$k]);
                            if (empty($_SESSION["cart_item"]))
                                unset($_SESSION["cart_item"]);
                        }
                    }
                    break;
                case "empty":
                    unset($_SESSION["cart_item"]);
                    break;
            }
        }

        return view('cart');
    }
    public function cart_show() {
        return view('cart');
    }
}
