<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="{{url('alunos/create')}}">Adicionar Novo</a>

  <br>

  @foreach ($alunos as $alunos)
      <br>
      {{ $alunos->id }}
      {{ $alunos->nome }}
      {{ $alunos->email }}
      {{ $alunos->cpf }}
      {{ $alunos->endereco }}
      {{ $alunos->telefone }}

    <form action="{{ route('alunos.destroy',$alunos->id) }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit">Excluir</button>
    </form>

    <a href="{{url('alunos/'.$alunos->id.'/edit')}}">
      <button> Editar</button>
    </a>
  @endforeach
</body>
</html>
