<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $disciplinas = Disciplina::orderBy('created_at', 'asc')->get();
        return view('ListaDisciplinas')
                ->with('disciplinas', $disciplinas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('CadastrarDisciplina');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nome'          => 'required',
            'professor'     => 'required',
            'escola'        => 'required',
            'qtde_alunos'   => 'required|integer',
        ]);

        Disciplina::create($request->all());

        return redirect('/disciplinas')->with('message', 'Disciplina criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
