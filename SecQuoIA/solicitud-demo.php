<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $compania = $_POST["compania"];
    $pais = $_POST["pais"];

    $to = "tucorreo@ejemplo.com"; // Cambia esto por tu correo electrónico
    $subject = "Nueva solicitud de demostración";
    $message = "Nombre: $nombre\nApellido: $apellido\nEmail: $email\nTeléfono: $telefono\nCompañía: $compania\nPaís: $pais";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Solicitud enviada. Gracias, " . $nombre . ".";
    } else {
        echo "Hubo un error al enviar tu solicitud.";
    }
} else {
    echo "Por favor, completa el formulario.";
}
?>
