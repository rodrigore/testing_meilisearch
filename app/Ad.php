<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use Searchable;

    protected $fillable = [
        'title',
        'description',
        'price',
    ];
}
