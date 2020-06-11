<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PvMovieCast extends Model
{

    protected $table = "pv_movie_cast";

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        "id",
        "movie_id",
        "cast_id",
    ];

    protected $hidden = [
    ];
}
