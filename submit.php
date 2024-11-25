<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<?php
$name = ''; //inicializas la variable para poder acceder a ella fuera del if
$apellido= '';
if ($_SERVER["REQUEST_METHOD"] == "POST") { //Si el metodo que ha recibido el servidor es POST
    $name = $_POST["nombre"];  //Recoge lo que se ha enviado con el nombre "nombre" y lo mete en la variable $name
    $apellido = $_POST["apellido"];


    echo $name . PHP_EOL; //Muestra por pantalla lo que hay en la variable y usa el EOL para poner un espacio
    echo $apellido;
}
?>
    <body>
        <h1><?= $name?></h1>
        <h1><?= $apellido?></h1>
    </body>
</html>

