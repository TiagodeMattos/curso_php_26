<?php 

//Tipos primitivos
//Int | Integer == 1, 2, 3...
//Float | Double == 1.0, 2.0, 3.0...
//String | Char-Character == "Oi", 'o'... 

$texto = ""; // String vazias

//Tipos compostos|Coleção : Array | Vetor
$numeros = array(); //arrazy vazio
$numeros = []; // Array vazio

$numero = 10;
$numero = 11;


$numeros = [10, 11, 12, 5.5, 52.99, "Infoserv"]; // tam: 6
//          0,  1,  2,  3,      4,      5

for($i = 0; $i < 6; $i++) {
    //echo $numero
    echo $numeros[$i] . "<br>";

}

$contador = []; 

for($a = 0; $a <= 10; $a++)
    $contador[] = 14;


echo "<br> implode:<br>";
echo implode(", ", $numeros);

echo "<br>";
print_r($numeros);
echo"<br>";
var_dump($numeros);

$numero = [10, 11, 12, 5.5, 52.99, "Infoserv"]; // tam: 6
//          0,  1,  2,  3,      4,      5

$i = 0;
while( $i < 6){ 

    echo $numeros[$i] . "<br>;";

    $i++;
}

$i = 0;
do {
    echo $numeros[$i] . "<br>";
    $i++;
    
} while($i <6);

//encontrar os primos 3, 5, 7, 11, 13. só que salvar eles com array


$contPrimos = 0;
$numeroAvaliado = 3; 

$salvarPrimos = [];

for ($numeroAvaliado = 3; $contPrimos  <= 5; $numeroAvaliado++) {

    $antecessor = $numeroAvaliado -1;
    $ehPrimo = true;

    for($divisor = 2; $divisor <= $antecessor; $divisor++ ) {

        $restoDivisao = $numeroAvaliado % $divisor;

        $ehDivisaoExata = $restoDivisao == 0;
        
        if ($ehDivisaoExata) {

            $ehPrimo = false;
            break; 
        }
    }

    if($ehPrimo == true){
        $salvarPrimos[] = $numeroAvaliado;
        $contPrimos++;
    }
}

for($i = 0; $i < 5; $i++) {
    
    echo $salvarPrimos[$i] . "<br>";

} 

/** 
 * Somar arrays;
 * $arrrayInicio = [5, 10, 50];*
 * $arrayFim = [10, 90, 30];
 * Resultado esperado:
 * $arraySoma[15, 100, 80];
 * $arrayMultiplicado[50, 1000, 24]
 */ 

$arraySoma = [];
$arrayInicio = [5, 10, 50];
$arrayFim = [10, 90, 30];


for($i = 0; $i < 3; $i++){
 $arraySoma[$i] = $arrayInicio[$i] + $arrayFim[$i];
} 

echo "<br>Palíndromo:<br>";
$palavra = "Ana";
$tamanho = strlen($palavra);
$palavraInvertida = "kaiak'";

for($i = $tamanho; $i >= 0; $i--) {
    $palavraInvertida .= $palavra[$i];
}

$ehPalindromo = $palavra === $palavraInvertida;

if ($ehPalindromo ) {

    echo "<br> A palavra é Palindromo";
}  
else {

    echo "<br> A palavra não é Palindromo";
}


/** 
 * Contar quantas vogais existem em uma frase.
 * Vogal (caso vc seja um idiota q está lendo isso e nn sabe oq é)
 * A, E, I, O, U
 * vogais = ['a', 'e', 'i', 'o', 'u'];
 * 
 * $existeVogal = in_array(vogalMinuscula, $vogais);
 * 
 * ex:
 * $palavra = "infoserv";
 * $palavra = "infosErv
 * 
 * Saida esperada:
 * Contar quantas vogais existem em uma frase ou palavra
 * totalizando a quantidade de cada uma, ou seja, quandos A, quantos E... 
 */

$vogalMinuscula = strtolower($palavra[$i]);

$palavra = "infoserv";
$vogais = ['a', 'e', 'i', 'o', 'u'];
$contador = 0;

for ($i = 0; $i < strlen($palavra); $i++) {

    $letra = strtolower($palavra[$i]);

    if (
        $letra == 'a' ||
        $letra == 'e' ||
        $letra == 'i' ||
        $letra == 'o' ||
        $letra == 'u'
    ) {
        $contador++;
    }
}

echo "Quantidade de vogais: " . $contador;

