<?php
require_once 'Animal.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Peixe
 *
 * @author AAAA
 */
class Peixe extends Animal {
    //put your code here
    private $corEscama;
    
    
    public function alimentar() {
        echo "<p>Comendo Substâncias</p>";
    }

    public function emitirSom() {
        echo "<p>Peixe não faz som</p>";
    }

    public function locomover() {
        echo "<p>Nadando</p>";
    }
    
    public function soltarBolha() {
        echo "<p>Soltou uma Bolha</p>";
    }
    
    
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }


}
