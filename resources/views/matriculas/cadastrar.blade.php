<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('matriculas.store') }}" method="POST">
        @csrf
        <br> <label>Aluno:</label>
        <select name="alunos_id">
          @foreach ($alunos as $alunos)
            <option value="{{ $alunos->id }}">{{ $alunos->nome }}</option>
          @endforeach
        </select>
        <br> <label>Disciplina:</label>
        <select name="disciplinas_id">
          @foreach ($disciplinas as $disciplinas)
            <option value="{{ $disciplinas->id }}">{{ $disciplinas->nome }}</option>
          @endforeach
        </select>
        <br><button type="submit">Cadastrar</button>
    </form>
</body>
</html>
