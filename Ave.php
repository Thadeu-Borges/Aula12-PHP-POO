<?php
require_once 'Animal.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Ave
 *
 * @author AAAA
 */
class Ave extends Animal {
    //put your code here
    private $corPena;
    
    
    public function alimentar() {
        echo "<p>Comendo Frutas</p>";
    }

    public function emitirSom() {
        echo "<p>Som de Ave</p>";
    }

    public function locomover() {
        echo "<p>Voando</p>";
    }
    
    public function fazerNinho() {
        echo "<p>Construindo um Ninho</p>";
    }
    
    
    function getCorPena() {
        return $this->corPena;
    }

    function setCorPena($corPena) {
        $this->corPena = $corPena;
    }


}
