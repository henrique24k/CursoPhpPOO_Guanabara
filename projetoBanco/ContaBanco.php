<?php

class ContaBanco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function abrirConta($type){
        $this->setTipo($type);
        $this->setStatus(true);
        if($type == "CC"){
            $this->setSaldo(50);
        }
        elseif($type == "CP"){
            $this->setSaldo(150);
        }
    }
    public function fecharConta(){
        if($this->getSaldo() > 0){
            echo "<p>Conta ainda com dinheiro, não posso encerra-la!</p>";
        }
        elseif($this->getSaldo() < 0){
            echo "<p>Conta com valor em débito, impossivel de encerrar!</p>";
        }
        else{
            $this->setStatus(false);
            echo "<p>Conta de " .$this->getDono() . " fechada com sucesso!" ."</p>";
        }

    }
    public function depositar($value){
        if($this->getStatus() == true){
            $this->setSaldo($this->getSaldo() + $value);
            echo "Deposito de R$ $value,00 na conta de " . $this->getDono() . "<br/> <br/>";
        }
        else{
            echo "<p>Conta fechada. Impossivel depositar.</p>";
        }
    }
    public function sacar($value){
        if($this->getStatus() == true){
            if ($this->getSaldo() >= $value){
                //$this->saldo = $this->saldo - $value;
                $this->setSaldo($this->getSaldo() - $value);
                echo "saque de R$ $value,00  autorizado na conta de " . $this->getDono() . "<br/> <br/>";
            }
            else{
                echo "<p>Saldo insuficiente para saque. </p>";
            }
        }
        else{
            echo "<p>Não posso sacar de uma conta fechada.</p>";
        }
    }
    public function taxa(){
        if($this->getTipo() == "CC"){
            $value = 12;
        }
        else if($this->getTipo() == "CP"){
            $value = 20;
        }
        if($this->getStatus() == true){
            $this->setSaldo($this->getSaldo() - $value);
            echo "<p>Mensalidade de R$ $value debitada na conta de " . $this->getDono() . "</p>";
        }
        else{
            echo "<p>Problemas com a conta. Não posso cobrar.</p>"; 
        }
    }

    public function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso!</p>";
    }
    function getNumConta(){
        return $this->numConta;
    }
    function getTipo(){
        return $this->tipo;
    }
    function getDono(){
        return $this->dono;
    }
    function getSaldo(){
        return $this->saldo;
    }
    function getStatus(){
        return $this->status;
    }
    function setNumConta($numConta){
        $this->numConta = $numConta;
    }
    function setTipo($tipo){
        $this->tipo = $tipo;
    }
    function setDono($dono){
        $this->dono = $dono;
    }
    function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    function setStatus($status){
        $this->status = $status;
    }

}

?>