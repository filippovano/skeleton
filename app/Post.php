<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
      /**
     * Получить статью данного комментария.
     */
    public function author()
    {
        return $this->belongsTo(\App\Author::class, 'author_id');
    }
}
