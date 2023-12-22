<?php

namespace App\Livewire;

use App\Models\Shop\Category;
use Livewire\Component;

class Navbar extends Component {
    public function render() {

        $categories =  cache()->remember('nav-categories', now()->addMinutes(10), function () {
            return Category::has('products')->take(4)->get(['name', 'slug']);
        });
       
        return view('livewire.navbar')->with('categories', $categories);
    }
}
