<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Boek;
use Faker\Generator as Faker;

$factory->define(Boek::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph(15),
        'pagina' => $faker->randomFloat(0, 2, 3),
        'created_at' => $faker->dateTimeThisDecade('now', 'Europe/Amsterdam'),
        'updated_at' => $faker->dateTimeThisDecade('now', 'Europe/Amsterdam')
    ];
});
