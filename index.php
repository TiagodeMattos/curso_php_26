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

$soma = 10 + 10; 

/*simular o funcionamento de uma calculadora
utilizar if, else if, else.
Operadores: + - * /
Dica: Ter uma variavel chamada $operador.

*/
// Dados da calculadora
echo "<h1> Calculadora</h1>";

$valor1 = 2;
$operador = "+";
$valor2 = 6;

if ($valor1 < $valor2){
   
    $Vartempo = $valor1;
    $valor1 = $valor2;
    $valor2 = $Vartempo;

} 

// Calculadora
if ( $operador == "+" ){
    $resultado = $valor1 + $valor2;
    echo " A soma dos valores é de: $resultado";
} else if($operador == "-"){

    $resultado = $valor1 - $valor2;
    echo " A subtração dos valores é de: $resultado";
}  if ($operador == "*"){
    $resultado = $valor1 * $valor2;
    echo " A multiplicação dos valores é de: $resultado";
} else if ($operador == "/"){
    $resultado = $valor1 / $valor2;
    echo " A divisão dos valores é de: $resultado";
}

//fazer exercicio 8 da pagina 15 da apostila.
/* NÃO UTILIZAR ARRAY
UTILIZAR OS EXERCICIOS DE MÉDIAS E APLICAR
E LOGICA QUE VALIDA SE O ALUNO PASSOU DE ANO.
*/ 

echo "<h1> Exercicio 8 P 15</h1>";

//Aritimética

$total1 = 1;
$total2 = 2;
$total3 = 3;
$total4 = 4;
$total5 = 5;
$total6 = 6;

$resultado = $total1 + $total2 + $total3 + $total4 + $total5 + $total6  / 6;

if ($resultado >= 6 ){
    echo "O aluno foi aprovado! média $resultado";

}
else {
    echo "O aluno foi reprovado";
}


//Ponderada 

$Número1 = 10;
$Número2 = 20;
$Número = 30;
$peso = 5;
$peso1 = 4;
$peso2 = 2;

echo "<h1> Exercicio 8 P 15/2</h1>";

$resultadoo = $Número1 * $peso1 + $Número2 * $peso2 + $Número * $peso % $peso1 + $peso2 + $peso;
if ($resultadoo >= 6){
    echo "O aluno foi aprovado! média $resultadoo";

}
 else {
    echo "O aluno foi reprovado";
 } 

 echo "<h1> Exercicio 9 P 16</h1>"; 

 $nome = "Tiago";
 $idade = 16;

 if ($idade <= 18 ){
echo "$nome você é jovem demais para entrar!";

 } else {
    echo "$NOME tá podendo passar!";
 }
