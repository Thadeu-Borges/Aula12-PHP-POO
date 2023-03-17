<?php
require_once 'Animal.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Mamifero
 *
 * @author AAAA
 */
class Mamifero extends Animal {
    //put your code here
    private $corPelo;
    
    
    public function alimentar() {
        echo "<p>Mamando</p>";
    }

    public function emitirSom() {
        echo "<p>Som de Mamifero</p>";
    }

    public function locomover() {
        echo "<p>Correndo</p>";
    }
    
    
    function getCorPelo() {
        return $this->corPelo;
    }

    function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }



}
