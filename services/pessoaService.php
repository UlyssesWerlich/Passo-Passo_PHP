<?php

function save( $nome, $idade, $telefone, $email ){
    include("../database/connection.php");

    $query = $pdo->prepare("INSERT INTO pessoas(nome, idade, telefone, email) VALUES(:nome, :idade, :telefone, :email);");
    $query->bindParam(':nome', $nome, PDO::PARAM_STR);
    $query->bindParam(':idade', $idade, PDO::PARAM_INT);
    $query->bindParam(':telefone', $telefone, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $pdo = null;

    return $query->execute() ? ['nome' => $nome, 'idade' => $idade, 'telefone' => $telefone, 'email' => $email] : null;
}


function listar(){
    include("../database/connection.php");

    $query = $pdo->prepare("SELECT * FROM pessoas");
    $query->execute();

    return $query->fetchAll(PDO::FETCH_OBJ);
}
?>