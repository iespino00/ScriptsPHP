<?php
//La función isset() nos permite comprobar si una variable esta definida, devolviendo true si lo estuviese es decir si la variable fue instanciada previamente utilizada o separada su espacio de memoria (declarada)

$resultado = isset($variable);

echo $resultado;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variable Isset</title>
</head>
<body>
    
     <form action="" method="post" name="frm">
        Nombre: 
        <input type="text" name ="nombre"><br />
        <input type="submit" value="enviar">
    </form>

    <?php
            if(isset($_POST['nombre']))
            {
                echo "La variable " .$_POST['nombre']. " existe, se entro porque se presionó enviar";
            }
    ?>
</body>
</html>