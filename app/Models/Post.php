<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
   * Атрибуты, для которых разрешено массовое назначение.
   *
   * @var array
   */
  protected $fillable = ['rating'];
}
