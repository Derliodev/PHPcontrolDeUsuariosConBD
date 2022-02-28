<?php

session_start();
/* Compara si viene con variable de mensaje */
if($_SESSION['auth'] == "none"){
    /* Si es TRUE lanza el mensaje en JS */
    echo '<script language="javascript">alert("Ingreso no autorizado");</script>';
    $_SESSION = array();
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN USUARIOS</title>
</head>
<body>
    <h1>Ingreso de Usuarios</h1>
    <form action="admin.php" method="post" target="_self">
        <table>
        <tr>
                <!-- Usuario -->
                <td><label for="user">Nombre de usuario</label></td>
                <td><input type="text" name="user" placeholder="Su nombre de usuario" required /></td>
            </tr>
            <tr>
                <!-- Contraseña -->
                <td><label for="pass">Contraseña</label></td>
                <td><input type="password" name="pass" placeholder="Su contraseña" required /></td>
            </tr>
            <tr>
                <!-- Submit -->
                <td colspan="2" style="text-align: center; padding-top: 20px;"><input type="submit" value="Ingresar"></td>
            </tr>
            <tr>
                <!-- Probar el logeo -->
                <td colspan="2" style="text-align: center; padding-top: 20px;"><a href="home.php">Probar logeo</a></td>
            </tr>
        </table>
    </form>
    
    
</body>
</html>