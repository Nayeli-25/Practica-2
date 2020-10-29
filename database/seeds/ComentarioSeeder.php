<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comentarios = factory(App\Models\Comentarios::class, 100)->create();
        
        /**DB::table('comentarios')->insert([
            'comentario' => 'Excelente',
            'persona_id' => '1',
            'producto_id' => '4'
        ]);
        DB::table('comentarios')->insert([
            'comentario' => 'Muy buena, la recomiendo',
            'persona_id' => '4',
            'producto_id' => '1'
        ]);
        DB::table('comentarios')->insert([
            'comentario' => 'Muy mala',
            'persona_id' => '8',
            'producto_id' => '2'
        ]);
        DB::table('comentarios')->insert([
            'comentario' => 'Recomendada',
            'persona_id' => '7',
            'producto_id' => '8'
        ]);
        DB::table('comentarios')->insert([
            'comentario' => 'Excelente',
            'persona_id' => '2',
            'producto_id' => '3'
        ]);
        DB::table('comentarios')->insert([
            'comentario' => 'Funciona perfectamente',
            'persona_id' => '4',
            'producto_id' => '7'
        ]);
        DB::table('comentarios')->insert([
            'comentario' => 'Muy buena',
            'persona_id' => '3',
            'producto_id' => '5'
        ]);
        DB::table('comentarios')->insert([
            'comentario' => 'Es muy lenta, no la recomiendo',
            'persona_id' => '5',
            'producto_id' => '10'
        ]);
        DB::table('comentarios')->insert([
            'comentario' => 'La recomiendo',
            'persona_id' => '6',
            'producto_id' => '6'
        ]);
        DB::table('comentarios')->insert([
            'comentario' => 'Muy mala',
            'persona_id' => '8',
            'producto_id' => '9'
        ]);**/
    }
}
