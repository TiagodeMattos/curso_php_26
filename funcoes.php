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

    echo "A-) O jogo começa as 21h, qual a hora do termino do jogo?";

const SESSENTA = 60;
const SEGUNDOS_NO_DIA = 86400;
const UMA_HORA_E_MEIA = [1, 30, 00];
function calcularFimDoJogoA($horas) {
    $relogio = explode(":", $horas);
    $horaInicio = $relogio[0];
    $minutosInicio = $relogio[1];
    $segundosInicio = $relogio[2];

    $horaFim = UMA_HORA_E_MEIA[0];
    $minutosFim = UMA_HORA_E_MEIA[1];
    $segundosFim = UMA_HORA_E_MEIA[2];

    $totalHoras = $horaInicio + $horaFim;
    $totalMinutos = $minutosInicio + $minutosFim;
    $totalSegundos = $segundosInicio + $segundosFim;

    if ($totalSegundos >= SESSENTA){
        $totalMinutos += 1;
        $totalSegundos -= SESSENTA;
    }
    if ($totalMinutos >= SESSENTA){
        $totalHoras += 1;
        $totalMinutos -= SESSENTA;
    }
    if ($totalHoras < 10) { $totalHoras = "0" . $totalHoras; }
    if ($totalMinutos < 10) { $totalMinutos = "0" . $totalMinutos; }
    if ($totalSegundos < 10) { $totalSegundos = "0" . $totalSegundos; }

    echo "<br>";
    echo "A hora de termino do jogo das $horas é as $totalHoras:$totalMinutos:$totalSegundos";
    echo "<br>";
}
$horas = "21:00:00";
calcularFimDoJogoA($horas);

echo "B-) O jogo começa as 23h e 45min, qual a hora do termino do jogo?";

function calcularFimDoJogoB($horasB) {
    $relogioB = explode(":", $horasB);
    $horaInicioB = $relogioB[0];
    $minutosInicioB = $relogioB[1];
    $segundosInicioB = $relogioB[2];

    $tempo = UMA_HORA_E_MEIA;

    $horaFimB = $tempo[0];
    $minutosFimB = $tempo[1];
    $segundosFimB = $tempo[2];

    $totalHorasB = $horaInicioB + $horaFimB;
    $totalMinutosB = $minutosInicioB + $minutosFimB;
    $totalSegundosB = $segundosInicioB + $segundosFimB;

    if ($totalSegundosB >= SESSENTA){
        $totalMinutosB += 1;
        $totalSegundosB -= SESSENTA;
    }
    if ($totalMinutosB >= SESSENTA){
        $totalHorasB += 1;
        $totalMinutosB -= SESSENTA;
    }
    if ($totalHorasB >= 24) {
        $totalHorasB = $totalHorasB - 24;
    }
    if ($totalHorasB < 10) { $totalHorasB = "0" . $totalHorasB; }
    if ($totalMinutosB < 10) { $totalMinutosB = "0" . $totalMinutosB; }
    if ($totalSegundosB < 10) { $totalSegundosB = "0" . $totalSegundosB; }

    echo "<br>";
    echo "A hora de termino do jogo das $horasB é as $totalHorasB:$totalMinutosB:$totalSegundosB";
    echo "<br>";
}
$horasB = "23:45:00";
calcularFimDoJogoB($horasB);
 

            





