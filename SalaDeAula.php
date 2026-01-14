<?php 

class Sala {
   public $numero = 0;
   public $classes = [];
   public $luzLigada = false;
   public $lampadaQueimada = false; 
   public $arCondicionado = "";

}

public function __construct($numero) 
{
    $this->numero = $numero;
    $this->soma(10, 20);
}

public function ligarAluz() {
    if ($this->verificarLampada()) {
        return "A sala {$this->numero} está com a lampada queimada.";
    }

}


public function desligarAluz() {


}

public function verificarLampada() {
    $estaQueimada = $this->lampadaQueimada;

    if ($estaqueimada) {
        return true;
    }

}

public function queimarLampada() {

    this->luzLigada = false;
    $this->lampadaQueimada = true;
}

public function trocarLampada() {

    $estaligada = $this->luzligada;

    if ($estaLigada) {
        $this->luzligada = false;

    }

    $this->lampadaQueimada = false;
    $this->luzligada = false;
}

$numero = 10;
$objSalaDeAula = new SalaDeAula(101);
echo $objSalaDeAula->LigarAluz();
$objSalaDeAula->queimarLampada();
echo $objSalaDeAula->ligarAluz();
$objSalaDeAula->trocarLampada();
echo $objSalaDeAula->ligarAluz();
