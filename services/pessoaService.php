<?php

function save( $nome, $idade, $telefone, $email ){
    if ( !$nome || !$idade || !$telefone ) return null;
    include("../database/connection.php");

    $query = $pdo->prepare("INSERT INTO pessoas(nome, idade, telefone, email) VALUES(:nome, :idade, :telefone, :email);");
    $query->bindParam(':nome', $nome, PDO::PARAM_STR);
    $query->bindParam(':idade', $idade, PDO::PARAM_INT);
    $query->bindParam(':telefone', $telefone, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $pdo = null;

    return $query->execute();
}


function listar(){
    include("../database/connection.php");

    $query = $pdo->prepare("SELECT * FROM pessoas");
    $query->execute();

    return $query->fetchAll(PDO::FETCH_OBJ);
}

function consultar($id){
    include("../database/connection.php");

    $query = $pdo->prepare("SELECT * FROM pessoas WHERE id = :id");
    $query->bindParam(':id', $id);
    $query->execute();
    $pdo = null;

    return $query->fetch(PDO::FETCH_OBJ);
}

function excluir($id){
    include("../database/connection.php");

    $query = $pdo->prepare("DELETE FROM pessoas WHERE id = :id");
    $query->bindParam(':id', $id);
    $pdo = null;
    
    return $query->execute();
}

function alterar($id, $nome, $idade, $telefone, $email){
    if ( !$id || !$nome || !$idade || !$telefone ) return null;
    include("../database/connection.php");

    $query = $pdo->prepare("UPDATE pessoas SET nome=:nome, idade=:idade, telefone=:telefone, email=:email WHERE id=:id;");
    $query->bindParam(':nome', $nome, PDO::PARAM_STR);
    $query->bindParam(':idade', $idade, PDO::PARAM_INT);
    $query->bindParam(':telefone', $telefone, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $pdo = null;

    return $query->execute();
}
?>