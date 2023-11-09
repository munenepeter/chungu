<?php

namespace App\Models\Poems;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Poems\Poem;

class Category extends Model
{
    use HasFactory;
      /**
     * @var string
     */
    protected $table = 'poem_categories';

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'is_visible' => 'boolean',
    ];

    public function posts(): HasMany
    {
        return $this->hasMany(Poem::class, 'poem_category_id');
    }
}
