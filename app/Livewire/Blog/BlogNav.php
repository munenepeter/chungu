<?php

namespace App\Livewire\Blog;

use App\Models\Blog\Category;
use Livewire\Component;

class BlogNav extends Component
{
    public function render()
    {

        $categories =  cache()->remember('nav-categories', now()->addMinutes(10), function () {
            return Category::where('is_visible', 1)->take(4)->get(['name', 'slug']);
        });

        return view('livewire.blog.blog-nav')->with('categories', $categories);
    }
}
