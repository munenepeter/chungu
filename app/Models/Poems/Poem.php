<?php

namespace App\Models\Poems;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Poems\Author;
use App\Models\Poems\Category;

class Poem extends Model
{
    use HasFactory;


    /**
     * @var string
     */
    protected $table = 'poem_poems';

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'published_at' => 'date',
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class, 'poem_author_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'poem_category_id');
    }

}
