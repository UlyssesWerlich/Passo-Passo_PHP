<?php

class Pessoa {

  private $id;
  public $nome;
  private $idade;
  protected $telefone;
  protected $email;

  public function __construct($id, $nome, $idade, $telefone, $email) {
    $this->id = $id;
    $this->nome = $nome;
    $this->idade = $idade;
    $this->telefone = $telefone;
    $this->email = $email;
  }

  public function Pessoa($id, $nome, $idade, $telefone, $email) {
    $this->id = $id;
    $this->nome = $nome;
    $this->idade = $idade;
    $this->telefone = $telefone;
    $this->email = $email;
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