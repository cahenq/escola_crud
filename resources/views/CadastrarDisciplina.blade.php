<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Disciplina</title>
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
    <h1>Página - Cadastrar Disciplina</h1>
    <h2>Formulário de Cadastro de Disciplina:</h2>
    <form action="{{ route('disciplinas.store') }}" method="POST">
        @csrf

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <label for="professor">Professor:</label>
        <input type="text" name="professor" id="professor" required>

        <label for="escola">Escola:</label>
        <input type="text" name="escola" id="escola" required>

        <label for="qtde_alunos">Quantidade de Alunos:</label>
        <input type="number" name="qtde_alunos" id="qtde_alunos" required>
        <br><br>
        <input type="submit" value="Cadastrar Disciplina">
    </form>
    <hr>
</body>
</html>
