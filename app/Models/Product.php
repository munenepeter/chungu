<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'color', 'category', 'price', 'quantity', 'description'
    ];
    public $timestamps = true;

    public function images() {
        return $this->hasMany(Image::class);
    }
}
