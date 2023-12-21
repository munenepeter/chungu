<?php

namespace App\Livewire;

use App\Models\Shop\Category;
use Livewire\Component;

class Navbar extends Component {
    public function render() {
        return view('livewire.navbar', [
            'categories' => Category::has('products')->take(5)->get('name')
        ]);
    }
}
