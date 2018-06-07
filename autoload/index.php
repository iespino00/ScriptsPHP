<?php
require_once('autoload.php');

use app\Classes\Usuario;
$usuario  = new Usuario();

echo $usuario->crear();
?>