<?php include 'includes/header.php';

$array = ["producto1","producto2","producto3","producto4"];
var_dump($array);     //saldra un error con echo

//para que se vea mas ordenado el array

echo "<pre>";
var_dump($array);
echo "</pre>";

//ver la posicion 1
echo $array[1];

//añadir algo al ultimo a ese array,es como el push de js
 array_push($array,"productofinal");

//añadir algo al comienzo
array_unshift($array,"productoinicial");

//crear otro arreglo de otra forma
$array2 = array("1","2") ;
var_dump($array2);

echo "<pre>";
var_dump($array);
echo "</pre>";

include 'includes/footer.php';