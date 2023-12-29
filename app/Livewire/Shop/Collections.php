<?php

namespace App\Livewire\Shop;

use App\Models\Blog\Category;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Collections extends Component {

    #[Layout('layouts.app')]
    public function render() {

        $categories = Category::all()->map(function ($category) {
            $category->image = asset('storage/placeholder-image.jpeg');
            return $category;
        });

        return view('livewire.shop.collections')->with('categories', $categories);
    }
}
