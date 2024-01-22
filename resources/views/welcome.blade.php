<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de CRUD em LARAVEL</title>
    <link rel="stylesheet" href="../css/app.css">


</head>

<body>
    <form action="/cadastrar-candidato" method="POST">
        @csrf
        <label for="">Nome:</label>
        <input type="text" placeholder="Digite o seu nome..." name="nome_candidato" />
        <br /><br />
        <label for="">Telefone:</label>
        <input type="text" placeholder="Digite o seu telefone..." name="telefone_candidato" />
        <br /><br />
        <label for="">E-mail:</label>
        <input type="email" placeholder="Digite o seu e-mail..." name="email_candidato" />
        <br /><br />
        <label for="">Endereço:</label>
        <input type="text" placeholder="Digite o seu endereço..." name="endereco_candidato" />
        <br /><br />

        <button>Cadastrar</button>
    </form>

</body>

</html>