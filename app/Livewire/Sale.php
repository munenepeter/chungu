<?php

namespace App\Livewire;

use App\Models\Shop\Product;
use Livewire\Component;

class Sale extends Component {

    public string $sale_title = '';

    public function mount() {
        $this->sale_title = (date('d') > 10 ? 'Late ' : 'Early ') . date('F') . ' Offers';
    }

    public function render() {

        $saleItems = Product::where('is_visible', 1)->with('media')->take(5)->get();

        return view('livewire.sale')->with('saleItems', $saleItems);
    }
}
