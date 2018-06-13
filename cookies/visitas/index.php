<?php
if(isset($_COOKIE['visita']) && isset($_COOKIE['contador']))
{
 setcookie('contador', $_COOKIE['contador']+1, time()+31536000);

  echo '<h1>Que alegría verte de nuevo por aqui, es tu '.$_COOKIE['contador'].' Visita</h1>';
}
else{
   setcookie('visita','1', time()+31536000);
   setcookie('contador',1,time()+31536000);
   echo '<h1>Bienvenido a mi página por primera vez</h1>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detectar visitas</title>
</head>
<body>
    
</body>
</html>