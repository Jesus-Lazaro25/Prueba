

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro de Usuario</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>
<body class="d-flex align-items-center justify-content-center vh-100">
  <div class="card p-4 shadow" style="width: 100%; max-width: 400px;">
    <h4 class="text-center mb-3">Registrar nuevo usuario</h4>
    <form action="php/registro.php" method="POST">
    <div class="mb-3">
    <input type="text" name="usuario" class="form-control mb-2" placeholder="Usuario" required>
    </div>
    <div class="mb-3">
    <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" required pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ ]+" title="Solo letras y espacios">
    </div>
    <div class="mb-3">
    <input type="email" name="correo" class="form-control" placeholder="Correo electrónico" required>
    </div>
       <div class="input-group mb-3">
  <input type="password" name="contrasena" id="contrasena" class="form-control"
         placeholder="Contraseña (6-10 caracteres)" required
         minlength="6" maxlength="10"
         pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{6,10}$"
         title="Debe tener entre 6 y 10 caracteres, incluyendo una mayúscula, una minúscula, un número y un carácter especial">
  <button type="button" class="btn btn-outline-secondary" onclick="togglePassword()">
    <i class="bi bi-eye" id="icono-ojo"></i>
  </button>
</div>

