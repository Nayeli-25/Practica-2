<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;


$factory->define(App\Models\Personas::class, function (Faker $faker) {
    return [
        'Nombre' => $faker->firstname,
        'Apellido' => $faker->lastname,
        'Edad' => $faker->numberBetween(18,65),
    ];
});