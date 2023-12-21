<?php

namespace App\Livewire;

use App\Models\Shop\Product;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Sale extends Component {

    public string $sale_title = '';

    public function mount() {
        $this->sale_title = (date('d') > 10 ? 'Late ' : 'Early ') . date('F') . ' Offers';
    }

    public function render() {

        $images =  cache()->remember('sale_items_cache', now()->addMinutes(10), function () {
            $saleItems = Product::select('id')
                ->where('is_visible', 1)
                ->with('media')
                ->take(5)
                ->get();

            return $saleItems->flatMap(function ($saleItem) {
                return $saleItem->getMedia('product-images')->map(function ($image) {
                    return asset($image->getUrl());
                });
            })->all();
        });

        return view('livewire.sale')->with('images', $images);
    }
}
