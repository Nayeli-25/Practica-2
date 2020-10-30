<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

/**$faker = Carbon\Factory::create('es_ES');**/

$factory->define(App\Models\Comentarios::class, function (Faker $faker) {
    return [
        'comentario' => $faker->text(50),
        'persona_id' => App\Models\Personas::all()->random()->id,
        'producto_id' => App\Models\Productos::all()->random()->id,
        'created_at' => $faker->date('Y-m-d'),
        'updated_at' => now('Y-m-d'),
    ];
});
