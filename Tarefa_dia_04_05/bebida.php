<?php

class Bebida{

    private $nome;
    private $preco;

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function setPreco($preco){
        $this->preco = $preco;
    }

    abstract function mostraBebida()

    abstract function verificaPreco($preco)

}
