<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model implements HasMedia {
    use HasFactory;
    use InteractsWithMedia;



    protected $casts = [
        'is_visible' => 'boolean',
    ];


    public function products() {
        return $this->belongsToMany(Product::class);
    }
}
