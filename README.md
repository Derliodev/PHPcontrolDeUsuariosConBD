# PHPcontrolDeUsuariosConBD
Sistema de control básico de login en PHP con conexión a una DB

# DBPRINT
Contiene el archivo "trabajador.sql" para generar la base de datos neceesaria (dbprint) para realizar las pruebas de forma local, en este caso se uso XAMPP.

# Paginas

- Login: contiene un formulario de ingreso (HTML5) que envia los datos del ingreso de usuario para ser procesados.

- Admin: Recibe los datos de usuario enviados por login.php, realiza la consulta a la base de datos a traves de una coneccion basica, esta coneccion casi no posee seguridad, esta completamente comentada y contiene una opcion (Esta comentada) para realizar la prueba basica de la coneccion.

- Home: entrega un formulario con los datos del usuario que existe en la base de datos, tambien contiene un control para redirerccionar el navegador a los usuarios que no se hayan logeado.

- Logout: el archivo que destruye la session y todas las variables globales creadas desde el logeo (Logout básico).
