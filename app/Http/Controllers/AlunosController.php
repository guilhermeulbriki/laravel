<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alunos;

class AlunosController extends Controller
{
  public function index() {
    $alunos = Alunos::all();

    return view('alunos/index', compact('alunos'));
  }

  public function create() {
    return view('alunos/cadastrar');
  }

  public function store(Request $request) {
    Alunos::create($request->all());

    return redirect('alunos');
  }
    
  public function show($id)
  {
      //
  }

  public function edit($id) {
    $alunos = Alunos::find($id);
      
    return view("alunos/editar", compact("alunos"));
  }

  public function update(Request $request, $id) {
    $alunos = Alunos::find($id);

    $alunos->update($request->all());

    return redirect("alunos");
  }

  public function destroy($id) {
    $alunos = Alunos::find($id);

    $alunos->delete();

    return redirect('alunos');
  }
}
