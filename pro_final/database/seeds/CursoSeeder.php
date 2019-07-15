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
            'nomeDoCurso'      => 'Informática para Iadasdlasdlsaxçzdms.sçdzxlfkcçasl;zdkçslx.fkdçal;l\ksdçl;skfc,çlxçsdsldçaskzdçxlqwskd,çcxls;k.xf,çcl;abs(çl\dkçls;kdç\wksdald)sKJAHskjasdassadlçksdakkjk\z dhxqkwazdxdsnternet',
            'quantidadeDeCurso'     => '8'
        ]);
    }
}
