<?php

require 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$contato = $_POST['contato'];

$update =   'UPDATE clientes SET nome=:nome, 
                                 sobrenome=:sobrenome, 
                                 cpf=:cpf, 
                                 contato=:contato                 
            WHERE id=:id';
                                            
    $stmt = $con->prepare($update);

$stmt->bindValue(':nome',$nome);
$stmt->bindValue(':sobrenome',$sobrenome);
$stmt->bindValue(':cpf',$cpf);
$stmt->bindValue(':contato',$contato);
$stmt->bindValue(':id',$id); 

$resultado = $stmt->execute();

if($resultado){
    header('Location: read.php');
    exit;
}

echo 'Erro ao alterar cliente';