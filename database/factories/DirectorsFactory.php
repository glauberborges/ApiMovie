<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cast;
use App\Directors;
use App\GenreMovie;
use App\Model;
use Faker\Generator as Faker;

$factory->define(GenreMovie::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
    ];
});
