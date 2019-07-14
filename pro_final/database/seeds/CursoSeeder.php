<?php

use Illuminate\Database\Seeder;
use App\Curso;	
class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curso::create([
            'nomeDoCurso'      => 'Informática para Iadadsnternet',
            'quantidadeDeCurso'     => 'carlos@espesahGSAcializati.com.br'
        ]);
    }
}
