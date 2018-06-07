<?php
//                    IMPLODE
$miArreglo = array('el','codigo','fuente');
$miArreglo2[]= 'Programacion';
$miArreglo2[]= 'en';
$miArreglo2[]= 'PHP';

$salida1 = implode('-', $miArreglo);

echo "salida del arreglo 1: ".$salida1;
echo "<br>";

$salida2 = implode('|',$miArreglo2);
echo "Salida del arreglo 2: ".$salida2;
echo "<p>";

 //        EXPLODE

 $miCadena = "el|foro|de|programacion";
 echo $miCadena;
 $miCadena = explode('|' , $miCadena);
 echo "<br>";
 print_r($miCadena);

?>