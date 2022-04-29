<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 40;
$numero4 = 50;
$numero5= "50";

var_dump($numero1>$numero2);
var_dump($numero1<$numero2);
var_dump($numero1==$numero2);
var_dump($numero4==$numero5);
var_dump($numero4===$numero5);
//php tiene otra comparacion
var_dump($numero2<=>$numero1);
//si el izq es menor saldra -1,si es igual 0 , si la derecha es menor entonces 1



include 'includes/footer.php';