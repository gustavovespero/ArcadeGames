<?php

class Venda {
    
    private $id_venda;
    private $data;
    private $id_cliente;
    private $id_produto;
    
    //GETTERS
    public function getIdVenda(){
        return $this->id_venda;
    }

    public function getData(){
        return $this->data;
    }

    public function getIdCliente(){
        return $this->id_cliente;
    }

    public function getIdProduto(){
        return $this->id_produto;
    }

    //SETTERS
    public function setIdVenda($idv){
        $this->id_venda = $idv;
    }

    public function setData($data){
        $this->data = $data;
    }
    
    public function setIdCliente($idc){
        $this->id_cliente = $idc;
    }

    public function setIdProduto($idp){
        $this->id_produto = $idp;
    }
}