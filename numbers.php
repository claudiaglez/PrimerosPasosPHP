<?php
// Declara dos variables y dale un valor de tipo integer e imprime ambas en pantalla

$numero01 = 7;
$numero02 = 20;

echo $numero01 . "<br>";
echo $numero02 . "<br>";

// Suma ambas variables de tipo integer e imprime en pantalla.

echo ("La suma de los números es: " . $numero01 + $numero02 . "<br>");

// Declara dos variables y dale un valor de 1 y 0 tipo integer e imprime el tipo de dato en pantalla y consola

$numero03 = 1;
$numero04 = 0;

var_dump($numero03);
var_dump($numero04);

echo "<br>";

// a las variables anteriores cambiales el tipo de dato a Booleano e imprime en el nuevo tipo de dato en pantalla y consola.

$numero03 = true;
$numero04 = false;

var_dump($numero03);
var_dump($numero04);

echo "<br>";

/* Crear función que reciba como parámetros dos números y que retorne la suma de ellos. Imprime
en pantalla y por consola el resultado */

$num05 = 9;
$num06 = 14;

function getAddition($num05, $num06){
    $result = $num05 + $num06;
    return $result;

}

$addition = getAddition($num05, $num06);

echo "El resultado de la suma es: $addition";

echo "<br>";

// Crear función que determine si un número es par o impar. Imprime por consola y pantalla


function getEven($numeroIngresado){
    if($numeroIngresado % 2 == 0){
        return "Par";
    } else {
        return "Impar";
    }

}

$numeroIngresado = 7;

$result = getEven($numeroIngresado);

echo "El número ingresado es: $result";

echo "<br>";

?>