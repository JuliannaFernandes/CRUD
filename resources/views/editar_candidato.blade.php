<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de CRUD em LARAVEL</title>
    <link rel="stylesheet" href="../css/app.css">
</head>

<body>
    <form action="/atualizar-candidato/{{ $candidato->id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Nome:</label>
        <input type="text" placeholder="Digite o seu nome..." name="nome_candidato" value="{{ $candidato -> nome}}" />
        <br /><br />
        <label for="">Telefone:</label>
        <input type="text" placeholder="Digite o seu telefone..." name="telefone_candidato"
            value="{{ $candidato -> telefone}}" />
        <br /><br />
        <label for="">E-mail:</label>
        <input type="email" placeholder="Digite o seu e-mail..." name="email_candidato"
            value="{{ $candidato -> email}}" />
        <br /><br />
        <label for="">Endereço:</label>
        <input type="text" placeholder="Digite o seu endereço..." name="endereco_candidato"
            value="{{ $candidato -> endereco}}" />
        <br /><br />

        <button>Atualizar</button>
    </form>

</body>

</html>