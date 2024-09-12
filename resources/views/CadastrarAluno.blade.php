<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Aluno</title>
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
    <h1>Página - Cadastrar Aluno</h1>
    <h2>Formulário de Cadastro de Aluno:</h2>
    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade" required>

        <label for="sexo">Sexo:</label>
        <input type="text" name="sexo" id="sexo" required>

        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" required>

        <label for="rg">RG:</label>
        <input type="text" name="rg" id="rg" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>
        <br><br>
        <input type="submit" value="Cadastrar">
    </form>
    <hr>
</body>
</html>
