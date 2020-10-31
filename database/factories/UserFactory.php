<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use App\Models\Personas;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'Nombre' => $faker->name,
        'Persona_id' => Personas::inRandomOrder()->value('id') ?: factory(Personas::class),
        'email' => $faker->unique()->safeEmail,
        'Contraseña' => Hash::make('1234567'), 
        'Rol' => $faker->randomElement(['admin', 'suscriptor']),
        'email_verified_at' => now(),
        'remember_token' => Str::random(10),
    ];
});
