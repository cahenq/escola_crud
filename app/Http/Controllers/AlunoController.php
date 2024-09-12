<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $alunos = Aluno::orderBy('created_at', 'asc')->get();
        return view('ListaAlunos')
                ->with('alunos', $alunos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('CadastrarAluno');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nome'      => 'required',
            'idade'     => 'required|integer',
            'sexo'      => 'required',
            'cpf'       => 'required',
            'rg'        => 'required',
            'email'     => 'required|email',
            'senha'     => 'required',
        ]);

        // Cria um novo aluno com os dados do formulário
        Aluno::create($request->all());

        // Redireciona para a lista de alunos com uma mensagem de sucesso
        return redirect('/alunos')->with('message', 'Aluno criado com sucesso!');
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
