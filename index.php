<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $password = $_POST['password'];
    $edad = $_POST['edad'];
    $errors = [];

    // Verificar que todos los campos estén llenos
    if (empty($user) || empty($password) || empty($edad)) {
        $errors[] = "Todos los campos son obligatorios.";
    }

    // Validar que la edad sea un número y que el usuario sea mayor de edad (18 años o más)
    if (!is_numeric($edad) || $edad < 18) {
        $errors[] = "Debe ser mayor de edad (18 años o más).";
    }

    // Verificar que el usuario sea "luis" y la contraseña "mendoza"
    if ($user !== "luis" || $password !== "mendoza") {
        $errors[] = "Usuario o contraseña incorrectos.";
    }

    // Mostrar mensajes de error adecuados si las validaciones fallan
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {
        echo "<p style='color:green;'>Formulario enviado correctamente.</p>";
    }
}
?>
