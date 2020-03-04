<?php

require 'conexao.php';

$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$deleteEndereco = 'DELETE FROM enderecos WHERE cliente_id=?';

$id = $_GET['id'];

$stmtEnd = $con->prepare($deleteEndereco);

$stmtEnd->execute([$id]);

$delete = 'DELETE FROM clientes WHERE id=?';

$stmt = $con->prepare($delete);

// outra forma de passar os valores
// para a query que usou placeholder(?)
$stmt->bindValue(1, $id);

// adicionar valor nomeado
// $stmt->bindValue(':id', $id);

$resultado = $stmt->execute();

var_dump($resultado);

if ($resultado) {
    header('Location: read.php');
    exit;
} else {
    echo 'Erro ao excluir cliente';
}