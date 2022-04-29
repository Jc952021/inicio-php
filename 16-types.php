<?php 
declare(strict_types=1); //de este saldra error aca en el visualcode si no respeta el tipo de dato
include 'includes/header.php';

//en la funcion se puede agregar un : tipo de dato que desees que retorne,si no retornas 
//este tipo de dato saldra error en la web,si quieres que retorne 
//dos tipos de datos se pone un | que siginifica o
//si no quieres retornar nada y solo quieres hacer un echo o que retorne un null, se pone unn void
function funcion(bool $param1):string|int{
if($param1){
  return 4;
}else{
  return "ayuda";
}
}

$mostrar = funcion(true);
echo $mostrar;



include 'includes/footer.php';