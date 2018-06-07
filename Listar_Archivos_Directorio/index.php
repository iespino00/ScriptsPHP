<?php

$directorio = opendir(".");  //ruta actual

$ruta = $_SERVER["HTTP_REFERER"].basename(__DIR__).'/';

while ($archivo = readdir($directorio))
{
    if (is_dir($archivo))  //verificamos si es o no  un directorio
    {
        echo "<a href='".$ruta.$archivo."'>[".$archivo."]</a><br>";
    }
    else{
        echo "<a href=".$ruta.$archivo.">".$archivo. "</a><br>";
    }
}

?>