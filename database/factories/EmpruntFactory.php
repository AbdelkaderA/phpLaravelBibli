<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Emprunt;
use Faker\Generator as Faker;
use App\Models\Adherent;
use App\Models\Book;

$factory->define(Emprunt::class, function (Faker $faker) {
    $Adherent = Adherent::inRandomOrder()->first();
    $Book = Book::inRandomOrder()->first();
    return [
        'adherent_id' => $Adherent,
        'book_id' => $Book,
        'date_debut' => $faker->date(),
        'date_fin' => $faker->date(),
        'date_fin_reel' => $faker->date(),
    ];
});
