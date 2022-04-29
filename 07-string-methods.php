<?php include 'includes/header.php';

$nombre1 = "Pepe";
$nombre2 = "    Argus  ";
$nombre3 = "minuscula";
$nombre4 = "mayuscula";
$oracion = "una oracion larga";

//ver la longitud de un string
echo strlen($nombre1);

//eliminar espacios en blanco
$texto = trim($nombre2);
echo $texto;

//convertir a mayuscula
echo strtoupper($nombre3);

//convertir a minuscula
echo strtolower($nombre4);

//reemplazar una palabra de una variable-en js era "una oracion".replace("oracion","nuevovalor")
echo str_replace("larga","corta",$oracion);

//ver la posicion de donde comienza el string
echo strpos($oracion,"oracion");

//concatenar strings
$palabra1 = "empieza";
$palabra2 = "termina";

echo $palabra1." con algo y ".$palabra2;
//se puede concatenar asi tambien pero recomiendan el de arriba
echo "{$palabra1} con algo y {$palabra2} rapido ";

include 'includes/footer.php';