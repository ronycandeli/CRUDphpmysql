<?php

require 'conexao.php';

// validação
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$contato = $_POST['contato'];
$criado_em = date('Y-m-d H:i:s'); // 2020-02-27 20:24:23

$insert = 'INSERT INTO clientes 
            (nome, sobrenome, cpf, contato, criado_em)
           VALUES (?, ?, ?, ?, ?)';

$stmt = $con->prepare($insert);

$resultado = $stmt->execute([
    $nome, 
    $sobrenome, 
    $cpf, 
    $contato, 
    $criado_em
]);

if ($resultado) {
    header('Location: read.php');
} else {
    echo 'Erro ao inserir';
}