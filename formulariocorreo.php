<?php
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];
    
    // Enviar un correo electrónico con los datos del formulario
    $asunto = "Formulario de contacto";
    $cuerpo = "Nombre: $nombre\nCorreo electrónico: $correo\nMensaje: $mensaje";
    
    mail("francisbranc@gmail.com", $asunto, $cuerpo);
    
    // Imprimir un mensaje de confirmación
    echo "Tu mensaje ha sido enviado.";
    ?>