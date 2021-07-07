<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Disciplinas;

class Cursos extends Model
{
    protected $table = 'cursos';
    protected $fillable = ['nome', 'descricao'];

    public function disciplinas_curso() {
      return $this->hasMany(Disciplinas::class);
    }
}
