<?php


const SESSENTA = 60;

$nome = "Pedro";
$idade = 18;
$texto = "Infoserv";

function imprimeTexto($texto, $nome = "", $idade = 0) { 
    echo $texto;
    echo "<br>";
    echo $nome;
    echo "<br>";
    echo $idade;

}

function imprimeTexto22($texto) {
    return $texto;
}

imprimeTexto($texto, $nome, $idade);

$horas = 2;
$minutos = 30;
$minutosParaSegundos = 30 * 60; 


function calcularSegundosEmHoras($horas) {
    $relogio = explode(":", $horas);
    $hora = $relogio[0];
    $minutos = $relogio[1];

    $horasParaMinutos = $hora * SESSENTA;
    $horasSegundos = $horasParaMinutos * SESSENTA;
    $horasParaSegundos = $minutos * SESSENTA;
  
    $somaSegundos = $horaSegundos + $minutosParaSegundos;

    echo "<br>";
    echo "A hora informada: $hora tem $segundosTotais";
    echo "<br>";
}

$horas = "1:00";
calcularSegundosEmHoras($horas);

function ehDivisaoExata($numero, $divisor) {
    $restiDivisao = $numero % $divisor;
    $ehDivisaoExata = $restoDivisao == 0;

    return $ehDivisaoExat;
}

funtion verificarSeEhPar($numero) {
    $ehPar = ehDivisaoExata($numero, 2);

    if ($ehPar) {
        echo "O numero informado $numero é par.";
    } else {
        echo "O numero informado $numero É impar.";
    }
}                                           

/**
 * exercicio para as férias.
 *  Calcular o tempo de duração de um jogo.
 * Ex: Jogo de futebol. Tempo de duração 90 minutos || 1 hora e meia
 * 
 * 
 *A-) Começa: 21 horas, qual a hora do termino desse jogo.
* B-) Começa: 23 horas e e 45 minutos, qual a hora do termino desse jogo?
 *R. 01:15:00.
 

            





