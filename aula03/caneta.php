<?php

class Caneta{
    public $modelo;
    private $cor;
    private $ponta;
    private $tampada;
    // public function __construct(){ //Método construtor pode ter o mesmo nome da classe
    //     $this->cor = "Azul";
    //     $this->tampar();
    // }

    public function __construct($model, $color, $tip){
        $this->modelo = $model;
        $this->cor = $color;
        $this->ponta = $tip;
        $this->tampar();
    }

    public function tampar(){
        $this->tampada = true;
    }

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo = $m;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($p){
        $this->ponta = $p;
    }
}

?>