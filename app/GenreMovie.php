<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenreMovie extends Model
{
    protected $fillable = [
        "id",
        "title",
        "created_at",
        "updated_at",
    ];

    protected $hidden = [
    ];
}
