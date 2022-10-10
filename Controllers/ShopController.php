<?php

namespace Chungu\Controllers;

use Chungu\Core\Mantle\Session;
use Chungu\Models\Category;
use Chungu\Models\Product;

class ShopController extends Controller {


    public function index() {
        $categories = array_map(function($category){
            $category->count = count($this->getProducts($category->name));
            return $category;
        }, Category::all());

        return view('shop', [
            'categories' =>  $categories
        ]);
    }

    public function new_arrivals() {
        $latest_date  =  subtract_date("40 days");
        $products = Product::select('updated_at', ">", $latest_date);
        $products = array_map(function ($products) {
            $products->category = $this->category($products->category_id);
            return $products;
        }, $products);

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
            $products =  array_map(function ($product) {
                $product->category = $this->category($product->category_id);
                return $product;
            }, $this->getProducts($category));

            return view('items', [
                'category_name' => $category,
                'products' =>  $products 
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

    public function cart_2() {
       
        $id = $this->request()->form('product_id');

        if (!isset($_SESSION['cart_items'])) {
            Session::make('cart_items', []);
        }
          
         
        foreach ($_SESSION['cart_items'] as $item) {
            $id = $this->request()->form('product_id');

            if(is_in_cart($id)){
         
                $key = array_search($id, array_column($_SESSION['cart_items'], 'id'));
                unset($_SESSION['cart_items'][$key]);
                unset($id);
                $data['status'] = "Fail";
                $data['message'] = "Item has been removed from cart";
                $data['cartItems'] = $_SESSION['cart_items'];
                echo json_encode($data);
                return;
            }
           
        }
        array_push($_SESSION['cart_items'], Product::find($id));
        $data['cartItems'] = Session::get('cart_items');
        echo json_encode($data);
    }
    /**
     * Get Cart Items
     */
    public function getCartItems() {

        if (!isset($_SESSION['cart_items']) || empty($_SESSION['cart_items'])) {
            $data['status'] = "Fail";
            $data['message'] = "No Items in cart";
            echo json_encode($data);
            return;
        }
        echo json_encode(Session::get('cart_items'));
        return;
    }


    /**
     * Like fn
     */
    public function like() {
        $id = $this->request()->form('product_id');

        if (!isset($_SESSION['liked_products'])) {
            Session::make('liked_products', []);
        }

        if (in_array($id, $_SESSION['liked_products'])) {

            $data['status'] = "Fail";
            $data['message'] = "Item is has already been liked";
            echo json_encode($data);
            return;

            unset($id);
        }

        array_push($_SESSION['liked_products'], $id);
        echo json_encode(Session::get('liked_products'));
        return;
    }
}
