<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlunosModel;

class AlunosController extends Controller
{
  public function index() {
    $alunos = AlunosModel::all();

    return view('alunos/index', compact('alunos'));
  }
}
