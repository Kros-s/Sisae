<?php
session_start();
// Destruye todas las variables de la sesión
$_SESSION = array();
 
//guardar el nombre de la sessión para luego borrar las cookies
$session_name = session_name();
 
//Para destruir una variable en específico
unset($_SESSION['usuario']);
 
// Finalmente, destruye la sesión
session_destroy();
 
// Para borrar las cookies asociadas a la sesión
// Es necesario hacer una petición http para que el navegador las elimine
if ( isset( $_COOKIE[ $session_name ] ) ) {
    if ( setcookie(session_name(), '', time()-3600, '/') ) {
        header("Location: index.html");
        exit();   
    }
 
}
 
?>
