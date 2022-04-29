<?php include 'includes/header.php';

//crear un arreglo de arreglos asociativos(son como obj fusionado con array de js)
$productos=[
  [
    "nombre"=>"televisor",
    "precio"=>20,
    "disponible"=> false
  ],
  [
    "nombre"=>"lapiz",
    "precio"=>40,
    "disponible"=> true
  ],
  [
    "nombre"=>"televisor",
    "precio"=>30,
    "disponible"=> true
  ]
  ];
//mostrar cada producto dentro de un li,y dentro ver cada propiedad
//se puede combinar html y php
foreach ($productos as $producto) {
  ?>
  <li>
    <p>Producto <?php echo $producto["nombre"]?> </p>
    <p>Precio <?php echo $producto["precio"]?> </p>
    <p>Disponible <?php echo $producto["disponible"]?"Disponible":"No disponible" ?> </p>
  </li>
  <?php //comienza aqui el php ya que abajo continua el foreach de php
}
include 'includes/footer.php';