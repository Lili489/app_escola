<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Professor;
use App\Models\Matricula;

class Turma extends Model
{
    protected $fillable = [
        'nome',
        'turno',
        'professor_id'
    ];

    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }

    public function matriculas()
    {
        return $this->hasMany(Matricula::class);
    }
}