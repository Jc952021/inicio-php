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

//in array buscar un elemento en un arreglo
$array=["aa","bb","cc"];

var_dump(in_array("aa",$array));

echo in_array("aa",$array);//saldra 1 qu sig si existe
echo in_array("bs",$array);//no saldra nada

$array2=[1,3,5,9,2,56];
$array3=[10,20,30,40,50];
//ordenar los numeros de menor a mayor
sort($array2); 
//ordenar los numeros de mayor a menor - r creo que es de reverse
rsort($array3);

var_dump($array2);

var_dump($array3);

//ordenar arreglos asociativos
$arrayas=[
  "numero"=>200,
  "cliente"=>"pepe",
  "apellido"=>"manco"
];
//lo ordena por su valor de numeros hasta la z
asort($arrayas);
var_dump($arrayas);

//lo ordena por su valor de z hasta numeros
arsort($arrayas);
var_dump($arrayas);

//ordenar por llaves ,es decir sus propiedades de a hasta la z
ksort($arrayas);
var_dump($arrayas);
//ordenar por llaves ,es decir sus propiedades de z hasta numeros
krsort($arrayas);
var_dump($arrayas);


include 'includes/footer.php';