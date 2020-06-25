<?php
    $destino= "gs18i04001@usonsonate.edu.sv";
    $nombre= $_Post["Nombre"];
    $correo= $_Post["Correo"];
    $telefono= $_Post["Telefono"];
    $mensaje= $_Post["Mensaje"];
    $contenido= "Nombre: " . $nombre ."\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;
    mail($destino, "Asunto del mensaje", $contenido);
?>