<?php

echo '<center><h1>No has Iniciado Sesion</h1></center>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesión expirada</title>
</head>
<body>
    <div>
         <form method="post">
         <center><button type="submit" id="iniciar" name="iniciar">Iniciar Sesion</button>
         </center>
         </form>
    </div>
<?php
if(isset($_POST['iniciar']))
{
    header("Location:index.php");
}
?>


</body>
</html>