<?php

function salvar( Pessoa $pessoa ){
    include("../database/connection.php");

    $query = $pdo->prepare("INSERT INTO pessoas(nome, idade, telefone, email) VALUES(:nome, :idade, :telefone, :email);");
    $query->bindValue(':nome', $pessoa->getNome());
    $query->bindValue(':idade', $pessoa->getIdade());
    $query->bindValue(':telefone', $pessoa->getTelefone());
    $query->bindValue(':email', $pessoa->getEmail());
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

function alterar(Pessoa $pessoa){
    include("../database/connection.php");

    $query = $pdo->prepare("UPDATE pessoas SET nome=:nome, idade=:idade, telefone=:telefone, email=:email WHERE id=:id;");
    $query->bindValue(':nome', $pessoa->getNome());
    $query->bindValue(':idade', $pessoa->getIdade());
    $query->bindValue(':telefone', $pessoa->getTelefone());
    $query->bindValue(':email', $pessoa->getEmail());
    $query->bindValue(':id', $pessoa->getId());
    $pdo = null;

    return $query->execute();
}
?>