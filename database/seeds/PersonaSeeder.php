<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
            'Nombre' => 'Nayeli',
            'Apellido' => 'Esquivel'
        ]);
        DB::table('personas')->insert([
            'Nombre' => 'Luis',
            'Apellido' => 'Esparza'
        ]);
        DB::table('personas')->insert([
            'Nombre' => 'Nancy',
            'Apellido' => 'Ortiz'
        ]);
        DB::table('personas')->insert([
            'Nombre' => 'Diego',
            'Apellido' => 'Mendez'
        ]);
        DB::table('personas')->insert([
            'Nombre' => 'Carolina',
            'Apellido' => 'Luna'
        ]);
        DB::table('personas')->insert([
            'Nombre' => 'Francisco',
            'Apellido' => 'Díaz'
        ]);
        DB::table('personas')->insert([
            'Nombre' => 'Jose',
            'Apellido' => 'Delgado'
        ]);
        DB::table('personas')->insert([
            'Nombre' => 'Iván',
            'Apellido' => 'Rodríguez'
        ]);
    }
}
