<?php

require_once "./PessoaAbstrat.php";

define("QUEBRAR_LINHA", "<br>");


class pessoaFisica extends PessoaAbstract {
    public $CPF;
    public function __construct()
    {
        $this->resetarPessoa();
        $this->CPF = "";
    }

 public function valiar() {
    $cpf = $this->CPF;

    $this->validarCPF($cpf);

 }

}

