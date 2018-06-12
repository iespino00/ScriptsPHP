

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
    <?php   
    if(isset($_COOKIE['usuario']))
      {
        echo "Bienvenido ".$_COOKIE['usuario'];
       }
        else{echo "Bienvenido";}
    ?> 
    </title>
</head>
<body>

    <form action="index.php" method="POST">
        Nombre:
        <input type="text" id="usuario" name="usuario" >
        <button type="sumbit" name="enviar" id="enviar" >Enviar¡¡ </button>
    </form>

      <button type="submit" id="borrar" name="borrar">Borrar Cookie</button>

      
 <?php
//Estructura de la cookie: //nombre = valor ; expires = fecha; path = /; domain= dominio.com

if(isset($_POST['enviar']))
{
    $usuario = $_REQUEST['usuario'];
    setcookie('usuario',$usuario, time()+4800); //
}

?>


</body>
</html>

