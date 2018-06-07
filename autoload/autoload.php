<?php

define('ROOT', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR); //Directory_separator: trae el slash (/) a la hora de separar directorios

spl_autoload_register('autoload'); //se registra la funcion autoload

function autoload($class)  //va requerir la case que quiere cargar.
{
 $class = ROOT . DS . str_replace("\\",DS, $class).'.php'; //Se crea la ruta sustiuyendo el / para no tener problemas con las diferentes versiones de php

    if(!file_exists($class))
    {
        throw new Exception("Error al cargar la clase". $class);
    }
   require_once($class);
}


?>