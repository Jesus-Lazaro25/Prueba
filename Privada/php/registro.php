<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];  // SIN encriptar
    $rol = $_POST['rol'];

    $sql = "INSERT INTO usuarios (usuario, contrasena, rol, nombre, correo) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $usuario, $contrasena, $rol, $nombre, $correo);

    if ($stmt->execute()) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Registro exitoso',
                text: 'El usuario ha sido registrado correctamente.',
                confirmButtonText: 'Volver al panel',
                allowOutsideClick: false
            }).then(() => {
                window.location.href = '../vistas/admin.php';
            });
        </script>";
    } else {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error al registrar',
                text: 'Hubo un problema: " . $stmt->error . "',
                confirmButtonText: 'Intentar de nuevo'
            }).then(() => {
                window.history.back();
            });
        </script>";
    }
    
    
    // Validaciones básicas
if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    // correo inválido
}

if (!preg_match("/^[A-Za-zÁÉÍÓÚáéíóúÑñ ]+$/", $nombre)) {
    // nombre inválido
}

if (strlen($contrasena) < 6 || strlen($contrasena) > 10) {
    // contraseña no cumple longitud
}

    
    
    $check = $conn->prepare("SELECT id FROM usuarios WHERE usuario = ? OR correo = ?");
$check->bind_param("ss", $usuario, $correo);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Usuario ya registrado',
            text: 'Este usuario o correo ya existe. Intenta con otros.',
            confirmButtonText: 'Volver'
        }).then(() => {
            window.history.back();
        });
    </script>";
    exit();
}

}
?>
