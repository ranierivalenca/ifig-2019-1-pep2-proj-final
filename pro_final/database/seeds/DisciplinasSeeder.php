<?php

use Illuminate\Database\Seeder;
use App\Disciplina;
class DisciplinasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Disciplina::create([
            'nome'      => 'Carlos Ferreira',
            'carga_horaria'     => 'carlos@especializati.com.br',
            'periodo'		=> '1',
            'curso_id'		=> '1'
        ]);
    }
}
