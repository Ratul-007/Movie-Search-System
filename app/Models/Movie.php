<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'omdb_id',
        'title',
        'year',
        'poster',
        'plot',
        'genre',
        'director',
        'actors',
        'runtime',
        'imdb_rating',
        'rt_rating',
    ];
}
