<?php

$mail='jorge.penela@gmail.com'; 

$nombre = $_POST['name'];
$correo = $_POST['email'];
$telefono = $_POST['phone'];
$comentario = $_POST['message'];

$header = "From: ".$nombre."<".$correo.">"."\r\n".
    "MIME-Version: 1.0\r\n".
    "Content-Type: text/html; charset=utf-8\r\n".
    "X-Priority: 1\r\n";
 
$message =  "<b>Nombre:</b> ".$nombre."<br>".
   "<b>E-Mail:</b> ".$correo."<br>".
   "<b>Teléfono:</b> ".$telefono."<br>".
   "<b>Comentario:</b> ".$comentario."";

$subject = "Contacto Bandol: Mensaje de {$nombre}.";

if (mail($mail, $subject, $message, $header)) 
{
 echo "<script language='javascript'>
   alert('Mensaje enviado, muchas gracias.');
   window.location.href = 'http://bandol.com.ar';
    </script>";
}
else
{
 echo 'Falló el envio';
}

?>
