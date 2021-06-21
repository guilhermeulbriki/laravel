<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cursos;

class CursosController extends Controller
{
    public function index()
    {
        $cursos = Cursos::all();

        return view('cursos/index',compact('cursos'));
    }
    
    public function create()
    {
        return view('cursos/cadastrar');
    }
    
    public function store(Request $request)
    {
        Cursos::create($request->all());

        return redirect('cursos');
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        $cursos = Cursos::find($id);
        
        return view("cursos/editar",compact("cursos"));
    }
    
    public function update(Request $request, $id)
    {
        $cursos = Cursos::find($id);

        $cursos->update($request->all());

        return redirect("cursos");
    }
    
    public function destroy($id)
    {
        $cursos = Cursos::find($id);

        $cursos->delete();

        return redirect('cursos');
    }
}
