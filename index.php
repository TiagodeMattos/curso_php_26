<?php

$aviao = "Boeing747";
$valor1 = 30;
$valor2 = 15;
$soma = $valor1 + $valor2; // 10+15 -> 25
// mesma coisa
// $soma = $soma + 3; // 28
$soma +=3; // 28

echo "Soma é: " . $soma;
echo "<br>"; 

echo "Soma é: " . $soma;
echo "<br>";

echo "A conta $valor1 + $valor2.<br>Some é: $soma";
echo "<br>";

$valor1 = 10;
$valor2 = 15;
$subtracao = $valor1 - $valor2;
$subtracao = $subtracao - 3;
echo "subtracao é: " . $subtracao;
echo "<br>";

$valor1 = 10;
$valor2 = 15;
$divisao = $valor1 / $valor2;
$subtracao = $subtracao - 3;
echo "A divisão de $valor1 por $valor2 é: " . $divisao;
echo "<br>";

$soma -= $subtracao;
echo  "Some é " . $soma; 
echo "<br>"; 

$valor1 = 50;
$valor2 = 2;
$restoDivisao = $valor1 % $valor2;
echo "subtracao é: " . $restoDivisaos;
echo "<br>";
