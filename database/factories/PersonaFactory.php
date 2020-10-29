<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;


$factory->define(App\Models\Personas::class, function (Faker $faker) {
    return [
        'Nombre' => $faker->firstname,
        'Apellido' => $faker->lastname,
        /**'email' => $faker->unique()->safeEmail,
        'Contraseña' => Hash::make("1234567"),**/
    ];
});