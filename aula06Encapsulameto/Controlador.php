<?php

interface Controlador{
    public function ligar(); //quando o método é abstrato ele vai ser desenvolvido na classe.
    public function desligar();
    public function abrirMenu();
    public function fecharMenu();
    public function maisVolume();
    public function menosVolume();
    public function ligarMudo();
    public function desligarMudo();
    public function play();
    public function pause();

}

?>