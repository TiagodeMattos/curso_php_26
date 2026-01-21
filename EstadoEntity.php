<?php
 
 require "./EntityAbstract.php";

class EstadoEntity extends EntityAbstract {
   public $cidade;
   public $sigav;
    
    public function __construct()
    {
        $this->tabelaNome = "endereco";
    }
}
