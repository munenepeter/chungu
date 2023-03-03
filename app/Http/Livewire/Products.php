<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Products extends Component {

    public $products, $image, $name, $color, $category, $price, $quantity, $description, $productId, $updateProduct = false, $addProduct = false;

    /**
     * delete action listener
     */
    protected $listeners = [
        'deleteProductListner' => 'deleteProduct'
    ];

    /**
     * List of add/edit form rules
     */
    protected $rules = [
        'name' => 'required',
        'color' => 'required',
        'price' => 'required',
        'quantity' => 'required',
        'image' => 'required'
    ];

    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields() {
        $this->name = '';
        $this->color = '';
        $this->price = '';
        $this->quantity = '';
        $this->image = '';
    }

    /**
     * render the product data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render() {
        $this->products = Product::all();
        return view('livewire.products.products');
    }

    /**
     * Open Add Product form
     * @return void
     */
    public function addProduct() {
        $this->resetFields();
        $this->addProduct = true;
        $this->updateProduct = false;
    }
    /**
     * store the user inputted product data in the products table
     * @return void
     */
    public function storeProduct() {
        $this->validate();
        try {
            Product::create([
                'name' => $this->name,
                'color' => $this->color,
                'price' =>  $this->price,
                'quantity' => $this->quantity,
                'image' =>  $this->images,
                'description' =>  $this->description

            ]);
            session()->flash('success', 'Product Created Successfully!!');
            $this->resetFields();
            $this->addProduct = false;
        } catch (\Exception $ex) {
            session()->flash('error', 'Something goes wrong!!');
        }
    }

    /**
     * show existing product data in edit product form
     * @param mixed $id
     * @return void
     */
    public function editProduct($id) {
        try {
            $product = Product::findOrFail($id);
            if (!$product) {
                session()->flash('error', 'Product not found');
            } else {
                $this->name = $product->name;
                $this->color = $product->color;
                $this->price = $product->price;
                $this->image = $product->image;
                $this->quantity = $product->quantity;
                $this->description = $product->description;
                $this->productId = $product->id;
                $this->updateProduct = true;
                $this->addProduct = false;
            }
        } catch (\Exception $ex) {
            session()->flash('error', 'Something goes wrong!!');
        }
    }

    /**
     * update the product data
     * @return void
     */
    public function updateProduct() {
        $this->validate();
        try {
            Product::whereId($this->productId)->update([
                'name' => $this->name,
                'email' => $this->email,
                'location' => $this->location,
                'phone' => $this->phone,
                'notes' => $this->notes
            ]);
            session()->flash('success', 'Product Updated Successfully!!');
            $this->resetFields();
            $this->updateProduct = false;
        } catch (\Exception $ex) {
            session()->flash('success', 'Something goes wrong!!');
        }
    }

    /**
     * Cancel Add/Edit form and redirect to product listing page
     * @return void
     */
    public function cancelProduct() {
        $this->addProduct = false;
        $this->updateProduct = false;
        $this->resetFields();
    }

    /**
     * delete specific product data from the products table
     * @param mixed $id
     * @return void
     */
    public function deleteProduct($id) {
        try {
            Product::find($id)->delete();
            session()->flash('success', "Product Deleted Successfully!!");
        } catch (\Exception $e) {
            session()->flash('error', "Something goes wrong!!");
        }
    }
}
