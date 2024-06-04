<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $celular = $_POST['celular'];
    $email = $_POST['_replyto'];
    $mensaje = $_POST['message'];
    
    // Correo al que quieres enviar los datos del formulario
    $destinatario = "andresmacias978@gmail.com";
    
    // Asunto del correo
    $asunto = "Nuevo mensaje desde el formulario de contacto";
    
    // Cuerpo del correo
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Apellido: $apellido\n";
    $cuerpo .= "Celular: $celular\n";
    $cuerpo .= "Email: $email\n";
    $cuerpo .= "Mensaje:\n$mensaje";
    
    // Envía el correo
    mail($destinatario, $asunto, $cuerpo);
    
    // Redirecciona a una página de confirmación o muestra un mensaje de éxito
    header("Location: gracias.html");
} else {
    // Si se intenta acceder al archivo PHP directamente, redirecciona al formulario
    header("Location: formulario.html");
}
?>