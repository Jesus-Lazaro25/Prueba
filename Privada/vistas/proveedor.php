<?php
session_start();

// Si no hay sesión activa, redirige al login
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'proveedor') {
    header("Location: ../index.php");
    exit();
}

?>

<h2>Bienvenido, Proveedor</h2>
<p>Has iniciado sesión como: <?php echo $_SESSION['usuario']; ?></p>
<a href="../php/cerrar.php">Cerrar sesión</a>
