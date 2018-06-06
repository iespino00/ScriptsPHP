<?php
// $prompt =  '<script>prompt("Hola","Mundo");</script>';

$carpeta= '001';

if(!file_exists($carpeta))
{
 mkdir($carpeta, 0777,true);
 echo 'Carpeta Creada';
}else 
 {
    echo 'La carpeta ya existe';
 }
?>