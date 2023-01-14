<?php

class Caneta{
    public $modelo;
    public $cor;
    private $ponta;
    protected $tampada;

    private function rabiscar(){
        if($this->tampada == true){ 
            echo "ERRO não posso rabiscar ";
        }
        else{
            echo "Estou Rabiscando ... ";
        }
    }
    // function tampar(){
    //     $this->tampada == true;
    // }
    // function destampar(){
    //     $this->tampada == false;
     // }
}

?>