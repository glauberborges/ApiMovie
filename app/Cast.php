<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cast extends Model
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
