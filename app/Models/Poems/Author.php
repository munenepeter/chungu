<?php

namespace App\Models\Poems;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Poems\Poem;

class Author extends Model
{
    use HasFactory;

     /**
     * @var string
     */
    protected $table = 'poem_authors';

    public function posts(): HasMany
    {
        return $this->hasMany(Poem::class, 'poem_author_id');
    }
}
