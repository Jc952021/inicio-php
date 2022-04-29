<?php include 'includes/header.php';

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
    "nombre"=>"televisión",
    "precio"=>30,
    "disponible"=> true
  ]
  ];
//transformar a json para que lo use javascript
echo "<pre>";
//si una palabra tenia una tilde salia unos codigos raros
//, para eso de agrega un parametro JSON
$json = json_encode($productos,JSON_UNESCAPED_UNICODE);

var_dump($json);

//para pasar de string a arreglo asociativo

$arr = json_decode($json);
var_dump($arr);

echo "</pre>";




include 'includes/footer.php';