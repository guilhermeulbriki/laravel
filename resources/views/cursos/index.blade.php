<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="{{url('cursos/create')}}">Adicionar Novo</a>

    <br>

    @foreach ($cursos as $cursos)
        <br>
        {{ $cursos->id }}
        {{ $cursos->nome }}

        <form action="{{ route('cursos.destroy',$cursos->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Excluir</button>
        </form>

        <a href="{{url('cursos/'.$cursos->id.'/edit')}}">
            <button> Editar</button>
        </a>
    @endforeach

</body>
</html>