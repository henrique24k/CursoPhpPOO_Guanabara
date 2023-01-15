<?php

class caneta{
    var $modelo;
    var $cor;
    var $ponta;
    // var $carga;
    var $tampada;

    function rabiscar(){
        if($this->tampada == true){ //para verificar um atributo dentro de um método que esta na própria classe usamos o $this que ai ser subistituida pelo nome do objeto.
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