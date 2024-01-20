<?php

namespace App\Livewire\Blog;

use Livewire\Attributes\Layout;
use Livewire\Component;

class BlogIndex extends Component
{

    #[Layout('layouts.blog')]
    public function render()
    {
        return view('livewire.blog.blog-index');
    }
}
