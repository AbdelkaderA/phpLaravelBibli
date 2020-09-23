<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Emprunt;
use Faker\Generator as Faker;

$factory->define(Emprunt::class, function (Faker $faker) {
    return [
        'book_id' => $faker->sentence(3),
        'adherent_id' => $faker->sentence(3),
    ];
});
