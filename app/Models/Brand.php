<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model implements HasMedia {
    use HasFactory;
    use InteractsWithMedia;

    

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'is_visible' => 'boolean',
    ];


    public function products(){
        return $this->hasMany(Product::class);
    }
}
