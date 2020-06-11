<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $fillable = [
        "id",
        "title",
        "release_date",
        "duration",
        "created_at",
        "updated_at",
        "genre_id",
        "director_id",
    ];

    protected $hidden = [
    ];
}
