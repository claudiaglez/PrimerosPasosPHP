<?php
// Crear un array de 10 números
$numbers = array(1,3,5,7,9,11,13,15,17,19);

// Obtén el largo del array e imprime en pantalla y consola
echo count($numbers);

echo "<br>";

// Agrega un valor tipo string al array que creaste anteriormente e imprime en pantalla

array_push($numbers, "número");
print_r($numbers);

echo "<br>";

// Ahora agrega 2 elementos más a tu array e imprime en pantalla.

array_push($numbers, "teléfono", 77);
print_r($numbers);

echo "<br>";

// Crea un nuevo array y concaténalo con el anterior e imprime en pantalla.

$countries = array("Germany", "France", "Moldova", "Greece");

echo "<br>";

$numberCountriesArray = (array_merge($numbers, $countries));
print_r($numberCountriesArray);

echo "<br>";
// Crear una función que imprima en consola y pantalla todos los números de un array en una lista

$numbers = array(1,3,5,7,9,11,13,15,17,19);

function printArray($numbers){
    print_r($numbers);
}

printArray($numbers);

echo "<br>";

// Crear una función que añade un número al array

function addNumber(&$numbers){
    (array_push($numbers, 47));
}

addNumber($numbers);
print_r($numbers);

echo "<br>";

// Crear una función que elimine los números pares de ese array.

$numbers01 = array( 1, 2, 8, 9, 14, 27);

function oddNumbers($numbers01){
    return $numbers01 % 2 != 0;
}

$numbersOdd = array_filter($numbers01, 'oddNumbers');
print_r($numbersOdd);

echo "<br>";

// Crear una función que devuelva el número mayor de un array.

function maxValue($numbers){
    echo(max($numbers));
}

//maxValue($numbers);

echo "<br>";

// Crear una función que devuelva el número menor de un array.

function minValue($numbers){
    echo(min($numbers));
}

//minValue($numbers);

echo "<br>";

// Crear un función que convierta en minúsculas todas las letras de un texto.

$text = "Con diez cañones por banda,
Viento en popa a toda Vela,
no corta el Mar, sino Vuela
un Velero Bergantín;";

function toLowerCase($text){
    return strtolower($text);
}

echo toLowerCase($text);

echo "<br>";

// Crear una función que convierta en mayúsculas todas las letras de un texto.

$text = "Con diez cañones por banda,
Viento en popa a toda Vela,
no corta el Mar, sino Vuela
un Velero Bergantín;";

function toUpperCase($text){
    return strtoupper($text);
}

echo toUpperCase($text);

echo "<br>";



?>