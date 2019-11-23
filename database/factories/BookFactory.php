<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use App\Library;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->paragraph(1),
        'library_id' => Library::all()->random()->id,
    ];
});
