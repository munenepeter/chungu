<?php

namespace App\View\Components;

use App\Models\Shop\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategorySlider extends Component {

    public $categories;

    public function __construct() {
        $this->categories = cache()->remember('categories', now()->addMinutes(10), function () {
            return Category::has('products')->where('is_visible', 1)->get(['name', 'slug'])->map(function ($category) {
                $category->image = asset('storage/placeholder-image.jpeg');
                return $category;
            });
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {

        return view('components.category-slider');
    }
}
