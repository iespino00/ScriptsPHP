<?php
//nos mandará warning porque no existe el directorio
opendir("directorio/");

$var=@opendir("directorio/");

?>