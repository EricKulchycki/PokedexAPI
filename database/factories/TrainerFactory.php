<?php

use Faker\Generator as Faker;

$factory->define(App\Trainers::class, function (Faker $faker) {
    return [
        'email' => $faker->text(50),
        'password' => $faker->text(25)
    ];
});
