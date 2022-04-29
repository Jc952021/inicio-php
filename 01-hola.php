<?php include "includes/header.php";
echo "hola mugdo";?>

<?php print("hola");

print_r(["hola","ayuda"]);
var_dump("ayuda");
include "includes/footer.php"; 

//instalar laragon-variables de entorno agregar la ruta laragon bin
// el <?php es como el script de js que te indica que vas a escribir codigo php
//puedes ejecutar el archivo con la extension php serve proyect o ejecutarlo desde la terminal de esta carpeta php -S localhost:5000 01-hola.php
//sign codigo php -S crear un servidor localhost y abrir el archivo hola
//para mostrar ua variables se puede poner el print - print() - print_r() es para mostrar el valor de un objeto y var_dump() te muestra el tipo de dato que tiene
//puedes poner html dentro de un <?php <br/> ?< pero no es recomendable
//puedes agregar un html armado aqui con include,se puede poner donde quieras
//puedes cerrar el php? y tambien no-ir a variables