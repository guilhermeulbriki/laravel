<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use App\Models\Disciplinas;
use App\Models\Matriculas;
use Illuminate\Http\Request;

class MatriculasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $matriculas = Matriculas::all();

      return view('matriculas/index', compact('matriculas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $disciplinas = Disciplinas::all();
      $alunos = Alunos::all();

      return view('matriculas/cadastrar', compact('disciplinas', 'alunos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Matriculas::create($request->all());

      return redirect('matriculas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matriculas  $matriculas
     * @return \Illuminate\Http\Response
     */
    public function show(Matriculas $matriculas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matriculas  $matriculas
     * @return \Illuminate\Http\Response
     */
    public function edit(Matriculas $matriculas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matriculas  $matriculas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matriculas $matriculas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matriculas  $matriculas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matriculas $matriculas)
    {
        //
    }
}
