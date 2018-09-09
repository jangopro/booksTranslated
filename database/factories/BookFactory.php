<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'title' => $faker->words($nb = 2, $asText = true),
        'author' => $faker->name($gender = null),
        'ISBN' => $faker->isbn13,
        'lang' => $faker->languageCode
    ];
});
