<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('cursos.update',$cursos->id) }}" method="POST">
        @csrf
        @method('PUT')
        <br> <label>Nome:</label>
        <input type="text" name="nome" value="{{$cursos->nome}}">
        <br><label>Descrição:</label>
        <textarea name="descricao">{{$cursos->descricao}}</textarea>
        <br><button type="submit">Alterar</button>
    </form>
</body>
</html>