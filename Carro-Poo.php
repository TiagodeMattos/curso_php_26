<?php

// POO || OOP
// Programação Orientada a Objetos

/**
 * Caracteristicas: Propriedades || Atributos.
 * */

define("QUEBRA_LINHA", "<br>");

class Carro {
    private $ligado = false;
    private $marca;
    public $modelo;
    public $ano;
    public $cor;
    public $combustivel;

    public function setMarca($marca) {
    $this->marca = $marca;
}

public function getMarca() {
    return $this->marca;
}

public function ligar($chave) {
    if (!$chave) {
        echo "Impossível ligar o carro sem a chave.";
        return;
    } 
    
    if (!this->combustivel) {
        echo "Impossíovel ligar o carro sem combustível, GAS: $this->combustivel.";
        return;
    }

    $this-> ligado = true;
    echo "Carro esta ligado." . self::QUEBRA_LINHA;
}

public function desligar() {

    if (!$this->ligado) {
    
    echo "Carro está desligado." . QUEBRA_LINHA;
    return;
    }
    $this->ligado = false;
    echo "Carro está desligado.a" . QUEBRA_LINHA;

}

}

$objCarro = new Carro();
$objCarro->setMarca("Hyundai");
$objCarro->modelo = "I30";
$objCarro->ano = "2015";
$objCarro->cor = "vermelho";
$objCarro->combustivel = "gasolina"

$chave = "presencial";
$objCarro->ligar($chave);
$objCarro->ligar($chave);

