<?php

namespace App\Livewire\Shop;

use App\Models\Shop\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Products extends Component {
    public $products;

    public function mount($product) {
        $this->products = Product::whereHas('categories', function ($query) use ($product) {
            $query->where('slug', $product);
        })->get();
    }
    #[Layout('layouts.app')]
    public function render() {
        return view('livewire.shop.products');
    }
}
