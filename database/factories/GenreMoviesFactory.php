<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cast;
use App\Directors;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Directors::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'sex' => $faker->randomElement($array = array ('M','F')),
        'nationality' => $faker->country,
    ];
});
