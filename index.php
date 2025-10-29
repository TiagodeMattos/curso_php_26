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
echo "subtracao é: " . $restoDivisao;
echo "<br>";

// Converter graus Fahrenheite para Celcius. 95F -> ?F (35) 

$fahrenheite = 95;
$grausFahrenheite = $fahrenheite - 32;
$celcius = $grausFahrenheite / 1.8; 

echo "A conversão de fahrenheite $fahrenheite para celcius é $celcius <br>"; 

$kelvin = $celcius + 273.15; 

echo "A conversão de $celcius para kelvin é de $kelvin <br>;"; 

$celcius = $kelvin - 273.15;

echo "A conversão de $kelvin para celcius é de $celcius <br>";

$tenhoDinheiro = true;
$tenhoVontadeTomarCafe = true;

if ($tenhoDinheiro && $tenhoVontadeTomarCafe)
{
    echo "vou tomar café<br>";
} else if ($tenhoDinheiro && !$tenhoVontadeTomarCafe) {
    echo "vou comprar chocolate<br>";
} else {
    echo "nao tenho vontade de nada<br>";
}

$soma = 10 + 10;

