<?php include 'includes/header.php';


//do while 
$a=1;
do{
  echo $a."<br>";
  $a++;
}
while ($a <= 10);

//while
$i=0;
while ($i <= 10){
  echo $i . "<br>";
  $i++;
};
//for
//si es divisible entre 3 concatena primo
//si es divisible entre 2 concatena par
//si es divisible entre 2 y 3 concatena ambos
//si no es ninguno que imprima ese numero
for ($e=1; $e <= 100; $e++) { 
  if($e%2===0 && $e%3===0){
    echo $e . "ambos <br>";
  }else if($e%2===0){
    echo $e . "par <br>";
  }else if($e%3===0){
    echo $e . "impar <br>";
  }else{
    echo $e. "<br>";
  }
}

$array = ["primero","segundo","tercero"];
//foreach
foreach ($array as $elemento) {
 echo $elemento . "<br>";
}
//foreach a un arreglo asociativo
$arrayas=[
"primer"=>12,
"segundo"=>20,
"tercer"=>30
];
foreach ($arrayas as $prop => $valor) { //prop es la propiedad y el otroes su valor,
  //si no pones el prop saldra solo su valor
  echo "El " . $prop ." tiene el valor de ". $valor ."<br>";
}


include 'includes/footer.php';