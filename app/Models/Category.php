<?php

namespace App\Models;

use App\Models\Product;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
