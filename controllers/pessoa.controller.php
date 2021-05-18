<?php

session_start();
require('services/pessoa.service.php');
require('model/Pessoa.php');

class PessoaController{
    public static function cadastro(){
        require('views/pessoa.cadastro.php');
    }

    public static function cadastrar(){
        try {
            $pessoa = new Pessoa();
            $pessoa->set($_POST);
            salvar($pessoa);
            
            $_SESSION['mensagem'] = ['texto' => 'Contato criado com sucesso', 'tipo' => 'sucesso'];
            header('Location: /?c=pessoa&m=lista', true);
    
        } catch (TypeError $e) {
            $sub_mensagens = [];
            if ( !$_POST['nome'] ) array_push( $sub_mensagens , "Necessário informar o nome.");
            if ( !$_POST['idade']) array_push( $sub_mensagens , "Necessário informar a idade.");
            if ( !$_POST['telefone'] ) array_push( $sub_mensagens , "Necessário informar o telefone.");
    
            $_SESSION['mensagem'] = [ 'texto' => 'Erro ao fazer o cadastro.', 'sub_mensagens' => $sub_mensagens, 'tipo' => 'erro'];
            header("Location: /?c=pessoa&m=cadastro", true);
        }
    }

    public static function alteracao(){
        if ( $pessoa = consultar($_GET['id']) ){
            require('views/pessoa.alteracao.php');
        } else {
            $_SESSION['mensagem'] = [ 'texto' => 'Contato não encontrado', 'tipo' => 'erro'];
            header('Location: /?c=pessoa&m=lista', true);
        }
    }

    public static function alterar(){
        try {
            $pessoa = new Pessoa();
            $pessoa->set($_POST);
            $pessoa->setId((int) $_GET['id']);
            alterar($pessoa);
            
            $_SESSION['mensagem'] = [ 'texto' => 'Contato alterado com sucesso', 'tipo' => 'sucesso'];
            header('Location: /?c=pessoa&m=lista', true);

        } catch (TypeError $e) {
            $sub_mensagens = [];
            if ( !$_POST['nome'] ) array_push( $sub_mensagens , "Necessário informar o nome.");
            if ( !$_POST['idade']) array_push( $sub_mensagens , "Necessário informar a idade.");
            if ( !$_POST['telefone'] ) array_push( $sub_mensagens , "Necessário informar o telefone.");
    
            $_SESSION['mensagem'] = [ 'texto' => 'Erro ao fazer a alteração.', 'sub_mensagens' => $sub_mensagens, 'tipo' => 'erro'];
            header("Location: /?c=pessoa&m=alteracao&id=" . $_GET['id'], true);
        }
    }

    public static function deletar(){
        $id = $_GET['id'];
        if ( consultar($id) ){
            excluir($id);
            $_SESSION['mensagem'] = [ 'texto' => 'Contato excluído com sucesso', 'tipo' => 'sucesso'];
            header("Location: /?c=pessoa&m=lista", true);
        } else {
            $_SESSION['mensagem'] = [ 'texto' => 'Erro ao excluir contato', 'tipo' => 'erro'];
            header('Location: /?c=pessoa&m=lista', true);
        }
    }

    public static function consulta(){
        if ( $pessoa = consultar($_GET['id']) ){
            require('views/pessoa.consulta.php');
        } else {
            $_SESSION['mensagem'] = 'Contato não encontrado.';
            header('Location: /?c=pessoa&m=lista', true);
        }
    }

    public static function lista(){
        $lista = listar();
        require('views/pessoa.lista.php');
    }
}