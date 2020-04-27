<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ad;
use Faker\Generator as Faker;

$factory->define(Ad::class, function (Faker $faker) {
    return [
        'title'       => $faker->name,
        'description' => $faker->realText,
        'price'       => $faker->numberBetween(3000, 999990),
    ];
});
