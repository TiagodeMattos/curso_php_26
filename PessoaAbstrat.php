<?php

abstract class PessoaAbstract {
    public $nome;
    public $idade;
    public $logradouro; 
    public $cep;
    public $cidade;
    public $estado;
    public $numero;
    public $complemento;
    public $ponto

    public function resetarPessoa() {       
    $this->$nome = "";
    $this->$idade = "";
    $this->$logradouro = ""; 
    $this-> $cep = "";
    $this->$cidade = "";
    $this->$estado = "";
    $this->$numero = "";
    $this-> $complemento = "";
    $this-> $ponto = "";
    }
    public function validarCPF($cpf) {

       echo  "123.456.789-10";
    }

    public function validarCNPJ($cnpj) {

       echo "123.456.789/0001-11";
    } 
}

