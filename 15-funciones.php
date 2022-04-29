<?php 
declare(strict_types=1); //si pongo 0 no hace nada creo y si pongo 1 tiene que respetar el tipo de dato que pusen en el parametro
include 'includes/header.php';


//crear una funcion donde solo en sus parametros debe recibir un entero
//tambien puede haber parametros nombrados cuando ejecutas tu funcion
function funcion(int $entero1,int $entero2){
echo $entero1 + $entero2;
}

funcion(entero2:20,entero1:2);  //aca lo renombro el 1 parametro que sea el entero2 
//- notar que aca no hay $



include 'includes/footer.php';