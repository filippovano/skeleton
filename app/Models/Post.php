<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
      /**
     * Получить статью данного комментария.
     */
    public function author()
    {
        return $this->belongsTo(\App\Models\Author::class, 'author_id');
    }
}
