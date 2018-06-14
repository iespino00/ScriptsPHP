<?php
session_start();
$_SESSION['usuario']="";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">



    </head>
    <body>
    <center><form action="index.php" method="post">
    <input type="text" id="nombre" name="nombre">

    <button type="submit" name="session" id="session">Iniciar Sesion</button>
    </form></center>


    <?php  
    if(isset($_POST['session']))
    {
       $_SESSION['usuario'] = $_POST['nombre'];
       $_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s"); 
       header("Location:prueba.php");
    }
    ?>
    </body>
</html>