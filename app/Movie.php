<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table="movies";
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'cast', 'direction', 'duration',
    ];
}
