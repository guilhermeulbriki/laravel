<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="{{url('matriculas/create')}}">Adicionar nova matricula</a>

    <br>

    @foreach ($matriculas as $matriculas)
        <br>
        {{ $matriculas->id }}
        {{ $matriculas->disciplinas->nome }}
        {{ $matriculas->alunos->nome }}

        <!-- <form action="{{ route('matriculas.destroy',$matriculas->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Excluir</button>
        </form> -->

        <!-- <a href="{{url('matriculas/'.$matriculas->id.'/edit')}}">
            <button> Editar</button>
        </a> -->
    @endforeach

</body>
</html>
