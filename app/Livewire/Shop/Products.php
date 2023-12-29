<?php

namespace App\Livewire\Shop;

use App\Models\Shop\Category;
use App\Models\Shop\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component {

    use WithPagination;

    public $products;
    public $category;

    public function mount($product) {
        $this->products = Product::with('categories')->whereHas('categories', function ($query) use ($product) {
            $query->where('slug', $product);
        })->get();
        $this->category = Category::firstWhere('slug', $product);
    }
    #[Layout('layouts.app')]
    public function render() {
        return view('livewire.shop.products');
    }
}
