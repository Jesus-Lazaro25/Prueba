<?php
session_start();

// Si no hay sesión activa, redirige al login
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'admin') {
    header("Location: ../index.php");
    exit();
}
?>

<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'admin') {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Panel del Administrador</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap y Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #f4f6f9;
    }

    .sidebar {
      height: 100vh;
      width: 250px;
      position: fixed;
      background-color: #343a40;
      padding-top: 20px;
    }

    .sidebar a {
      color: #fff;
      padding: 15px;
      display: block;
      text-decoration: none;
    }

    .sidebar a:hover {
      background-color: #495057;
    }

    .content {
      margin-left: 250px;
      padding: 20px;
    }

    .card-opcion {
      text-align: center;
      padding: 20px;
      transition: transform 0.2s ease;
    }

    .card-opcion:hover {
      transform: scale(1.03);
    }

    .card i {
      font-size: 2rem;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
  <h5 class="text-white text-center mb-4">Admin: <?php echo $_SESSION['usuario']; ?></h5>
  <a href="/registro.php"><i class="bi bi-person-plus"></i> Agregar usuario</a>
  <a href="#"><i class="bi bi-people"></i> Lista de usuarios</a>
  <a href="#"><i class="bi bi-cash-stack"></i> Pagos</a>
  <a href="#"><i class="bi bi-exclamation-triangle"></i> Incidencias</a>
  <a href="#"><i class="bi bi-house-door"></i> Casas/Lotes</a>
  <a href="#"><i class="bi bi-megaphone"></i> Avisos</a>
  <a href="#"><i class="bi bi-clock-history"></i> Actividad</a>
  <a href="../php/cerrar.php"><i class="bi bi-box-arrow-left"></i> Cerrar sesión</a>
</div>

<!-- Contenido -->
<div class="content">
  <div class="container">
    <h2 class="mb-4">Panel del Administrador</h2>

    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card card-opcion shadow-sm">
          <i class="bi bi-person-plus text-primary"></i>
          <h5><a href="/registro.php" style="text-decoration: none; color: inherit; display: block;">Agregar usuario</a></h5>
        </div>
      </div>
      <div class="col">
        <div class="card card-opcion shadow-sm">
          <i class="bi bi-people text-success"></i>
          <h5>Lista de usuarios</h5>
        </div>
      </div>
      <div class="col">
        <div class="card card-opcion shadow-sm">
          <i class="bi bi-cash-stack text-warning"></i>
          <h5>Pagos</h5>
        </div>
      </div>
      <div class="col">
        <div class="card card-opcion shadow-sm">
          <i class="bi bi-exclamation-triangle text-danger"></i>
          <h5>Incidencias</h5>
        </div>
      </div>
      <div class="col">
        <div class="card card-opcion shadow-sm">
          <i class="bi bi-house-door text-info"></i>
          <h5>Casas/Lotes</h5>
        </div>
      </div>
      <div class="col">
        <div class="card card-opcion shadow-sm">
          <i class="bi bi-megaphone text-secondary"></i>
          <h5>Avisos</h5>
        </div>
      </div>
      <div class="col">
        <div class="card card-opcion shadow-sm">
          <i class="bi bi-clock-history text-dark"></i>
          <h5>Actividad</h5>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
