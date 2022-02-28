<?php
// Inicializar la sesión.
session_start();


// Destruir la sesión completamente, borrando también la cookie de sesión.
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
    $params["path"], $params["domain"],
    $params["secure"], $params["httponly"]
);
}
// Destruir todas las variables de sesión.
$_SESSION = array();
// Finalmente, destruir la sesión.
session_destroy();
// Redirige
header("Location: login.php");
?>