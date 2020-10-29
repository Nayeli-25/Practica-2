<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;


$factory->define(App\Models\Productos::class, function (Faker $faker) {
    return [
        'Producto' => $faker->sentence(2),
    ];
});
