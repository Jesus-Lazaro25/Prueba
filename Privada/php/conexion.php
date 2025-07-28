<?php
$host = "localhost";       // o la IP del servidor si está en red
$port = "5432";            // puerto por defecto
$dbname = "privada";       // el nombre de tu base de datos
$user = "postgres";        // tu usuario de postgres
$password = "250305";  // tu contraseña real

// Cadena de conexión
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

// Validación de conexión
if (!$conn) {
    die("Error de conexión a PostgreSQL.");
}
?>

