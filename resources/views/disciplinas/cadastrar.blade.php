<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('disciplinas.store') }}" method="POST">
        @csrf
        <br> <label>Nome:</label>
        <input type="text" name="nome" placeholder="Nome">
        <br><label>Carga Horária:</label>
        <input type="text" name="carga_horaria" placeholder="Carga Horária">
        <br> <label>Curso:</label>
        <select name="cursos_id">
          @foreach ($cursos as $cursos)
            <option value="{{ $cursos->id }}">{{ $cursos->nome }}</option>
          @endforeach
        </select>
        <br><button type="submit">Cadastrar</button>
    </form>
</body>
</html>
