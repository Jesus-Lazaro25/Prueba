<?php
session_start();
include("conexion.php");

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Consulta segura con PostgreSQL
$sql = "SELECT * FROM usuarios WHERE usuario = $1";
$resultado = pg_query_params($conn, $sql, array($usuario));

if ($fila = pg_fetch_assoc($resultado)) {
    // Comparación directa SIN hash (porque tú guardas la contraseña como texto plano)
    if ($contrasena === $fila['contrasena']) {
        $_SESSION['usuario'] = $fila['usuario'];
        $_SESSION['rol'] = $fila['rol'];

        switch ($fila['rol']) {
            case 'admin':
                header("Location: ../vistas/admin.php");
                break;
            case 'cliente':
                header("Location: ../vistas/cliente.php");
                break;
            case 'proveedor':
                header("Location: ../vistas/proveedor.php");
                break;
            case 'trabajador':
                header("Location: ../vistas/trabajador.php");
                break;
            default:
                echo "❌ Rol no reconocido";
                break;
        }
    } else {
        echo "❌ Contraseña incorrecta";
    }
} else {
    echo "❌ Usuario no encontrado";
}
?>
