<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Turma;

class Professor extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'telefone'
    ];

    public function turmas()
    {
        return $this->hasMany(Turma::class);
    }
}