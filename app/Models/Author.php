<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Author
 * @package App\Models
 *
 * @property int $id
 * @property string $username
 * @property string $fullName
 * @property string $link
 * @property string $image
 * @property \Illuminate\Support\Carbon created_at
 * @property \Illuminate\Support\Carbon updated_at
 */
class Author extends Model
{
    protected $table = 'authors';
}
