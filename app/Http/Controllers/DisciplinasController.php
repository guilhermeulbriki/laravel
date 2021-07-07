<?php

namespace App\Http\Controllers;

use App\Models\Disciplinas;
use App\Models\Cursos;
use Illuminate\Http\Request;

class DisciplinasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $disciplinas = Disciplinas::all();

      return view('disciplinas/index', compact('disciplinas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $cursos = Cursos::all();

      return view('disciplinas/cadastrar', compact('cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Disciplinas::create($request->all());

      return redirect('disciplinas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Disciplinas  $disciplinas
     * @return \Illuminate\Http\Response
     */
    public function show(Disciplinas $disciplinas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Disciplinas  $disciplinas
     * @return \Illuminate\Http\Response
     */
    public function edit(Disciplinas $disciplinas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Disciplinas  $disciplinas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disciplinas $disciplinas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Disciplinas  $disciplinas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disciplinas $disciplinas)
    {
        //
    }
}
