<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Alunos Cadastrados</h1>

  @foreach ($alunos as $aluno)
    <br> Id: {{ $aluno->id }} Nome: {{ $aluno->name }} E-mail: {{ $aluno->email }}
  @endforeach
</body>
</html>
