<?php

class Genero {
    
    private $id_genero;
    private $nome;

    //GETTERS
    public function getIdGenero(){
        return $this->id_genero;
    }

    public function getNome(){
        return $this->nome;
    }


    //SETTERS
    public function setIdGenero($idg){
        $this->id_genero = $idg;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }
}