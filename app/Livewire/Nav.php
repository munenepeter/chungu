<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Shop\Category;

class Nav extends Component
{
    

    public function render()
    {
     
        return view('livewire.nav', [
            'categories' => Category::select('name','slug')->get()
        ]);
    }
}
