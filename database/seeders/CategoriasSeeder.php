<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array([
            'nombre'=> 'Administrador',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=> 'Gerente',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=> 'Junta Directiva',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=> 'Carjero',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=> 'Limpieza',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=> 'Seguridad',
            'created_at'=>Carbon::now()
        ]);

        DB::table('categorias')->insert($data);

    }
}
