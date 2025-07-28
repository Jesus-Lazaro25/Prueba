// Mostrar / ocultar contraseña
function togglePassword() {
  const passInput = document.getElementById("contrasena");
  if (passInput) {
    passInput.type = passInput.type === "password" ? "text" : "password";
  }
}

// Validación del formulario de registro
document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");
  if (!form) return;

  form.addEventListener("submit", function (e) {
    const nombre = document.querySelector("input[name='nombre']");
    const contrasena = document.querySelector("input[name='contrasena']");

    const nombreRegex = /^[A-Za-zÁÉÍÓÚáéíóúÑñ ]+$/;

    // Validar nombre
    if (nombre && !nombreRegex.test(nombre.value.trim())) {
      alert("El nombre solo debe contener letras y espacios.");
      e.preventDefault();
      return;
    }

    // Validar contraseña segura
if (contrasena) {
  const passVal = contrasena.value;
  const passRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{6,10}$/;

  if (!passRegex.test(passVal)) {
    alert("La contraseña debe tener entre 6 y 10 caracteres, incluyendo una mayúscula, una minúscula, un número y un carácter especial.");
    e.preventDefault();
    return;
  }
}

    // Puedes añadir más validaciones si quieres (correo, usuario, etc.)
  });
});
