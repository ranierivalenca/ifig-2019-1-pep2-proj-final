<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudante extends Model
{
    protected $table = 'estudante';
    protected $fillable = [
        'nomeDoEstudante', 'matricula','email','senha'
    ];
}
