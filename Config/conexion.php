<?php
$host = 'free.clusters.zeabur.com';
$port = 31169; // Puerto correcto
$user = 'root';
$pass = '1J7ETDQZ2B6o5xaq3IldzVHL0m8ts4C9';
$db = 'zeabur';

// Conexión al servidor MySQL especificando el puerto
$con = mysqli_connect($host, $user, $pass, $db, $port);

// Verifica la conexión
if (!$con) {
    die('Error de conexión: ' . mysqli_connect_error());
}
echo 'Conexión exitosa a la base de datos.';
?>
