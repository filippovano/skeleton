<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * @package App\Models
 *
 * @property int $id
 * @property-read  Author $author
 * @property string $header
 * @property string $content
 * @property int $rating
 * @property \Illuminate\Support\Carbon created_at
 * @property \Illuminate\Support\Carbon updated_at
 */
class Post extends Model
{
      /**
     * Получить статью данного комментария.
     */
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }
}
