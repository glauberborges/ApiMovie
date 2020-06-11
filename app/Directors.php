<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directors extends Model
{
    protected $fillable = [
        "id",
        "name",
        "sex",
        "nationality",
        "created_at",
        "updated_at",
    ];

    protected $hidden = [
    ];
}
