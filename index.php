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

//tabuada do 5 

echo "<h1> Tabuada do 5</h1>";

$numero = 5;
echo "1 x $numero = " . $numero * 1 . "<br>";
echo "2 x $numero = " . $numero * 2 . "<br>";
echo "3 x $numero = " . $numero * 3 . "<br>";
echo "4 x $numero = " . $numero * 4 . "<br>";
echo "5 x $numero = " . $numero * 5 . "<br>";
echo "6 x $numero = " . $numero * 6 . "<br>";
echo "7 x $numero = " . $numero * 7 . "<br>";
echo "8 x $numero = " . $numero * 8 . "<br>";
echo "9 x $numero = " . $numero * 9 . "<br>";
echo "10 x $numero = " . $numero * 10 . "<br>"; 


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

$Vartempo = $valor1;
    $valor1 = $valor2;
    $valor2 = $Vartempo;

switch($operador) {
    case "+":
          $resultado = $valor1 + $valor2;
           echo " A soma dos valores é de: $resultado";
           break;
    case "-":
         $resultado = $valor1 - $valor2;
         echo " A subtração dos valores é de: $resultado";
    case "*":
         $resultado = $valor1 * $valor2;
         echo " A multiplicação dos valores é de: $resultado";
    case "/":
          $resultado = $valor1 / $valor2;
          echo " A divisão dos valores é de: $resultado";
         break;
    default:
         echo "O operador informado é invalido!";
         break;
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
    echo "$nome tá podendo passar!";
 }

 //exerciciop 5 pag 15

$num =2;
$restoDivisao = $num % 2;
if($restoDivisao == 0){
    echo "O $num é par";
} else {
    echo "O $num é limpar";
}

echo "<h1> Tabuada do 5 mais elaborada</h1>";

$contar = 0;

// $contar = $contar +1; || $contar += 1; || $contar++;
for ($contar = 0; $contar <= 10; $contar++) {

    if ($contar == 5) {
        continue;
    }

   $restoDivisao = $contar % 2;
   $ehDivisaoExata = $restoDivisao == 0;

   if($ehDivisaoExata) {
    echo "$contar é par";
   }else{
    echo "O $contar é impar";
   }

   //  if ($contar == 5) {
   //     break;
   //  }
} //TERMINA O FOR AQUI

echo "<br>";
echo "Pq q nn existe for preta? -Bill do Bora Bill";

//Contar e Exibir os numeros pares de 1 até 50;

//Exibir os numeros em ordem DECRESCENTE (Maior para Menos - DESC) de 10 - 0.

// Calcular o fatorial de um numero. Ex.: calcular o fatorial de 5

echo "<h1>  Números pares 1 - 50 </h1>";

for ($Sopares = 0; $Sopares <= 50; $Sopares = $Sopares +2){
    echo "<br>";
    echo "Apenas números pares: $Sopares";
}

echo "<h1> Exibir em ordem decrescente </h1>";

for ($Sopares = 50; $Sopares >= 0; $Sopares = $Sopares -2){
    echo "<br>";
    echo "Apenas números pares: $Sopares";
}

echo "<h1> Fatorial do número 5 </h1>"; 

// 5 ? 5 x4...
$numero = 5;
$antecessor = $numero - 1;

for ($Fatorial = $antecessor; $Fatorial >= 1; $Fatorial = $Fatorial -1) {
    $numero *= $Fatorial;
}

echo "O fatorial de 5: $numero";

echo "<h1>Números pares 1 - 50</h1>";

$numero = 0;

echo "<h1> Tema de casa </h1>";

while ($numero <= 50) {
    echo "<br>Apenas números pares: $numero";
    $numero = $numero + 2; // soma de 2 em 2
}

echo "<h1>Exibir em ordem decrescente</h1>";

$numero = 50;

while ($numero >= 0) {
    echo "<br>Apenas números pares: $numero";
    $numero = $numero - 2; // diminui de 2 em 2
}

echo "<h1>Fatorial do número 5</h1>";

$numero = 5;
$fatorial = 1;
$contador = $numero;

while ($contador >= 1) {
    $fatorial = $fatorial * $contador; // multiplica tudo
    $contador = $contador - 1;         // vai diminuindo
}

echo "O fatorial de 5 é: $fatorial";
