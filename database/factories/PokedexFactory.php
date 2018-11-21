<?php

use Faker\Generator as Faker;

$factory->define(App\Pokedex::class, function (Faker $faker) {
    return [
        'name' => $faker->randomLetter,
        'types' => $faker->randomLetter,
        'height' => $faker->randomDigitNotNull,
        'weight' => $faker->randomDigitNotNull,
        'abilities' => $faker->randomLetter,
        'egg_groups' => $faker->randomLetter,
        'stats' => $faker->randomLetter,
        'genus' => $faker->randomLetter,
        'description' => $faker->randomLetter,
    ];
});
