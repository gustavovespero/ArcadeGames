<?php

class Cliente {
    
    private $id_cliente;
    private $nome;
    private $email;
    private $senha; 
    
    //GETTERS
    public function getIdCliente(){
        return $this->id_cliente;
    }

    public function getNome(){
        return $this->nome;
    }
    
    public function getEmail(){
        return $this->email;
    }

    public function getSenha(){
        return $this->senha;
    }

    //SETTERS
    public function setIdCliente($id){
        $this->id_cliente = $id;
    }

    public function setNome($n){
        $this->nome = $n;
    }

    public function setEmail($e){
        $this->email = $e;
    }

    public function setSenha($s){
        $this->senha = $s;
    }
}