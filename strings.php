<?php

/* Convierte todos los caracteres del string a mayúsculas e imprimir en pantalla, sin modificar la
variable original. */

$nombre = "Gala";
$nombreMayusculas = strtoupper($nombre);
echo $nombreMayusculas . "<br>";

// Imprime en pantalla la longitud de la variable tipo string.

$nombreLongitud = strlen($nombre);
echo $nombreLongitud . "<br>";

//Imprime en pantalla la cantidad de palabras de la variable tipo string.

$nombreContarPalabras = str_word_count($nombre);
echo $nombreContarPalabras . "<br>";

/* Cambia a orden inverso los caracteres de la variable string e imprime en pantalla, sin modificar la
variable original. */

$nombreInverso = strrev($nombre);
echo $nombreInverso . "<br>";

//Reemplaza la palabra 'Gato' de tu variable original a 'Michi' e imprime en pantalla.

$michi = "es un michi grande";
$gato = str_replace("michi", "gato", $michi);
echo $gato . "<br>";



?>