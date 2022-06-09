<?php

namespace Chungu\Models;

class Product extends Model {

    public function categories() {
        return $this->belongsTo(Category::class);
    }
}
