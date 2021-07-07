<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Disciplinas;
use App\Models\Alunos;

class Matriculas extends Model
{
    use HasFactory;

    protected $table='matriculas';
    protected $fillable=['disciplinas_id', 'alunos_id'];

    public function disciplinas() {
      return $this->belongsTo(Disciplinas::class);
    }

    public function alunos() {
      return $this->belongsTo(Alunos::class);
    }
}
