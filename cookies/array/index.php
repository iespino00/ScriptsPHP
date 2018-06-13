<?php
$datos = array("Ignacio","Espino","29","Lázaro Cárdenas","Michoacán","México");

setcookie('empleados[nombre]', $datos[0], time()+3600);
setcookie('empleados[apellido]', $datos[1], time()+3600);
setcookie('empleados[edad]', $datos[2], time()+3600);
setcookie('empleados[ciudad]', $datos[3], time()+3600);
setcookie('empleados[estado]', $datos[4], time()+3600);
setcookie('empleados[pais]', $datos[5], time()+3600);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

if(isset($_COOKIE['empleados']))
{
echo '<h1>Datos del empleado:'.$_COOKIE['empleados']['nombre']. '</h1>';
echo "<p>".json_encode($_COOKIE['empleados']);

}
else{
    echo "<h1>No hay empleados en el array de cookies</h1>";
}
?>
    
</body>
</html>