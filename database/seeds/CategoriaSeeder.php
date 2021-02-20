<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre'=>'Hombre',
            'Created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')

        ]);

        DB::table('categorias')->insert([
            'nombre'=>'Mujer',
            'Created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')

        ]);

        DB::table('categorias')->insert([
            'nombre'=>'Niños',
            'Created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')

        ]);

        DB::table('categorias')->insert([
            'nombre'=>'Niñas',
            'Created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')

        ]);
    }
}
