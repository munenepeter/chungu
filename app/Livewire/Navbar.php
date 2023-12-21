<?php

namespace App\Livewire;

use App\Models\Shop\Category;
use Livewire\Component;

class Navbar extends Component {
    public function render() {
        
        $categories =  cache()->remember('categories', now()->addMinutes(10), function () {
            return Category::has('products')->take(5)->get('name');
        });

        return view('livewire.navbar')->with('categories', $categories);
    }
}
