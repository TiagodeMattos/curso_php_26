<?php
 
 require "./EntityAbstract.php";

class EstadoEntity extends EntityAbstract {
   public $cidade;
   public $sigla;
    
    public function __construct()
    {
        $this->tabelaNome = "endereco";
    }
}
