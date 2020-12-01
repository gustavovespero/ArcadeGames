<?php

class Jogo {
    
    private $id;
    private $nome;
    private $id_genero1;
    private $id_genero2;
    private $descricao;
    private $desconto;
    private $imagem_URL; 
    private $quantidade;
    private $preco;
    
    
    //GETTERS
    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getIdGenero1(){
        return $this->id_genero1;
    }

    public function getIdGenero2(){
        return $this->id_genero2;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function getDesconto(){
        return $this->desconto;
    }

    public function getImagemURL(){
        return $this->imagem_URL;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function getPreco(){
        return $this->preco;
    }
    //SETTERS
    public function setId($id){
        $this->id = $id;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setIdGenero1($genero1){
        $this->id_genero1 = $genero1;
    }

    public function setIdGenero2($genero2){
        $this->id_genero2 = $genero2;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function setDesconto($desconto){
        $this->desconto = $desconto;
    }

    public function setImagemURL($imagem_URL){
        $this->imagem_URL = $imagem_URL;
    }

    public function setQuantidade($qtde){
        $this->quantidade = $qtde;
    }
    
    public function setPreco($preco){
        $this->preco = $preco;
    }

}