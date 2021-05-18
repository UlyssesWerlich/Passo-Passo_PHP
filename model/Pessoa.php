<?php

declare(strict_types = 1);

class Pessoa {

  private int $id;
  private string $nome;
  private int $idade;
  private string $telefone;
  protected ?string $email;

  function set(array $post) {
    $this->nome = $post['nome'] ? $post['nome'] : null;
    $this->idade = $post['idade'] ? (int) $post['idade'] : null;
    $this->telefone = $post['telefone'] ? $post['telefone'] : null;
    $this->email = $post['email'];
  }

  public function getId() {
    return $this->id;
  }
  
  public function setId($id) {
    $this->id = $id;
  }

  public function getNome() {
    return $this->nome;
  }
  
  public function setNome($nome) {
    $this->nome = $nome;
  }
  
  public function getIdade() {
    return $this->idade;
  }
  
  public function setIdade($idade) {
    $this->idade = $idade;
  }
  
  public function getTelefone() {
    return $this->telefone;
  }
  
  public function setTelefone($telefone) {
    $this->telefone = $telefone;
  }

  public function getEmail() {
    return $this->email;
  }
  
  public function setEmail($email) {
    $this->email = $email;
  }
}