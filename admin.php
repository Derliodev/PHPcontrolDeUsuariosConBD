<?php

session_start();
/* Recibe los parametros del login.php que vienen por POST */
$user = $_POST['user'];
$pass = $_POST['pass'];

$conexion = mysqli_connect("localhost", "root", "", "dbprint");

//Prueba de conexion con la DB

// if (!$conexion){
//     exit("error: " . mysqli_connect_error());
// }
// else{
//     echo "La conexion se ha establecido";
// } 


/* Consulta a la DB */
$query = "SELECT * FROM trabajador WHERE usuario = '$user'";
$resultado = mysqli_query($conexion, $query);

/* Verifica si se pudio realizar la conexion y enviar la consulta */
if(!$resultado){

    /* Muestra el error en caso de que exista al realizar la consulta */
    exit("Ocurrió un problema al hacer la consulta: ".mysqli_error($conect));
}else{
    
    /* Compara si el resultado viene vacío */
    $filas = mysqli_num_rows($resultado);
    if($filas == 0){
        /* Si la consulta viene vacía, entonces elimina toda la session y lanza mensaje de JS */
        $_SESSION = array();
        session_destroy();
        unset($query, $resultado, $user, $pass);
        /* Mensaje de JS */
        echo nl2br('<script type="text/javascript">alert("¡Usuario no Existe!");location.href ="login.php";</script>');
    }else{
        /* Si la respuesta contiene datos, los guarda en variables de la session */
        $filas = mysqli_fetch_assoc($resultado);
        $_SESSION['cod'] = $filas["cod_emp"];
        $_SESSION['usuario'] = $filas["usuario"];
        $_SESSION['clave'] = $filas["clave"];
        $_SESSION['nombre'] = $filas["nombre"];
        $_SESSION['auth'] = "Puede ver esta web";
        
        if($pass == $_SESSION['clave']){
            /* Compara si la clave existe en los datos que vienen de la BD, de ser asi, graba una variable
            de session indicando que esta autorizado y luego redirecciona mediante JS */
            $_SESSION['auth'] = "ON";
            /* Redireccion */
            echo '<script type="text/javascript">location.href ="home.php";</script>';
        }else{
            /* Si la contraseña no coinside entonces elimina variables y destruye la session */
            
            // Destruir todas las variables de sesión.
            $_SESSION = array();
            // Finalmente, destruir la sesión.
            session_destroy();
            // RRedirecciona a la pagina de logeo
            echo '<script type="text/javascript">alert("Contraseña incorrecta!!");location.href ="login.php";</script>';
        }
    } 
}



                                       
?>

