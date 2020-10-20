<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Productos;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'Producto' => 'Laptop Microsoft Surface Go'
        ]);
        DB::table('productos')->insert([
            'Producto' => 'Laptop ASUS VivoBook E12'
        ]);
        DB::table('productos')->insert([
            'Producto' => 'MacBook Air'
        ]);
        DB::table('productos')->insert([
            'Producto' => 'Laptop Acer Swift 5'
        ]);
        DB::table('productos')->insert([
            'Producto' => 'Laptop Acer Aspire 5'
        ]);
        DB::table('productos')->insert([
            'Producto' => 'MacBook Pro 2020'
        ]);
        DB::table('productos')->insert([
            'Producto' => 'Laptop ASUS VivoBook S14'
        ]);
        DB::table('productos')->insert([
            'Producto' => 'Laptop HP Pavilion'
        ]);
        DB::table('productos')->insert([
            'Producto' => 'Laptop DELL Inspiration'
        ]);
        DB::table('productos')->insert([
            'Producto' => 'MacBook Pro Retina'
        ]);
    }
}
