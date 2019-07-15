<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = 'professor';
    protected $fillable = [
        'nomeDoProfessor', 'cpf','email','senha'
    ];
}
