<?php

class Aluno {

  private $id;
  public $nome;
  private $idade;
  protected $telefone;
  protected $email;

  public function getId() {
    return $this->id;
  }
  
  public function setId($id) {
    $this->id = $id;
  }

  public function getNome() {
    return $this->nome;
  }
  
  public function setNome($name) {
    $this->nome = $name;
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