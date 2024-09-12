<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Disciplinas</title>
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
    <h1>Página - Listar Disciplinas</h1>
    <h2>Lista de Disciplinas:</h2>

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
                <th>Professor</th>
                <th>Escola</th>
                <th>Quantidade de Alunos</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($disciplinas as $disciplina)
                <tr>
                    <td>{{ $disciplina->id }}</td>
                    <td>{{ $disciplina->nome }}</td>
                    <td>{{ $disciplina->professor }}</td>
                    <td>{{ $disciplina->escola }}</td>
                    <td>{{ $disciplina->qtde_alunos }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
