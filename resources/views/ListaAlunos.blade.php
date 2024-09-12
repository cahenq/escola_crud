<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Alunos</title>
</head>
<body>
    <div>
        <nav>
            <table>
                <tr>
                    <td> <a href="{{ url('/home') }}"> <button> Home</button></a> </td>
                    <td> <a href="{{ url('/alunos/create') }}"> <button> Cadastrar Alunos</button></a></td>
                    <td> <a href="{{ url('/alunos') }}"> <button> Lista de Alunos</button></a></td>
                    <td> <a href="{{ url('/disciplinas/create') }}"> <button> Cadastrar Disciplinas</button></a></td>
                    <td> <a href="{{ url('/disciplinas') }}"> <button> Lista de Disciplinas</button></a></td>
                </tr>
            </table>
        </nav>
    </div>
    <h1>Página - Listar Alunos</h1>
    <h2>Lista de Alunos:</h2>

    @if(Session::has('message'))
        <div role="alert">
            <h4 style="color: #045c01"><strong>Parabéns!</strong> {!! Session::get('message') !!}</h4>
        </div>
    @endif

    <hr>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Sexo</th>
                <th>CPF</th>
                <th>RG</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alunos as $aluno)
                <tr>
                    <td>{{ $aluno->id }}</td>
                    <td>{{ $aluno->nome }}</td>
                    <td>{{ $aluno->idade }}</td>
                    <td>{{ $aluno->sexo }}</td>
                    <td>{{ $aluno->cpf }}</td>
                    <td>{{ $aluno->rg }}</td>
                    <td>{{ $aluno->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
