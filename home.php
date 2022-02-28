<?php

session_start();

/* Compara si viene con autorizacion, entonces muestra, si no,
 redirecciona al inicio con variable para activar un mensaje */
if(!isset($_SESSION['auth'])){
    header('Location: login.php');
    $_SESSION['auth'] = "none";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOMEPAGE</title>
</head>
<body>
    <h1>INICIO</h1>
    <table>
        <tr>
            <td>Id Trabajador</td>
            <td style="color: red"><?php echo $_SESSION['cod'];?></td>
        </tr>
        <tr>
            <td> Nombre de usuario</td>
            <td style="color: red"><?php echo $_SESSION['usuario'];?></td>
        </tr>
        <tr>
            <td>Contraseña</td>
            <td style="color: red"><?php echo $_SESSION['clave'];?></td>
        </tr>
        <tr>
            <td>Nombre de trabajador</td>
            <td style="color: red"><?php echo $_SESSION['nombre'];?></td>
        </tr>
        <tr>
            <td>Autorizacion</td>
            <td style="color: red"><?php echo $_SESSION['auth'];?></td>
        </tr>
    </table>
    <br/>
    <br/>
    <!-- Vinculo hacia el archivo que finaliza la session -->
    <a href="logout.php">Salir</a>


</body>
</html>