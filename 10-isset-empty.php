<?php include 'includes/header.php';


$array1 = [];
$array2 = array("1","2");
$array3 = [
  "algo"=>3,
  "vacio"=>[]
];

//empty para ver si el array no tiene ningun valor
var_dump(empty($array1));

//isset mira si un arreglo esta creado
var_dump(isset($array1)); //si esta creado a pesar de que no tiene ningun valor
var_dump(isset($array4));

//iset este tambien ve si un valor de propiedad del array existe
var_dump(isset($array3["algo"]));
var_dump(isset($array3["vacio"]));//true a pesar de que tiene [] vacio

include 'includes/footer.php';