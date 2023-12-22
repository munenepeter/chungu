<?php

namespace App\Livewire\Shop;

use App\Models\Blog\Category;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Collections extends Component {

    #[Layout('layouts.app')]
    public function render() {
        
        $categories = Category::all();

        return view('livewire.shop.collections')->with('categories', $categories);
    }
}
