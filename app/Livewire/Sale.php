<?php

namespace App\Livewire;

use App\Models\Shop\Product;
use Livewire\Component;

class Sale extends Component {

    public $sale;
    public string $sale_title = '';

    public function mount() {
        $this->sale = Product::where('is_visible', 1)->take(5)->get();
        $this->sale_title = (date('d') > 10 ? 'Late ' : 'Early ') . date('F') . ' Offers';
    }

    public function render() {
        return view('livewire.sale');
    }
}
