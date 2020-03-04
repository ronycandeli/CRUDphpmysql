<?php

require 'conexao.php';

$id = $_GET['id'];

$select = 'SELECT * FROM clientes where id=?';

$stmt = $con->prepare($select);

$resultado = $stmt->execute([$id]);

$cliente = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar um cliente</title>
</head>
<body>
    <h1>Alterar Clientes</h1>

    <form action="updatedb.php" method="POST">

        <div>
            <label for="nome">Nome</label>
            <input type="text" value="<?=$cliente['nome']?>" name="nome">
        </div>

        <div>
            <label for="sobrenome">Sobrenome</label>
            <input type="text" value="<?=$cliente['sobrenome']?>" name="sobrenome">
        </div>

        <div>
            <label for="cpf">CPF</label>
            <input type="text" value="<?=$cliente['cpf']?>" name="cpf">
        </div>

        <div>
            <label for="contato">Contato</label>
            <input type="text" value="<?=$cliente['contato']?>" name="contato">
        </div>

        <input type="hidden" name="id" value="<?=$cliente['id']?>">

        <button>Atualizar Dados</button>
    </form>

</body>
</html>