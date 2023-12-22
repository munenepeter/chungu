<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class categorySlider extends Component {

    public $categories;

    public function __construct() {
        $this->categories = cache()->remember('sale_items_cache', now()->addMinutes(10), function () {
            return $this->categories->map(function ($category) {
                $media = $category->getFirstMedia('product-images');

                if ($media) {
                    $category->image = asset($media->getUrl());
                } else {
                    // Set a default image or handle the case where there is no media
                    $category->image = asset('https://images.pexels.com/photos/1563356/pexels-photo-1563356.jpeg?auto=compress&cs=tinysrgb&w=600');
                }

                return $category;
            })->all();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {

        $this->categories =  cache()->remember('sale_items_cache', now()->addMinutes(10), function () {
            return $this->categories->flatMap(function ($saleItem) {
                return $saleItem->getMedia('product-images')->map(function ($image) {
                    return asset($image->getUrl());
                });
            })->all();
        });

        return view('components.category-slider');
    }
}
