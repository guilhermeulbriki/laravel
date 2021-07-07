<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cursos;

class Disciplinas extends Model
{
    use HasFactory;

    protected $table="disciplinas";
    protected $fillable=['nome', 'carga_horaria', 'cursos_id'];

    public function cursos() {
      return $this->belongsTo(Cursos::class);
    }
}
