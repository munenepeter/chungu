<?php

namespace Chungu\Models;

use Chungu\Models\Category;

class Product extends Model {

    
    public function categories() {

        $this->belongsTo(Category::class);
        
    }
}
