<?php
include("Estudiantes.php");

$miestudiante = new Student("ignacio",array(10,15,16,20)); //Declaramos el Objeto con parametros que serán procesados por el construccior
 
$miestudiante->notas[3]=18; //la variable notas en la clase es publica, as que podemos manipularla directamente
$miestudiante->imprimir_notas(); //llamamos a la funcion que imprime las notas
echo "El promedio del estudiante <strong>" .$miestudiante->nombre. "</strong> es: "; //imprimos un mensaje con el nombre del estudiante
echo $miestudiante->promedio(); //llamamos a la funcion que imprime las notas una por una
?>