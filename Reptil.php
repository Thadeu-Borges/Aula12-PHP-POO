<?php
require_once 'Animal.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Reptil
 *
 * @author AAAA
 */
class Reptil extends Animal {
    //put your code here
    private $corEscama;
    
    
    public function alimentar() {
        echo "<p>Comendo Vegetais</p>";
    }

    public function emitirSom() {
        echo "<p>Som de Réptil</p>";
    }

    public function locomover() {
        echo "<p>Rastejando</p>";
    }
    
    
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }



}
