<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('alunos.update',$alunos->id) }}" method="POST">
        @csrf
        @method('PUT')
        <br> <label>Nome:</label>
        <input type="text" name="nome" value="{{$alunos->nome}}">
        <br> <label>E-mail:</label>
        <input type="email" name="email" value="{{$alunos->email}}">
        <br><button type="submit">Alterar</button>
    </form>
</body>
</html>