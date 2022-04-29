<?php include 'includes/header.php';
//crear un array
$array1=[];

//pushear algo
array_push($array1,"algo");
//agregar un string al comienzo del arreglo
array_unshift($array1,"primero");
//crear un arrar sin []
array("1","3");
//son como los objetos de js
//ese => son como los :
$arrayobj1 = [
  "nombre"=>"Pepe",
  "saldo"=> 200,
  "informacion"=>[
    "info"=>"premium"
  ]
];
var_dump($arrayobj1);
//y este es un arreglo normal y dentro un arreglo asociativo(obj)
$arrayobj2 = [
  [
  "nombre"=>"Pepe2",
  "saldo"=> 200,
  "informacion"=>["info"=>"premium"]
  ]
      ];
  //para acceder al arreglo asociativo es como acceder 
  //a la 1 posicion de un array
var_dump($arrayobj2[0]);
//acceder a una propiedad del arrayobj1- es como el de un obj de js 
//cuando accedes a algo obj["propiedad"]
echo $arrayobj1["nombre"];
//acceder a la propiedad info
echo $arrayobj1["informacion"]["info"];
//añadir otra propiedad
echo $arrayobj1["nuevo"] = "nuevo";

include 'includes/footer.php';