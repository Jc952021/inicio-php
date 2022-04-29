<?php include 'includes/header.php';

$autenticado = true;
if($autenticado){
  echo "Estoy autenticado";
}



$array=[
"nombre"=>"pepe",
"apellido"=>"manco",
"informacion"=>[
  "tipo"=>"premium"
]
];

switch ($array["informacion"]["tipo"]) {
  case 'premium':
    echo "Soy premium";
    break;
  case 'manco':
    echo "no soy premium";
    break;
  
  default:
    echo "pobre";
    break;
}


include 'includes/footer.php';