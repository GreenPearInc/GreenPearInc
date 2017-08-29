<?php
 $destino= "contacto@greenpearinc.com";
 $correo= $_POST["your-email"];
 $nombre= $_POST["your-name"];
 $telefono= $_POST["your-phone"];
 $mensaje= $_POST["your-message"];
 $headers = "From: formcontact@greenpearinc.com" . "\r\n" .
"CC: alejandro.alfaro@greenpearinc.com,alejandro.castillo@greenpearinc.com";
 $contenido= "Nombre: ".$nombre. " '\nCorreo: ".$correo." \nTelefono: ".$telefono." \nMensaje: ".$mensaje;
 mail($destino, "Contacto a Green Pear", $contenido, $headers);
 header("Location:index.php");
 echo 'Correo enviado';
?>
