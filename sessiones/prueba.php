<?php
require_once 'session.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido</title>
</head>
<body>
<h1> <?php echo 'Bienvenido '.$_SESSION['usuario']; ?></h1>

<form method="post">
<center><button type="submit" id="cerrar" name="cerrar">Cerrar Session</button></center>
</form>

<?php
if(isset($_POST['cerrar']))
{
    header("Location:index.php");
}
?>


</body>
</html>