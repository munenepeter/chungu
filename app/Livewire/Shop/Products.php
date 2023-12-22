<?php

namespace App\Livewire\Shop;

use App\Models\Shop\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Products extends Component {
    public $products;

    public function mount($slug) {
        $this->products = Product::whereHas('categories', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })->get();
    }
    #[Layout('layouts.app')]
    public function render() {
        return view('livewire.shop.products');
    }
}
