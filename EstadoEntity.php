<?php
 
 require "./EntityAbstract.php";

class EstadoEntity extends EntityAbstract {
  public $logradouro;
  public $cep;
  public $bairro;
  public $numero;
  public $complemento;
  public $pontoDeReferencia;
}
    {
    public function __construct()
    {
        $this->tabelaNome = "endereco";
    }

}
