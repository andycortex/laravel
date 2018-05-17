<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table="genres";
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 
    ];
}
