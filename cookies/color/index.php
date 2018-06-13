
<?php
if(isset($_POST['color']))
{
    $color = $_POST['color'];
    setcookie('color', $color, time()+80000000);
}
else
{
  if(isset($_COOKIE['color']))
  {
      $color = $_COOKIE['color'];
  }
  else{
        $color = 'white';
      }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body <?php echo "style='background-color:$color'"; ?> >
    <form method="post" action="index.php">
        <label for="color">Escoge tu color de fondo</label>
        <select name="color" id="color">
            <option value="red">Rojo</option>
            <option value="blue">Azul</option>
            <option value="green">Verde</option>
            <option value="yellow">Amarillo</option>
            <option value="silver">Gris</option>
            <option value="black">Negro</option>

            <input type="submit" value="Cambiar Color¡">
        </select>
    </form>
</body>
</html>