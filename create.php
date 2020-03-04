<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar um cliente</title>
</head>
<body>
    <h1>Cadastro de Clientes</h1>

    <form action="createdb.php" method="POST">

        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome">
        </div>

        <div>
            <label for="sobrenome">Sobrenome</label>
            <input type="text" name="sobrenome">
        </div>

        <div>
            <label for="cpf">CPF</label>
            <input type="text" name="cpf">
        </div>

        <div>
            <label for="contato">Contato</label>
            <input type="text" name="contato">
        </div>
        <button>Cadastrar cliente</button>
    </form>

</body>
</html>