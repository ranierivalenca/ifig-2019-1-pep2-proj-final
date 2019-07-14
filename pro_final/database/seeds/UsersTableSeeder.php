<?php

use Illuminate\Database\Seeder;
use App\Curso;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curso::create([
            'nomeDoCurso'      => 'Carlos Ferreira',
            'quantidadeDeCurso'     => 'carlos@especializati.com.br'
        ]);
    }
}
