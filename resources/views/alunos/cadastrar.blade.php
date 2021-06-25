<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf
        <br> <label>Nome:</label>
        <input type="text" name="nome" placeholder="Nome">
        <br> <label>E-mail:</label>
        <input type="email" name="email" placeholder="E-mail">
        <br> <label>CPF:</label>
        <input type="text" name="cpf" placeholder="000-000-000-00">
        <br> <label>Endereço:</label>
        <input type="text" name="endereco" placeholder="Endereço">
        <br> <label>Telefone:</label>
        <input type="text" name="telefone" placeholder="(00) 00000-0000">
        <br><button type="submit">Cadastrar</button>
    </form>
</body>
</html>
