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

