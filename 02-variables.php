<?php include 'includes/header.php';

$nombre="Pepe";
$nombre = "Pepe2";
echo $nombre;

define("apellido","garcia");
echo apellido;

include 'includes/footer.php';

//esto se abrio con php open file
//para crear una variable se pone al inicio un $
//el echo es como el console.log
//tambien puedes cambiar el valor de la variable como si fuera un let
//para crear una constante se pone un define("nombre de tu const, su valor)
//al poner su echo con el nombre de su $constante saldra error ya que ese define lo crea como constante pero es como un identificador
//para mostrarlo se pone sin el $ -sgt