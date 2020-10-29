<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

/**$faker = Carbon\Factory::create('es_ES');**/

$factory->define(App\Models\Comentarios::class, function (Faker $faker) {
    return [
        'comentario' => $faker->text(50),
        'persona_id' => factory(App\Models\Personas::class),
        'producto_id' => factory(App\Models\Productos::class),
        'created_at' => $faker->date,
        'updated_at' => now(),
    ];
});
